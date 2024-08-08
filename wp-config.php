<?php
// ** Ajustes de la base de datos - Puedes obtener esta información de tu proveedor de servicios de alojamiento web ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'exampledb');

/** Nombre de usuario de la base de datos MySQL */
define('DB_USER', 'exampleuser');

/** Contraseña de la base de datos MySQL */
define('DB_PASSWORD', 'examplepass');

/** Host de la base de datos MySQL */
define('DB_HOST', 'db');

/** Conjunto de caracteres a utilizar en la base de datos. */
define('DB_CHARSET', 'utf8');

/** El tipo de cotejamiento de la base de datos. No cambies esto si no estás seguro. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * Cambia estas a frases únicas diferentes!
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de clave secreta de WordPress.org}.
 * Puedes cambiar esto en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a volver a iniciar sesión.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'pon aquí tu frase única');
define('SECURE_AUTH_KEY', 'pon aquí tu frase única');
define('LOGGED_IN_KEY', 'pon aquí tu frase única');
define('NONCE_KEY', 'pon aquí tu frase única');
define('AUTH_SALT', 'pon aquí tu frase única');
define('SECURE_AUTH_SALT', 'pon aquí tu frase única');
define('LOGGED_IN_SALT', 'pon aquí tu frase única');
define('NONCE_SALT', 'pon aquí tu frase única');

/**#@-*/

/**
 * Prefijo de la tabla de la base de datos de WordPress.
 *
 * Puedes tener múltiples instalaciones en una única base de datos si les das a cada una un prefijo único.
 * Solo números, letras y guiones bajos.
 */
$table_prefix = 'wp_';

/**
 * Para desarrolladores: modo de depuración de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Es recomendable que los desarrolladores de plugins y temas usen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para información sobre otras constantes que se pueden usar para depurar,
 * visita la documentación.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Eso es todo, deja de editar! Feliz blogueo. */

/** Path absoluto a la carpeta de WordPress. */
if ( !defined('ABSPATH') )
   define('ABSPATH', dirname(__FILE__) . '/');

/** Configura las variables de WordPress y archivos incluidos. */
require_once(ABSPATH . 'wp-settings.php');
