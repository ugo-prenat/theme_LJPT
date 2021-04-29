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
define( 'DB_NAME', 'LJPT-db' );

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
define( 'AUTH_KEY',         '9c;;7-v$%Yg8zuMqy9r8ND[6Lzr!RGg^4tEhz&#8EUe xnWG@jr!E<|}W3fT1sks' );
define( 'SECURE_AUTH_KEY',  '`IOZ3t6ms%?X?aJ||dl`!zZKOYIl+gOS#[+4_Z:t~qQAL{hV[mI{/1UV<Ll/oa/t' );
define( 'LOGGED_IN_KEY',    '!qO B0tyL6]:f9U1 i,FTkkX@fwx!B-1+Z84W3xw,G@m-n.%p<AX/HUDHV$wTnp@' );
define( 'NONCE_KEY',        'q{aSF2F)NMtg7rm=ISOE;,AC6t7EG-aVS(<;aEFYrk}k,Y>vw&F;0F /<K:kFPN|' );
define( 'AUTH_SALT',        'MC2rSx| cUt?3^M+I31CJlwOj-<%x9t%^cP^,ekFxN+MG,;=/W3lZw{sg=UD#tgB' );
define( 'SECURE_AUTH_SALT', '/MBGLz#9$le:XB$uJmf+nw|#^{YYt5w3dVa4&qx}>FOlm*h:D2I{Nu6Ma6r$-5XS' );
define( 'LOGGED_IN_SALT',   '}1+)4.^8RNLOt[E/uP{c1>beZ _l~,s0T@IX=OZXqf)SRxQ}Un!(a2N__yMb}DOv' );
define( 'NONCE_SALT',       '8khC&j%d8o:qa`_By/|FA)`wAYbE )]/52we5stzx=T/<k5(A9lwy+sY4j_L k2W' );
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
