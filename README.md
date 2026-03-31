# Simple Barcode Generator

[![WordPress Version](https://img.shields.io/badge/WordPress-6.0%2B-blue.svg)](https://wordpress.org/)
[![WooCommerce Required](https://img.shields.io/badge/WooCommerce-Required-red.svg)](https://woocommerce.com/)
[![Version](https://img.shields.io/badge/Version-1.0.0-orange.svg)](#changelog)
[![License](https://img.shields.io/badge/License-GPL%20v2-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

Genera códigos de barras en formato **SVG** basados en el SKU de WooCommerce directamente en la lista de productos del administrador. Optimizado para impresión de etiquetas sin necesidad de librerías adicionales en tu servidor

---

## Descripción

Este plugin añade una columna en la sección de productos de WooCommerce que genera automáticamente un código de barras. Incluye un mecanismo de impresión optimizado y no requiere librerías PHP adicionales en tu servidor

### Características principales:
* **Validación de Dependencias:** El plugin verifica automáticamente si WooCommerce está activo antes de permitir su ejecución.
* **Ligero:** No requiere GD library ni ImageMagick.
* **Seguro:** Generación externa vía API segura sin rastreo de datos ni almacenamiento local.
* **Ready to Print:** Interfaz de impresión optimizada para etiquetas
* **Self-Hosted Updates:** Actualizaciones automáticas gestionadas desde este repositorio de GitHub

---

## Instalación

1. Descarga el repositorio como `.zip` o clónalo en tu carpeta de plugins:
   ```bash
   cd wp-content/plugins/
   git clone [https://github.com/KrakenHubMx/woocommerce-barcode-gen.git](https://github.com/KrakenHubMx/woocommerce-barcode-gen.git)
   ```
2. Activa el plugin desde el panel de **Plugins** en WordPress.
3. El sistema verificará automáticamente la presencia de **WooCommerce**.

---

## Preguntas Frecuentes

**¿El plugin genera los códigos en mi hosting?**
No, los códigos se generan de forma externa y segura, sin rastreo de datos ni almacenamiento local de imágenes.

**¿Requiere librerías especiales?**
No, al no generarse en tu hosting, no necesitas GD library ni ImageMagick.

---

## Changelog

### 1.0.0
* Versión inicial **estable** y optimizada para impresión de etiquetas, versión de lanzamiento oficial.
* **Seguridad:** Implementada verificación de instalación de WooCommerce; no permite la activación sin que el plugin base esté presente.
* **Estabilidad:** Mejoras en los avisos del administrador y corrección del mensaje de éxito en activaciones fallidas.
* **Funcionalidad:** Verificación de Barcode/SKU para mostrar el código solo si el campo existe.
* **UI:** Corrección de typos y mejoras en la vista de impresión.
* **Internacionalización:** Trabajo en progreso (20%) para el uso de traducciones nativas de WooCommerce.

### 0.0.4
* Corregidos los paths de generación de imagen (migración a `tkh.re`).
* Corregido error en el mecanismo de impresión (JS/CSS).
* Implementado sistema de actualizaciones automáticas vía GitHub.

### 0.0.3
* Pruebas iniciales del mecanismo de self-hosted updates.

---

## 👤 Autor
* **Joseph García** - [joseph-sx](https://github.com/joseph-sx)

---
*Licencia GPLv2 o posterior.*