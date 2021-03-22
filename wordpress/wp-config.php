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
define( 'AUTH_KEY',         'w5#Wv,/Lb&?@y+@[`U`@d4=.}0%vonRzB_xUl9M5iyF7%Ac;>6qNkTDf=SeqJbw3' );
define( 'SECURE_AUTH_KEY',  'EvX=;/eMCvI6./Tj;bgLeZZ;;+<n,Y<c`Yj{o9!_0Kel2l9UG;=2/V9{,}wc:]z?' );
define( 'LOGGED_IN_KEY',    '1zQ]@;eu9Cy(5z,po;`-1(eugujO/G@Vw+hO3&zqBoRiUTi`3`YLK$iet68*7r!X' );
define( 'NONCE_KEY',        '0cxr$*SOvS,Uq6KS<h-MMN:jbLAWIs~FZw2SXvL0tKZtPgmF.eb]Q~2%$~l:B736' );
define( 'AUTH_SALT',        'mTQg]07zYvB|86!:w-&4;4r.*qs[K;?nHrjlFd45y% ~|;W@ 2<P1#7=U0(1UVAC' );
define( 'SECURE_AUTH_SALT', 'Y>``Y+ zViU}^#wp~8m(numqr5g-^WAqz$u@EM*^Bue7gqXQ8XiP 7!&O~Q/=-UV' );
define( 'LOGGED_IN_SALT',   'HI~%Q.0S; eX7t`~dYL+Du@ xhOoP% ,zrgir|=:D*VaN0nG~Htj[h?ysbeePt){' );
define( 'NONCE_SALT',       '2S#8f+W9uq/c7 z3^*<|<%v;jzQql8Rtn(HX]OLTA8-&,r7g-JE-:F^}fP&<@Y^>' );
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
