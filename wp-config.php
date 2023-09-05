<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cz83522_kulmaks' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'cz83522_kulmaks' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'UVHq43nN' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1f2&K{oM2>v$x!%b1amRn@(D(@7mOqb3YdQ@8&n)t%7-=y,a8V3n,T0S<f*e5/l1' );
define( 'SECURE_AUTH_KEY',  'SWM:B7>;SNH*/43IyVUtHNm{i|4IanN,I>2X/>Vf]Cd_i+6S9(Kr):vBy[v|IwwU' );
define( 'LOGGED_IN_KEY',    '<2R0Gj]w*^:rFjaQXz{D:9(rUZZ(#ca(,(mBMrD(8gOS!_S?gbkr(/p;ps}%BvN(' );
define( 'NONCE_KEY',        'rrx_cmTL/N)~TmlRUcuqC9}qw8R /_%4&OF[3 >t5,|:q<_W*]}vp,Zxr1,}^INu' );
define( 'AUTH_SALT',        '1/alZ%_b^FjvSU;D$[nJg^63H#@6zSNCX1Rpv([uC((D4I@d>W@+8nS:;Tr+VD4K' );
define( 'SECURE_AUTH_SALT', '-d(gPiGM=1o}}svC7JnlltsL45 [<C{E9ReZr:mU)y^Q^Mjr4NVUIK^rDnZ;cmuR' );
define( 'LOGGED_IN_SALT',   'Naz`:QC@m2OlyZ6Qeb>z{MXvL,c0-j8!9`^@j(@y}o&Z-i_O-.o6ltfG#L  Y1Yw' );
define( 'NONCE_SALT',       '{tVZ1@-Ot`Zi<zt8c%ix0U0o|t)%{VfB.F~1IAbF5q$C@:>oQC3MNlcB?5;#<H%S' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
