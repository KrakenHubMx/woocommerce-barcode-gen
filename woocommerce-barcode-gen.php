<?php
/*
 * Plugin Name:       Simple Barcode Generator
 * Plugin URI:        https://krakenhub.net/
 * Description:       Create basic barcode to be printed taking the SKU field of woocommerce
 * Version:           1.0.0
 * Author:            KRAKENHUB
 * Author URI:        https://krakenhub.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html

 */
defined('ABSPATH') || exit;
define('KH_BCG_VERSION', '1.0.0');
define('KH_PATH', plugin_dir_path(__FILE__));
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    add_action('admin_notices', function () {
        ?>
        <div class="notice notice-error is-dismissible">
            <p><strong>Simple Barcode Generator</strong> requiere que <strong>WooCommerce</strong> esté instalado y activo para
                funcionar.</p>
        </div>
        <?php
    });
    return;
}

require KH_PATH . 'updater/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
/**
 * Setting up Hooks
 */
register_activation_hook(KH_PATH, 'activate');
register_deactivation_hook(KH_PATH, 'deactivate');
add_filter('manage_edit-product_columns', 'kh_add_print_barcode_column', 10, 1);
add_action('manage_product_posts_custom_column', 'kh_add_print_barcode_column_content', 10, 2);
add_action('admin_enqueue_scripts', 'kh_enqueue_admin_files');

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/KrakenHubMx/woocommerce-barcode-gen',
    __FILE__,
    'woocommerce-barcode-gen'
);
$myUpdateChecker->setBranch('main');
/**
 * Activate callback
 */
function activate()
{
    //Activation code in here   
}
add_action( 'admin_init', 'kh_bcg_check_woocommerce_dependency' );

function kh_bcg_check_woocommerce_dependency() {
    if ( ! class_exists( 'WooCommerce' ) ) {
        if ( isset($_GET['activate']) && $_GET['activate'] == 'true' ) {
            deactivate_plugins( plugin_basename( __FILE__ ) );
            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
            add_action( 'admin_notices', 'kh_bcg_wc_missing_notice' );
        }
        add_action( 'admin_notices', 'kh_bcg_wc_missing_notice' );
    }
}

function kh_bcg_wc_missing_notice() {
    ?>
    <div class="notice notice-error is-dismissible">
        <p><?php _e( '<strong>Simple Barcode Generator</strong> no ha sido activado porque requiere que WooCommerce esté instalado y activo.', 'woocommerce' ); ?></p>
    </div>
    <?php
}

/**
 * Deactivate callback
 */
function deactivate()
{
    //Deactivation code in here
}

// Add product new column in administration
function kh_add_print_barcode_column($columns)
{
    //add column
    $columns['print_barcode'] = __('Print Barcode', 'woocommerce');
    return $columns;
}

function kh_add_print_barcode_column_content($column, $postid)
{
    if ($column == 'print_barcode') {
        // Get product object
        $product = wc_get_product($postid);
        if($product->get_sku() != ""){
            echo '<center>
                        <img width="80px" src="https://wp-barcode.tkh.re/api/generate?v=' . $product->get_sku() . '&ver=' . KH_BCG_VERSION . '">
                            <br>
                                <a href="#" 
                                data-barcode-value="' . $product->get_sku() . '" 
                                data-item-name="' . $product->get_name() . '" 
                                data-item-price="' . html_entity_decode(strip_tags(wc_price($product->get_price()))) . '" 
                                onclick="printBarcode(this);return false;">Print Barcode</a>
                            <br>
                        </center>';
        }else{
            echo '<center>NO BARCODE TO PRINT</center>';
        }
    }
}

function kh_enqueue_admin_files($hook)
{
    if ('edit.php' !== $hook) {
        return;
    }
    wp_enqueue_script('kh_js_script', plugin_dir_url(__FILE__) . 'assets/js/kh-functions.js', array(), KH_BCG_VERSION);
}

