<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress-development' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6=T^ P@Z*:%AUOa4%L (Az5{;/J6;~2q>?7&^V^0>3Sxq1`#vVQR>N>rNaUFNf6E' );
define( 'SECURE_AUTH_KEY',  '{P&y}oBy3M<#Y}AB;X,C~pksW7k!VP5V4e^[_oKHh=p<4%^}[4[_OtO)SGRScCH~' );
define( 'LOGGED_IN_KEY',    '*bHG=yESu`Jzvfg$x9|m  wv;M^/+h8]P55CSC`Q|wevBkA:kD,3ll3uYPDW-[1g' );
define( 'NONCE_KEY',        'OiOUEj^(Q13vVHn}>&{+`h7Q[6P=+kjS}@M9+_QOToSAx]w9FD?[`/x%x4}DXb9A' );
define( 'AUTH_SALT',        '[x@gbNLB HmmZJY8[/&H?PlJkfY>XbfrTNnWNJ#@MZzNUC;gF0>XR<+#W)qRGY3=' );
define( 'SECURE_AUTH_SALT', 'OdsVYh,1^u)CqE}j2*Q_,2e}Y%.Px eL=][u9]!u*+T,+DzaeI3xJnD+^Yg23TW2' );
define( 'LOGGED_IN_SALT',   '_{W_g<Bzd9eib|T?|WM1HH25x~4/Y@x?hq+@Xj%{#Hre~v){+jBYYs^$;r| Jm(?' );
define( 'NONCE_SALT',       'ku,B3`ZkaV7Q<0)(xvR@cE~R-[[L&f3V[k$sSO(?bssq=tf#or-(t;u?}bfMVDHf' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';