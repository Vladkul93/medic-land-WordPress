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
define( 'DB_NAME', 'medi_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'RA~;F+$m% QTprKVbo-:{;xlDmLpB1E6xADf5*XzxL{8flv-4?]NFsz_}l,NocBD' );
define( 'SECURE_AUTH_KEY',  'JQsAafzVo$R@I{tDby`Iu&}YRAKOovn-+p]E4vfE.*a<OVa-):Z4_Wn1*7I]mn5V' );
define( 'LOGGED_IN_KEY',    'Rph1(@iAc--BGZ~}2movZt$~~d8l`C)q:;>DEfh$e,c!*+=P1h6W|xMrf;3ApuH5' );
define( 'NONCE_KEY',        'DZbU878BMz$&CKr.eV2DWc+eG[/Ic&e?T9cKwdR{6ulF0dadt%`a|$w6XP)^o@[E' );
define( 'AUTH_SALT',        '|?lhb 3Ga^(_Pr/(x=1L:N|y,vz12CqxeXx&0O.q-+kAQ+T3:Vuy`!zcT5~G_#oJ' );
define( 'SECURE_AUTH_SALT', 'c5?[21-B[*,38_=5us/+U]|Jb`;!uO+wLb_lx0>/;A[@3`eUG{5cZ}[[GO4Afp9w' );
define( 'LOGGED_IN_SALT',   '^TYw()nUD4Ic0H/YUyX{|L90eU~V;A>5G@!4.6>QQA8;[ SE_TBhQ.f*GR;e~]HV' );
define( 'NONCE_SALT',       '*2>sGIXDn1!7;uL!Hp*&Wn0XU-P^3}{?Cr6[X/T< |9gXT{/0nhzP_ MH%Nb!)_&' );

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
