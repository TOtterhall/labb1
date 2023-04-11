<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'henrik' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';%v7~.}lha+Hk420r,czAz/@(yz^.@3.CEry_h }#mx.{`zq,QpQ`W(abh/!.HOG' );
define( 'SECURE_AUTH_KEY',  '3&ND;q/)RG5enIN$rES^q*A!EVUN5jRd{2zg7N(HY}hgQzp 9,qq<r#6XM^8[&@q' );
define( 'LOGGED_IN_KEY',    '%.o)7iB|~cH&/4CDLFo!WM>g=t9DzNR%Q?bi=:UOrIJXsSSq)K[_HR|H@tOS>/DZ' );
define( 'NONCE_KEY',        '[RebIO4Kn&19Ih!0Onq[;LRyCjt{4CTYvZPrq8dqSQ$r8.A}<W{ic76d:@_ 3A,x' );
define( 'AUTH_SALT',        'hfKU:<I/yE+; B-k3{KyW=z1m WaDtPQd!tn02h_mML;3,SUDFSd<Tqmr}UhfE^w' );
define( 'SECURE_AUTH_SALT', 'NoF;~)2`mSk]{I4=irA !=BQgNd;|Ra,dH-G =H9k|#Hh;6HvyQ+Y16JOA[VcR`r' );
define( 'LOGGED_IN_SALT',   '%)azz<y1.#ifVj.g{HVk4j<f2&HI9z1X=T[<650s[svh!KFA:n=A/xT$mo$P)R3=' );
define( 'NONCE_SALT',       '94QYChp({{&,|o;c|6|J6]?P!c*:IRPXH-o?h*0MeBN>4|C(FFa_,ZS$YDE)<q|t' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');