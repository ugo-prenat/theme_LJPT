<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ljpt_db3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aJW+{ szb>&r8Wu*H.NZMXcPL^&|/Ayufl4{p<=7zMk<By3]le*<MRbcJJ#p&/#F' );
define( 'SECURE_AUTH_KEY',  '}-1~>AgJY9TE?pIv}!w;|kL+I#bcR[6Ix28Dg0r,r88+Yf,t8U7y 3C5 IWdKJk#' );
define( 'LOGGED_IN_KEY',    ']mHHwN4Ypn>TTdc`YYv1gAYe<*%^%S#FL,KAU]Aq|`BRpR9WT(-b4h^IQjVKd3U7' );
define( 'NONCE_KEY',        'kOgqkxfF+jc^V[wkz$!Bfufr;@Z)f0n<sW$Ue02/~4FkJQ14PFV/]zgOt;NBbSa=' );
define( 'AUTH_SALT',        '@6t>I|T9J;:[QFk1LzDcFO5o0$w=Nis6rZLN@w^gn6jg3S>|)Xf*T|?2~t3OOvvN' );
define( 'SECURE_AUTH_SALT', '# ziBC80{S]u>|BgG7-FzK/9+:?%&xKfkF8T4{a-!273}AUR0uq(z7Nf@q`6rhoN' );
define( 'LOGGED_IN_SALT',   'omz[g~NSwl<m)o:]-t{TKhylwrT.>#6]it^E?sY3E-STfOfoz8R$rbOapIJps$X^' );
define( 'NONCE_SALT',       'E7Xz$9lI`cLwc_,_jqoGQvUb$*j#*6V2;/:]XM4CNBN+2*]FY*xW3l~u:}cMU.u-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
