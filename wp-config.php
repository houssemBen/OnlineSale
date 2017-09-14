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

define('FS_METHOD' , 'direct');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'OnlineSale');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'T2(/_L9nMqo,o7oAL{ ]6{lq@Q{K}/oF*ZdMhJ>L[BR72jzvo:Tn&1M>vo?NRxAk');
define('SECURE_AUTH_KEY',  'AuHbS%k|({U_!TeiQ1RNHx]G^#Q=n lUPx8^9Nd(_dCmGqr[y4w+lybFiO(&_/6F');
define('LOGGED_IN_KEY',    'fB&1AI=Dr&8Bv)&9k.6f0{HKJMT3j|ro:vC%Vez`bzocPDI.NEl`_nW*nb--U2l$');
define('NONCE_KEY',        'hP*USSJh{Q1;n5ic#-5p/-H_+-va#XN$,JT|ZY3=Rnwe5E$>fp;]>EqE}|ss<Pmd');
define('AUTH_SALT',        'PJ&n4Tp[u1S^n ww9N%9CRarRBxq+^!ka?xPk}EGb_P=v>(^>uAHIU4xAxJy-T-y');
define('SECURE_AUTH_SALT', 'WRQFq:ZMQ%qCw.?hE0M3bDsmP?*;y}G?_IY<IeRUVlw*)|&|+]E37^y~xnswA^ ?');
define('LOGGED_IN_SALT',   '<87[]NCyvrlf5HRE$f|h&;+:@JR)3=Y+]DG$EXSF/+QZ_.pMgjvH-;7nZ>W%qI(x');
define('NONCE_SALT',       'q}+c}/Q+oXCHC|E))w;3[=c%s5tDW_IYa?p&~J81 -chyo3zt!=Fnr5?}x@c1D?w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');