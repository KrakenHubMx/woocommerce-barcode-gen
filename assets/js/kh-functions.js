/**
 * Simple Barcode Generator - Frontend Functions
 * @author: Joseph García
 * @version: 0.0.4
 */

console.log('KH JS Functions loaded');

function printBarcode(i) {
    const options = {
        barcodeValue: i.getAttribute("data-barcode-value") || '',
        itemName: i.getAttribute("data-item-name") || '',
        itemPrice: i.getAttribute("data-item-price") || ''
    };
    const win = window.open('', "_blank");
    const barcodeMarkup = `
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imprimir Etiqueta - ${options.barcodeValue}</title>
        <style>
            /* Estilos generales y para pantalla */
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                margin: 0;
                padding: 10px;
                color: black;
                text-align: center;
            }
            .label-wrapper {
                width: 100%;
                max-width: 250px; /* Ajustable según el ancho del papel térmico */
                margin: 0 auto;
            }
            p {
                margin: 4px 0;
                font-size: 13px;
                line-height: 1.2;
            }
            .sku-text {
                font-weight: bold;
                font-size: 14px;
                margin-top: 5px;
            }
            img {
                width: 100%;
                height: auto; /* Corregido el typo 'heigth' */
                display: block;
                margin: 8px 0;
            }
            
            /* Ajustes específicos para la impresora */
            @media print {
                @page { 
                    margin: 0; 
                }
                body { 
                    margin: 0.2cm; 
                }
                /* Ocultar elementos innecesarios del navegador si existieran */
                header, footer, .no-print {
                    display: none !important;
                }
            }
        </style>
    </head>
    <body onload="window.print(); window.close();">
        <div class="label-wrapper">
            <p>${options.itemName}</p>
            <p><strong>${options.itemPrice}</strong></p>
            
            <img src="https://wp-barcode.tkh.re/api/generate?v=${options.barcodeValue}" alt="Barcode">
            
            <p class="sku-text">${options.barcodeValue}</p>
        </div>
    </body>
    </html>`;

    win.document.write(barcodeMarkup);
    win.document.close();
}