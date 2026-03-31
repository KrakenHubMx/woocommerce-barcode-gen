
# Simple Barcode Generator

[![WordPress Version](https://img.shields.io/badge/WordPress-5x.0%2B-blue.svg)](https://wordpress.org/)
[![WooCommerce Required](https://img.shields.io/badge/WooCommerce-Required-red.svg)](https://woocommerce.com/)
[![License](https://img.shields.io/badge/License-GPL%20v2-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

Genera códigos de barras en formato **SVG** basados en el SKU de WooCommerce directamente en la lista de productos del administrador.

---

## Descripción

Este plugin añade una columna en la sección de productos de WooCommerce que genera automáticamente un código de barras. Incluye un mecanismo de impresión optimizado y no requiere librerías PHP adicionales en tu servidor.

### Características principales:
* **Ligero:** No requiere GD library ni ImageMagick.
* **Seguro:** Generación externa vía API de KrakenHub sin rastreo de datos.
* **Ready to Print:** Botón de impresión con estilos optimizados para etiquetas.
* **Self-Hosted Updates:** Actualizaciones automáticas gestionadas desde este repositorio de GitHub.

---

## Instalación

1. Descarga el repositorio como `.zip` o clónalo en tu carpeta de plugins:
   ```bash
   cd wp-content/plugins/
   git clone [https://github.com/KrakenHubMx/woocommerce-barcode-gen.git](https://github.com/KrakenHubMx/woocommerce-barcode-gen.git)
   ```
2. Activa el plugin desde el panel de **Plugins** en WordPress.
3. Asegúrate de tener **WooCommerce** instalado y activo.

---

## Preguntas Frecuentes

**¿El plugin genera los códigos en mi hosting?** No, los códigos se generan de forma externa y segura en la infraestructura de `tkh.re`, sin rastreo de datos ni almacenamiento local de imágenes.

**¿Requiere librerías especiales?** No, al no generarse en tu hosting, no necesitas configuraciones especiales de PHP como GD o ImageMagick.

---

## Changelog

### 0.0.4
* Corregidos los paths de generación de imagen (migración a `tkh.re`).
* Corregido error en el mecanismo de impresión (JS/CSS).
* Implementado sistema de actualizaciones automáticas vía **Plugin Update Checker**.

### 0.0.3
* Pruebas iniciales del mecanismo de self-hosted updates.

---

## 👤 Autor
* **Joseph García** - [joseph-sx](https://github.com/joseph-sx)


---
*Licencia GPLv2 o posterior.*
