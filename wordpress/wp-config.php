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
define( 'DB_NAME', 'mission_4' );

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
define( 'AUTH_KEY',         '^jxAz4sr/hJz4?g5AnT /4>(#oABi)8AB5U?$02mzQT${?K?&wrn/$2f@Ix+kThC' );
define( 'SECURE_AUTH_KEY',  'Ji!Oe AG%laEvREZJ<p]4s`=}68TfgT6NtEDqPjv_<|+.7!Uw5[EK~%,Cz=#VOK(' );
define( 'LOGGED_IN_KEY',    'gYT#,Eq Llx?M_;0*PU1XyiH#IyK][m8Ls#K.nalPUATs%6 %,6=eB>YjkySZG<e' );
define( 'NONCE_KEY',        '](0owur#N Vb9|<SLtJV:KziuhnUkj&)B)TKfoUv1re3RP%5F]qC6{w.Y>%tUM}y' );
define( 'AUTH_SALT',        'r{@>F+V`BwlsiMJ<34u:g_+&AH;ph=@m anI+)0iBJPU$s<kq[Ye#G)Txj~YYPNd' );
define( 'SECURE_AUTH_SALT', 'UMl,ulC+~2M1SsN]:eVVbFdf(&?wPQ3gL7=C-F=/DXv+!/oUsdy_q*v<mpfbNiJS' );
define( 'LOGGED_IN_SALT',   'n8<FC6+o:CmQNVi _Il~=I,q|3:a[JS?iCFovf-d:yXGa+:T0=I/fN4i,;ItxY:I' );
define( 'NONCE_SALT',       ' Ov-!;409YAcFWa7pp.,c:i;+zI;vr]u^~=>b*OPGr3hcHnz//p9c_gey;cLGJ7o' );
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
