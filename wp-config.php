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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'cmjl>1csTNg`;kZx&+Cwj ^-mT)_9sa=ClLyO9o%$$,l+Y9/v95+RgXpS[d0^bwu' );
define( 'SECURE_AUTH_KEY',  'oN=)4N7XZ_ogj05Il=CEp4E$Tj#_$U|vUyJ96M5id{9wEryH8q,)BGaR#{jW^6oO' );
define( 'LOGGED_IN_KEY',    '$Ym@InjfVa.@hv@OH?o3 K-6LALo0u0wtj:2,bBg5B*&|u,1Eeh;q{YtrnG!)@}*' );
define( 'NONCE_KEY',        'TUM>bQ0N;hWAsosIJ=<?F-O5?Nj%#VyIHK8|Z69j4|Kk$IQQGHGmeslFIEkdgU1/' );
define( 'AUTH_SALT',        ']r$6sZ2hMLn?9|r4KI@`8x~{,km;pm>kANSRP!/DYI`(W&}._[02!6W`Ve<Vs3Ba' );
define( 'SECURE_AUTH_SALT', '[$DX<Bs6B&ey*V?m*;FY*l=qOc1E~-LBT}3 =Csa+cC7WyuQsG/d4%82@3T,4f27' );
define( 'LOGGED_IN_SALT',   'WpAm;Os<Q[9_~Yi) ~!x83Uu#xb$!ksW-WKapY{A-UMl{X$>n%EXR*,*WG;a^4~?' );
define( 'NONCE_SALT',       '6{./wP,falAxx{=Ix$BmNin!ktr6=MU;Wf>J0=T!!2m!v|L3`%^;.?;3$-;FIuap' );
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
