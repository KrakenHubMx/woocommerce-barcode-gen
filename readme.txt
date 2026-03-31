=== Simple Barcode Generator ===
Contributors: joseph-sx, KrakenHubMx
Donate link: https://krakenhub.net/
Tags: woocommerce, barcode, qr-code, scanner ready
Requires at least: 5.0
Tested up to: 6.9.4
Stable tag: 1.0.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Genera códigos de barras en formato SVG basados en el SKU de WooCommerce directamente en la lista de productos del administrador.

== Description ==

Este plugin añade una columna en la sección de productos de WooCommerce que genera automáticamente un código de barras. Incluye un mecanismo de impresión optimizado y no requiere librerías PHP adicionales en tu servidor.

== Frequently Asked Questions ==

= ¿El plugin genera los códigos en mi hosting? =
No, los códigos se generan de forma externa y segura, sin rastreo de datos ni almacenamiento local de imágenes.

= ¿Requiere librerías especiales? =
No, al no generarse en tu hosting, no necesitas GD library ni ImageMagick.

== Changelog ==

= 1.0.0 =
* Se agregó verificación de dependencia: el plugin ahora requiere que WooCommerce esté instalado y activo para funcionar.
* Mejora en el sistema de avisos del administrador (notices) para evitar mensajes de activación contradictorios.
* Se agregó verificación de SKU: muestra el código solo si el campo existe.
* Mejoras en la generación de la página de impresión y corrección de errores en JS/CSS.
* Avance en el soporte de traducciones nativas de WooCommerce.

= 0.0.4 =
* Corregidos los paths de generación de imagen.
* Corregido error en el mecanismo de impresión (JS/CSS).
* Implementado sistema de actualizaciones automáticas vía GitHub.

= 0.0.3 =
* Pruebas iniciales del mecanismo de self-hosted updates.