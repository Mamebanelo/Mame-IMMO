<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mameimmobilier' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mamelo' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Mamebane' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bje3IRwh&T3%p(D[6wOI!C7|A8<,#NQNj])RoyQ!imbQVIJa4GJ*n~>D_9z]~B^:' );
define( 'SECURE_AUTH_KEY',  '>IQN=!xeah!Zf.:GX9~cVPyw:iaGde#P+mwY59i)Wz|!.H]!qz^Li`k>P~;kY~~a' );
define( 'LOGGED_IN_KEY',    'RNZQ^r^e=rqa{>e3SDS}uHzOhGa)y[;R-aa;f#=&u02HU.@/hbt m7r2,<9A;zYb' );
define( 'NONCE_KEY',        'q!AOF$j/;D{g,jRc{E,lxNQ`=B|P{5{;$tVp{P|6nF3;;GIP(}gs~f=dM^fYGZFb' );
define( 'AUTH_SALT',        '5)C&55sh*U^%8FJM$A|*Y<r8A}=4P!PzkqQjOITKOPq{H>6,9h[-=_<xMUE0]le%' );
define( 'SECURE_AUTH_SALT', 'e@;kW;mMVD4IvaXFT(XU_T/ ey3TmIqP2fd)[ays&D0iZwj;A;Y:5gC@wj-OH]Hs' );
define( 'LOGGED_IN_SALT',   '$H7o1ucEyQ4|tGERaT&a9UM73;[cu.scWx,fo`C/aM_l!H_I8kQ(RFGh]|1hywER' );
define( 'NONCE_SALT',       'v0g>Kn5m:x8yYR.wecK72jk(4al)JS2qr_-SICkbFA7<~ylYzrq+4H$vF1&yHmTe' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

    define('FS_METHOD','direct');
