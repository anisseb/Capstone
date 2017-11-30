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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G,?7@)lQ-W~7BWrg57VBv$r$}:gk5%gui:5`YC7Tp{&Hz(_rx=@acy3v_3el.h`2');
define('SECURE_AUTH_KEY',  'y{_oM|Au^>*C(p,(73 ?;%fs!4#O@[ Q]EgjrQ!>? xM*AcC;P[.?XA vm@H1Mgk');
define('LOGGED_IN_KEY',    'R?{8@s-}[,3};Enij2l=Q:D9ido|Y#&1Qh>KiwSv>0U|xl9F,l>BPo1GDF<jwhG;');
define('NONCE_KEY',        'a9pf~?q!2K5m_?^cQze=h$C@zh,D;Td/B>N}zC-6RC|2^K)n|sWSV,L*ea;dt}~l');
define('AUTH_SALT',        'xdkdMcZe?9u+xw<0%NrqDVe6+dKm~!?r_QJ3;kokZ`D@{%Y)]tz.z.!m:%IpCkXS');
define('SECURE_AUTH_SALT', '#P`?OJ+rY+hbknSi>[TZG,#Bs*6<aFYJT9bCD.izv84mcZh+q(f2y/GL-&JQjHg@');
define('LOGGED_IN_SALT',   'ov-r>96!Rrp&,7@<?ii}u0V-2<Wwd>!+OCEORSvgI65aNcggx6+~T.M=(YlW55+d');
define('NONCE_SALT',       'ZRj7rs1Nuy99wz5w>E_ Ly3QIG_5lK)e:_q_R|@5?s}{&>sO.%,2ZlS{wHMZneFH');
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