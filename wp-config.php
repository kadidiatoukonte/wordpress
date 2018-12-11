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
define('DB_NAME', 'WordPress');

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
define('AUTH_KEY',         '.X@f^N31Fl9+lNJ%KW=Sh;|6PRhq4by&?#w @tb2aC.@:H2Svbv1UY]dsMKSsQOQ');
define('SECURE_AUTH_KEY',  '(i|8X^,vb<+}<S3[Qtn]]lE+KFWI`=e.,LA|oCmj+!!ohS2b]HO%ty8kK XL9aue');
define('LOGGED_IN_KEY',    '!a!W_RjKw]oZ*9P! <[INbU+P;0>m$qp N;M=ETLfAPMm]ME]*P`<Zxwe^-RF25 ');
define('NONCE_KEY',        '[?RmMSd;iCt?>AG[q`OCa3@!M{5lMTJ3iWJB<*jka.*,{g,X}Vt`X;uj|6h!aP^e');
define('AUTH_SALT',        'z/.y5!47p.8gUKC%`$[FKr(Mf`%n(]`$6q3Lhd<W,`q<IuGd,h(DqBfw1pL>NYw|');
define('SECURE_AUTH_SALT', '9qD(&ip[L&M*E}821*N `C(`q2I*=7U^hnH_q3:r5>6y9A$^w&#DtW`PLwYKbxBG');
define('LOGGED_IN_SALT',   'y*>VnLB`p! *XHL81jKezx%B(8!& bJ^2@9}UKFa09xDl|.fa[]G:UjCs6>}~aG^');
define('NONCE_SALT',       '+qKAiDXB)8/:U=a16DopEz.xy@8Yre;g5=uFJQ-OaD_,!x ^WYi^:lUua:?y_*,R');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
