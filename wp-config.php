<?php
# Database Configuration
define( 'DB_NAME', 'wp_saintjames1' );
define( 'DB_USER', 'saintjames1' );
define( 'DB_PASSWORD', 'Qe7NOPDGaVQhDMkMT2oS' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ',y{Q??=*l){5>EUkTU{ku0 9w(^`:6)CS&uo}]lS7*YYRw]fM|-K$b6*6F8^Mjd+');
define('SECURE_AUTH_KEY',  'dihZ?<kFpD@c17b&V9+6CB4VS}KpG]B;!c}Ive}I>E^I!qdkn2z<>~MN0yKF]Hl`');
define('LOGGED_IN_KEY',    'g!)T}dv+!B)>L#A0O +j2[:J-x~-<FxhO&&IIfn+@qYo(2>}]/uJR;kkpb{h8k(w');
define('NONCE_KEY',        '+Z*00a)ph*fkb]p<(zJj&]]Qsapd<4(Aix8pearR/dSYR--md_O3P.[9,YpeH|zX');
define('AUTH_SALT',        '[9e0N8C=S+8HHjG43;dvq:(WF)(l,f2z|;e[pZ};9R!Zh5ZO$T1@|i4osh-+]wn8');
define('SECURE_AUTH_SALT', '(sa>GEUD8w7UbK9}Pox9}nb~+w^*?~)uRmDM-.v^u1,)?:_lIn{QxxqUBArE+/hm');
define('LOGGED_IN_SALT',   '6.Dps:NM-T}G0@Q[r+b7tF47e1hG-r2I,8X3F!-j0u4{-X.ETZG+$+{,^;?`Z0H$');
define('NONCE_SALT',       'ulP]XGK,7|sCGY7t]8jpp^_S#:tUFN+#h|mwf+sNOfsvai)OoAHY:|^*vF?S(%-I');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'saintjames1' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '933be0cb54b6c52f8c0a73cdcdd7e2e486396ea4' );

define( 'WPE_CLUSTER_ID', '170048' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'saintjames1.wpengine.com', 1 => 'saintjames1.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-170048', );

$wpe_special_ips=array ( 0 => '35.232.240.86', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
