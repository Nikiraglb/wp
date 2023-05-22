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
define( 'DB_NAME', 'wpru' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D@N?L@,yAW8$&-=<:vs{|ytpN9/2X~AA7YHhb9=KU@KF4TOy&xpsoD24<-q1Fq8U' );
define( 'SECURE_AUTH_KEY',  'h+@@OhYI!wj:#Mri(8$Jlm5a0-8|#WVYb:.pT_&04+]`{hyixq Y89/z>jOU1#h,' );
define( 'LOGGED_IN_KEY',    '0j`).,![g/v/G:<,)r29R@h:mW@8rKpS=Ien_}%1 G){$j1A;d#4:M %n3bNX0SQ' );
define( 'NONCE_KEY',        '4KQb{t4mSQ5I8ruw:WhtJ9pG4g?gY08JWLfzv>J8v?REoBDoxM8}gJ<`qOW=L]q=' );
define( 'AUTH_SALT',        'Nk*6JXB3s`MV&/X%GBM`T&~>Tr2BM#nj$l#QO8.E7yIj]+H|7L+kEgYiSI2!L04r' );
define( 'SECURE_AUTH_SALT', 'c~z`5_CSMz mclCmXG<0APvSP2b&R|a&Nq<8x,: [?>_7GuDGR4(>zWeQO/x{v}(' );
define( 'LOGGED_IN_SALT',   '?2zX]#>!hBu/ztn/akmr#lGNkUVE$RQz9tsAth1(Mg74)`GFy2W)ITy6;smw.B)1' );
define( 'NONCE_SALT',       'COcn6I}q74y[C1$c2qS~/sjB>vO,m1y#AjG1]i1@0:3R4c=8;,g:MeTgTd?clk*N' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_wpru_';

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
