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
define( 'DB_NAME', 'cvantonio' );

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
define( 'AUTH_KEY',         '^Fh]vD+k6Y^z_@Up&IWYEfQ Mx>-+59KANIF7%hgevY-0B;qd]J82@^={o(h4+=e' );
define( 'SECURE_AUTH_KEY',  'f<}HfP{g$t#3Aoh(zJ#^8!sj<#,4h:gbQgO$qZ737p,K!gBjut}giQ!- V(!-:&`' );
define( 'LOGGED_IN_KEY',    'HyV$w@:Yqu[mGl;>&j=M6(VNE8mK0m)Axre||Cq(l_AxR,bcn5,3mDDK&}gzDg7?' );
define( 'NONCE_KEY',        '_/k~[W0?1~IiIM[it;6~KX|Clb+nwob,=]]9lyLk#>juKbS$pg_-6Hg;%gKUs}$+' );
define( 'AUTH_SALT',        'L^0TZ~aVgWL^Il;d|f{_U $:<ts:]}nyv[Z$Vclf}wgk`)a.EDyLw0&8p;N/Gpk?' );
define( 'SECURE_AUTH_SALT', 'fV5aquwCP UE%98w=t1=:qm_ 6UWH#|#~vJK%3?ZsrU<lgjfW2K%y9Ai>e+$`yt+' );
define( 'LOGGED_IN_SALT',   'l/at34u{V=YfNrUim1k/!R<)*^Is&0h$a_3aRoQ8{Tm.hf- )&-N~tCW qR0l.(4' );
define( 'NONCE_SALT',       'jR]H]pF/N1[vQR^z:t/kHo$oL^&MIS<]H2dn`fBu[lWrhJ70#b>Juyw><}PlGv>{' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cv_';

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
