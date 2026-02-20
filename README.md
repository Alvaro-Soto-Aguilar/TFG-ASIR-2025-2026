# 🏥 Infraestructura de Red Segura y Gestión Médica - Clínica Brossi, S.L.

[![Licencia](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Curso](https://img.shields.io/badge/Curso-2025--2026-green)](https://github.com/tu-usuario)
[![Especialidad](https://img.shields.io/badge/TFG-ASIR-orange)](https://www.educa2.madrid.org)

Este repositorio contiene el **Proyecto de Fin de Grado (TFG)** para el ciclo de Administración de Sistemas Informáticos en Red. El proyecto aborda la digitalización integral de la **Clínica Brossi, S.L.**, combinando administración de sistemas críticos, seguridad perimetral y desarrollo web moderno.

---

## 📖 Resumen del Proyecto (Abstract)
El objetivo es implementar una infraestructura de red empresarial robusta y una plataforma web segura conectada a una base de datos en la nube. Se garantiza el cumplimiento del **RGPD** mediante la delimitación de accesos (RBAC) para personal administrativo, médicos, directores y pacientes, asegurando la integridad y privacidad de los datos de salud.

## 🛠️ Stack Tecnológico

### Sistemas y Redes
* **Virtualización:** VirtualBox (Windows Server 2025, Ubuntu Server, Windows 11).
* **Simulación de Red:** Cisco Packet Tracer 8.2.
* **Servicios de Directorio:** Active Directory (GPOs, OUs, Gestión de usuarios).
* **Seguridad:** VPN (OpenVPN), Certificados SSL, Autenticación de Doble Factor (2FA).

### Desarrollo Web y Cloud
* **Frontend:** HTML5, CSS3, JavaScript.
* **Backend:** PHP.
* **Base de Datos:** Supabase (PostgreSQL en la nube).
* **Hosting:** Hostinger.
* **Diseño:** Draw.io / Eraser.io.

---

## 🚀 Funcionalidades Clave

-   **Gestión de Citas Inteligente:** Sistema de reserva y anulación en tiempo real.
-   **Sistema de Notificaciones:** Alertas automáticas para pacientes sobre citas liberadas.
-   **Seguridad de Acceso:** Implementación de políticas de grupo (GPOs) para restringir herramientas críticas en la red local.
-   **Acceso Remoto Seguro:** Configuración de túneles VPN para el personal autorizado.
-   **Chatbot de Asistencia:** IA integrada para consultas rápidas de pacientes.

---

## 📂 Estructura del Repositorio

* `/docs`: Documentación del TFG en PDF y manuales de usuario.
* `/src`: Código fuente de la plataforma web (PHP, JS, CSS).
* `/network`: Archivos de configuración de Packet Tracer (.pkt) y scripts de servidor.
* `/assets`: Capturas de pantalla, diagramas y logotipos.

---

## 🔧 Instalación y Despliegue

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/TFG-ASIR-2025-2026.git](https://github.com/tu-usuario/TFG-ASIR-2025-2026.git)
    ```
2.  **Configuración de Base de Datos:**
    * Importar el esquema SQL proporcionado en el panel de **Supabase**.
    * Configurar las variables de entorno en el archivo de conexión.
3.  **Despliegue de Servidores:**
    * Cargar las ISOs en VirtualBox.
    * Ejecutar el script de configuración del dominio `brossi.local`.

---

## 📊 Metodología
El proyecto se ha gestionado siguiendo una planificación detallada reflejada en un **Diagrama de Gantt**, con un análisis riguroso de costes y tiempos de implementación (RFTP).

---

## 👨‍💻 Autor
**Álvaro Soto Aguilar** *Estudiante de ASIR de la Universidad Alfonso X el Sabio(UAX) - Curso 2025/2026*

---
