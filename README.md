# 🏥 Infraestructura de red segura y gestión médica - Clínica Brossi, S.L.

[![Curso](https://img.shields.io/badge/Curso-2025--2026-green)]
[![Especialidad](https://img.shields.io/badge/TFG-ASIR-orange)](https://www.educa2.madrid.org)

Este repositorio contiene el **Proyecto de Fin de Grado (TFG)** para el ciclo de Administración de Sistemas Informáticos en Red. El proyecto aborda la digitalización integral de la **Clínica Brossi, S.L.**. **Poner más en la descripción**.

---

## 📖 Resumen del Proyecto
El objetivo es implementar una infraestructura de red empresarial y una plataforma web segura conectada a una base de datos en la nube. Se garantiza el cumplimiento del **RGPD** mediante la delimitación de accesos para personal administrativo, médicos, directores y pacientes, asegurando la integridad y privacidad de los datos de salud.

## 🛠️ Tecnologías

### Sistemas y Redes
* **Virtualización:** VirtualBox (Windows Server 2025, Ubuntu Server, Windows 11).
* **Simulación de Red:** Cisco Packet Tracer 8.2.
* **Servicios de Directorio:** Active Directory (GPOs, OUs, Gestión de usuarios).
* **Seguridad:** VPN (OpenVPN), Certificados SSL, Autenticación de Doble Factor (2FA).

### Desarrollo Web y Cloud
* **Frontend:** HTML5, CSS3, JavaScript.
* **Backend:** PHP.
* **Base de Datos:** Supabase (PostgreSQL en la nube).
* **Hosting:** Hostinger(seguramente).
* **Diseño:** Draw.io / Eraser.io.

---

## 🚀 Funcionalidades Clave

-   **Gestión de Citas inteligente:** Sistema de reserva y anulación en tiempo real.
-   **Sistema de notificaciones:** Alertas automáticas para pacientes sobre citas liberadas.
-   **Seguridad de acceso:** Implementación de políticas de grupo (GPOs) para restringir herramientas críticas en la red local.
-   **Acceso remoto seguro:** Configuración de túneles VPN para el personal autorizado.
-   **Chatbot de asistencia:** IA integrada para consultas rápidas de pacientes.

---

## 📂 Estructura del repositorio

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
