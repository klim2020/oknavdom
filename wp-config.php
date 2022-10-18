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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kt416480_oknavdom' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'kt416480_oknavdom' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'J;v2)m53sF' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'kt416480.mysql.tools' );

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
define( 'AUTH_KEY',         'bQn0A&4kVpk$S?uPbqE]sxABO4IsG!ccew2[pxN[<NgR@^9#Pa Q;xw#n8<ep%N/' );
define( 'SECURE_AUTH_KEY',  'BQZ/h<CfEa}z_@A>d6#p&iSebfN<eruVjpXntZ-;3_+*8f#GY<f_:[_hQgG5!57r' );
define( 'LOGGED_IN_KEY',    '4EdBACrQ|Ok>jk ]3:W%S.9cw+a!sj{JDZsZ((Phb-:$v9sQAqfp(KPUa8G{2D2_' );
define( 'NONCE_KEY',        'y|8z, )s~y` K,jkmm>gAPZBcmd a}EcI%XXZ$(:/2rv$,4egv==l-[PrmrmSE/u' );
define( 'AUTH_SALT',        '{5LW!Ts}x77P@JPM3))A#ZLzKWCi?+`!x2kz ]D)ADOQNR$#c7>(^$HHCrn(,~?!' );
define( 'SECURE_AUTH_SALT', 'ez$*LY!ni#.hsFY/m3qbR)^.I+yW}Y/V7*YvxazmVIP`Z}$%?CBicv9+>_}5!h1u' );
define( 'LOGGED_IN_SALT',   'Em$(`lC]1Dr@$4xQn&f#P{92V8vHm{fqQ-isx:5GfEI{46!DV_xaHiD6~_0_]f-P' );
define( 'NONCE_SALT',       '8_n0;<]`6S$PP?7X453@:Y(R#x|10MbwH/tWjHY1?g,ly8-s:qXhKfz[S`CC^88*' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
