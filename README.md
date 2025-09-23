# 🌲 Restaurante Sabores del Bosque

Este proyecto consiste en el desarrollo de un sitio web para el **Restaurante Sabores del Bosque**, un espacio gastronómico inspirado en la naturaleza y en la frescura de los ingredientes locales. La página está pensada para ofrecer una experiencia digital inmersiva, mostrando el menú, servicios, información del restaurante y brindando la posibilidad de realizar reservas en línea.

El sitio web fue construido utilizando **HTML y CSS**, con organización de archivos en carpetas y un diseño enfocado en la simplicidad, la elegancia y la coherencia visual. Incluye imágenes personalizadas, estilos propios y componentes interactivos como formularios y botones de navegación.

---

## 📄 Estructura de páginas

- **index.html** → Página principal con:
  - Video de presentación en la sección *hero*.
  - Introducción al restaurante con galería de imágenes.
  - Sección de menú destacando bebidas, platos y servicios.
  - Formulario de reservas conectado con ubicación en Google Maps.

- **about-us.html** → Página de información sobre la identidad del restaurante.

- **contact.html** → Página de contacto con formulario y datos de ubicación para comunicación directa con el restaurante.

- **login.html** → Página de inicio de sesión destinada a clientes frecuentes o administración del sistema.

- **services.html** → Página de descripción de los diferentes servicios ofrecidos por el restaurante (eventos, reservas especiales, experiencias gastronómicas).

---

## 🎨 Paleta de colores usada

- **Fondo principal:** `#FFFFFF` (blanco)  
- **Bordes de formularios:** `#000000` (negro)  
- **Texto general:** `#000000` (negro)  
- **Negro translúcido (header):** `rgb(0 0 0 / 0.2)`  
- **Botón principal (azul oscuro translúcido):** `rgb(21 40 52 / 0.9)`  
- **Texto en botones:** `rgb(255 255 255)` (blanco)  
- **Navbar (verde principal):** `#2E7D32`  
- **Líneas decorativas:** `#FFFFFF` (blanco en separadores y bordes)  

### Visualización

| Color | Código | Uso |
|-------|--------|-----|
| ![#FFFFFF](https://via.placeholder.com/15/FFFFFF/000000?text=+) | `#FFFFFF` | Fondo principal, líneas y separadores |
| ![#000000](https://via.placeholder.com/15/000000/000000?text=+) | `#000000` | Texto general e íconos |
| ![#00000033](https://via.placeholder.com/15/00000033/000000?text=+) | `rgb(0 0 0 / 0.2)` | Fondo translúcido del header |
| ![#152834](https://via.placeholder.com/15/152834/000000?text=+) | `rgb(21 40 52 / 0.9)` | Botones principales |
| ![#2E7D32](https://via.placeholder.com/15/2E7D32/000000?text=+) | `#2E7D32` | Fondo de la barra de navegación |
| ![#FFFFFF](https://via.placeholder.com/15/FFFFFF/000000?text=+) | `#FFFFFF` | Texto y enlaces en navbar/botones |

---

## 📂 Organización del proyecto

- **/html** → Contiene los archivos `.html` (index, about-us, contact, login, services).  
- **/assets** → Carpeta con imágenes y videos utilizados en la página.  
- **/css** → Archivos de estilos (`reset.css`, `styles.css`, `navbar.css`).  
- **README.md** → Documento con descripción del proyecto y paleta de colores.  

---

## 🚀 Objetivo

Brindar una **plataforma digital moderna** para el restaurante Sabores del Bosque, que refleje su identidad visual y permita a los usuarios:
- Conocer el menú y los servicios.
- Reservar mesas de forma rápida y sencilla.
- Contactar fácilmente al restaurante.
- Navegar en un entorno visual atractivo y coherente con la temática natural del lugar.

# Requisitos del Sistema - Página Web Restaurante 🖥️

## Requisitos Funcionales

1. **Landing Page**
   - Mostrar información general del restaurante (menú, servicios, ubicación, contacto).
   - Galería de imágenes de los platos y servicios.
   - Sección de "Sobre Nosotros".

2. **Gestión de Usuarios**
   - Registro de nuevos usuarios.
   - Inicio y cierre de sesión.
   - Actualización de información de usuario.
   - Eliminación de cuentas de usuario.

3. **Gestión de Reservas**
   - Creación de reservas en línea por parte de los clientes.
   - Consulta del historial de reservas.
   - Actualización y cancelación de reservas.

4. **Gestión de Inventario (para administración)**
   - Registro de productos e insumos del restaurante.
   - Actualización de existencias.
   - Generación de alertas cuando el inventario esté bajo.

5. **Panel de Administración**
   - Acceso restringido a personal autorizado.
   - Visualización de usuarios registrados.
   - Gestión de reservas de clientes.
   - Gestión de inventarios.

6. **Contacto**
   - Formulario de contacto para consultas.
   - Información de ubicación y medios de comunicación.

---

## Requisitos No Funcionales

1. **Usabilidad**
   - Interfaz clara e intuitiva para clientes y administradores.
   - Diseño adaptable (responsive) a dispositivos móviles y de escritorio.

2. **Seguridad**
   - Validación de datos en formularios.
   - Encriptación de contraseñas en la base de datos.
   - Control de acceso según roles (cliente/administrador).

3. **Rendimiento**
   - Carga rápida de páginas (< 3 segundos).
   - Optimización de imágenes y recursos estáticos.

4. **Escalabilidad**
   - Posibilidad de ampliar el sistema para incluir más módulos (delivery, facturación, etc.).

5. **Disponibilidad**
   - El sistema debe estar disponible al menos el 99% del tiempo.
   - Manejo de errores y mensajes claros al usuario.

6. **Mantenibilidad**
   - Código organizado por módulos (HTML, CSS, PHP).
   - Documentación básica del sistema (README, comentarios en código).

7. **Compatibilidad**
   - Soporte para navegadores principales (Chrome, Firefox, Edge).
   - Correcto funcionamiento en dispositivos móviles, tablets y PCs.

