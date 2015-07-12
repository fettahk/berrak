<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'berrak_makarna');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', '');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_!KNv4)x{m/)9*x)#u.EDD){s6ZBBY~eEoest&,Z~gr}u5i(q=BNj&le<FT%q>zG');
define('SECURE_AUTH_KEY',  '~7F!-UW`x7_9|eM%nVf-o0_69X+]-hLCA).g%C-yFNFAQ-^-|B-3b{cQnUWEt_,u');
define('LOGGED_IN_KEY',    'A0{|NSYbLqB FLl#PG_bKFkbn+xF9.GUHElfp[Mn=Q#_xMd;L4wp.ej3rgK.c>|b');
define('NONCE_KEY',        'w0WG|*#ZNMg@8K/lWBG~/G0MVzQI~>+U7>Dr@$~%<eG%_bfcDj$5[B?r-e(858==');
define('AUTH_SALT',        'y;,8HQ$I-x.-a-fUBkAL2W!8Zrfh@:0([H)-^dfu<%Re|f+_CCeoVVDAf}5gkRbW');
define('SECURE_AUTH_SALT', 'L/Y,bC^1Ng*YGkq#jE>bruhm4dDfaY[4:}4MB7=w=~ja0nv*VpEC|QlrU]ptyHg{');
define('LOGGED_IN_SALT',   '(Atc-9y+|8@L]vD}kmHPGN~[/66%V[!sI1W/RYcPbSA(yJV2kaV(>Z)W9C/FPY#S');
define('NONCE_SALT',       'RSM@vxoP|?x]5uf%PLAdEhvG*N:>W2u3}]4]V{>WVut#}a|vgguP`L*FY4$)zz=m');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
