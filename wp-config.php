<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'childhood_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'vurasa1999' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xhp~}f8y(1F@*y.vzN[1Hp0v0k,D!:dB}/v3/G,R;NI_5PG[>6?m)0uk(i.|B|ki' );
define( 'SECURE_AUTH_KEY',  ']B+HWajG6:`}{Y:%],nA<I%+hSplouG3r4NVD@v!<x4Ry!5?]pUE f7di[lKQoMa' );
define( 'LOGGED_IN_KEY',    ' 49)|+xtXkrn#4#>L|w#X`ZO-`KYN,3SXTZ/EJH:s1/=b)NFrF3kk;F)_oJQQWP}' );
define( 'NONCE_KEY',        '6N56K*i6r2uJd:;^dQNp!t8FxykHHL@I#T{q6Kx0&~O3Cyng)i8n?z&|Lm?M6rz1' );
define( 'AUTH_SALT',        ';lYV9tDj K&U,A]jd/!&Evtm;[[O04Net<t!gi{OBiAs8oPZ)}pa{>%k?g2/J*A2' );
define( 'SECURE_AUTH_SALT', 'x.Y>F8L8s. x>s=nU/L.MKIn]but6VA8=R_85>_3r3tIEw.a.[3H$=C;/4f(edT~' );
define( 'LOGGED_IN_SALT',   'u1)w>uG!gGqSF#zPavjS_UH52&8*9}`(A19Ls!3+Rw@G9C]cD>gJ+-:n 6~f1sxI' );
define( 'NONCE_SALT',       'U#|*y/c~#;Xqy.ZWiV-5k0PRoo2l:SeP3pVu#hbtjhRh*F#^@a8KAqadItH5>yQE' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

define('WP_MEMORY_LIMIT', '1024M');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
