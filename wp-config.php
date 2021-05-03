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
define( 'DB_NAME', 'ljpt_database' );

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
define( 'AUTH_KEY',         'mrlB&jX5Ye24O#AYyQ,CY^,+F&k2AWB2=[v6AGmi;md|Wvc!sd7lF?x[3uB2{(5i' );
define( 'SECURE_AUTH_KEY',  'cfN9Q >(_[koj1uLH9(Sv)?KTK0,B{,>e,-)enX0Ik/rN]AS:(=*31A3c(k ~:U2' );
define( 'LOGGED_IN_KEY',    ';3Wi| <ZSFdWW;dl<8IkNA_Z#23Tzl9oP>D#+)1:4N.45H-&p~$5fir{]#d,b+2(' );
define( 'NONCE_KEY',        'O{OCm`#.UF<%%OHzT_2Wl}sZo-T56DvulwvkR.O3=87,(g~^kmPrmsH`31bj U2F' );
define( 'AUTH_SALT',        'I@XV[&Pcj[hewn0Ux^2@I^J6=YxoZ<eB_x6p5|!b2iH?QfSf-_bX^  m7NxKhdRb' );
define( 'SECURE_AUTH_SALT', '(n2pUja<L)a/R|C4uz`g 7}#S9&h{T)1$*C@Nh;Rmq WBHXvQ}t:Cdrnc@btF|`m' );
define( 'LOGGED_IN_SALT',   ']M/hvXIgs*Fnfg`w`by2{F$v<u9eQ~WGA5I4%358kt7WuF#L}^&=:-LBWR D9)CO' );
define( 'NONCE_SALT',       'eI@2D@YpyI6R2!<InHUDC&RMJ&>;xQALx5VZ/-Oa6*3 [jP7[T&@)a.q8AypUu5V' );
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
