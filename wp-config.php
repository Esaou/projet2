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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H[rWaw>kZTzbc{mG2.>VjZgC}e%9!gvv!y2P`fvnhCE.7FUUvd8H;AGl*],s^FuI' );
define( 'SECURE_AUTH_KEY',  '6EtoLj7CR{lDatY+gRa~.4.j]4]T;6 cA%W96e,Sqsv,|W(7!dw8$Dk[Vj~-E1hM' );
define( 'LOGGED_IN_KEY',    'nwRrBO*|zypY$K?Dl$k^]^G7#.ZA^#DO!y.}YI}tvu&RYu[=J{z(.wQ]a=z_:enC' );
define( 'NONCE_KEY',        'p9bn}n)jm98&/m&ZMQt=::?0iX&P)~`CXhxE#lj>~f%J=Vt}nQ Rv$d+lrJZ%G?n' );
define( 'AUTH_SALT',        'QDz1,,W#{3^S%wzeP]-+Am_xl{Zx?DK0>$M<~L<5UG<g;snjWJF~S6K%>T}hCf^.' );
define( 'SECURE_AUTH_SALT', '^bjIgwYFu+etD}bXq<.G5gI?QW?o{yv&9?9 H30&2vk74LJ,M[MmX#G-q8E1EISF' );
define( 'LOGGED_IN_SALT',   'J9ovb83h(<p0[3o`dk-g&N;:Ur+&kXO0U[s{i&G+E;|%-J1=jyhO-2~5BV/C3-rc' );
define( 'NONCE_SALT',       'W,*P5y/H mjbshS)nzqfm3!exOi(oNEFN?{A#g&#W+LR]fv]4}7>(8?>|C+^h;>,' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wamp_';

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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
