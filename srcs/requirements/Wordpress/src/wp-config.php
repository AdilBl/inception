<?php

define( 'DB_NAME', getenv(mariadb_dbname));
define( 'DB_USER', getenv($mariadb_user));
define( 'DB_PASSWORD', getenv($mariadb_pass));
define( 'DB_HOST', getenv($mariadb_host).':3306');
define( "DB_CHARSET",			"utf8");
define( "DB_COLLATE",			"utf8_general_ci");



define('AUTH_KEY',         'UJ+m=j^-aYMzN.#C3H;c8nDOK[z%WOd_j8^5W%Z^%4na-YJw>QCt>:7h6(m)N;GZ');
define('SECURE_AUTH_KEY',  'u;-px~W9FCse4;`++{[!{+#,L<YFv3/h$b]=ZS[Q.5q/fZor2>%rir$Wtd[o+QT?');
define('LOGGED_IN_KEY',    '$LP7${;X9mtv;;O2;RtBD]0T-f{`&:FdhWS/5S%@%/n-.TO^eO 5Agu11: -=@4_');
define('NONCE_KEY',        '*/HDAVbC1Z};v|CpHQr+f;7P,xJWaN+w>3%LR^t}1}UV%yj$]Ef:-?KQIJ5p&f#/');
define('AUTH_SALT',        '[AIZOV|Cjl2^0vfK&Pel~n#Sk5JHY>A?.y1V<^[)SkB%D9BI+5hLqM1[w,27HiL;');
define('SECURE_AUTH_SALT', ',J`FVj|tXfZZ-GVlmD[}bju^<8Id*o%{/e}+qV|~tW>wXE:V=Tiv+*U(Ju-Y8@+s');
define('LOGGED_IN_SALT',   'kac-0,#MBicTw1>TO|J#=!c N|LI!BFx]pb^pGV<+j}w $QFGeJ2+n=P^yFMlB1@');
define('NONCE_SALT',       'Jvz+r w8`oY78 ,:9N<2VH A:OpCAhD`M||hTdS;Lx2-6bb2wAQ`^7(w)sUqtx|x');

$tableprefix = 'wp';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', DIR . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';