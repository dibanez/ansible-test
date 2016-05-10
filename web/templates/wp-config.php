<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', '{{database}}');

/** Tu nombre de usuario de MySQL */
define('DB_USER', '{{userdb}}');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '{{passdb}}');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '{{hostdb}}');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WROqzIDUu|uRi9`whdBA@sv3qS_74+0XzYmg$F6lyO`?w=]I@c<EQ 6*cg6.B}yP');
define('SECURE_AUTH_KEY', 'ED8F$XQf),0Z$*U RGtn,m-2KmE N3bN;y#kS&E[.:q~1tK6S6Y}c8TZ*vVf7_d.');
define('LOGGED_IN_KEY', 'tlO(2g!Y92!%nNW?D9H(?Tp*MCs)2)8dwt/R!2cTT-un5I)*6LzY[A{.vD32-{X`');
define('NONCE_KEY', 'RGaIvI9VY~;q2WI|Nk|]ee~!8=jchG:7^Mgi9iBFoW!lFHA}KqXG}Uu) LM0H(P<');
define('AUTH_SALT', '$)=f/HWH7t?nul&&>,KAR}M!Xm{**@dyfo,AAxJQ}Ls`Nz39v4HlzTDhdRUw=3s/');
define('SECURE_AUTH_SALT', 'K}8ZEQFH*UGHFX/@i W&-DOkhD,uIjOS|sSa-1ytO`[IWj@~B14.)#jp~:3MxPy0');
define('LOGGED_IN_SALT', 'i.-oLAr_?>)jG|)_y2RN^BfA[zVGcfh7LK!PC:clC;,(Dm>#C1#FCr_JKIyhMBCV');
define('NONCE_SALT', 'A|TGgv%B^|.}_/!{i2VEt~R8#~9Sfzp s&-^*t_xkoPW!S~ONOiPWJFIdA|t`W#<');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
