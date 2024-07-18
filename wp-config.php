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
define( 'DB_NAME', 'restaurant_bd' );

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
define( 'AUTH_KEY',         'j8JX{-Phlsj?#20-{OJHO;=G_VTI8.ELQ7Um:l|s7V5odQ/&itsgOK`Jy0tUv3GQ' );
define( 'SECURE_AUTH_KEY',  '6`:8nt_(Kup;8&Z& g+,|{8c73xj%`F/vMlp(Rd.e<tw%|n%y#P$[t~pxVA)(Mgx' );
define( 'LOGGED_IN_KEY',    'S,kE:P9Pb}#X|HawY][UG$^XMkBi=Hh6=NyQnFAp5,vONRV1cIO}9Qrp}S$#<&0R' );
define( 'NONCE_KEY',        '&Wo/0R4*J[Kv~Q0{)>()D7bXVI=D8IOYkx*GCZvmKoVgkkA3ekjs1m|u//~8ySMB' );
define( 'AUTH_SALT',        'kqBbys=;21m,-i4$)V%-]C erd-Z_6GlJ8_8~uG:1`w`gj!j-/f:+(wP/y{#Vc0c' );
define( 'SECURE_AUTH_SALT', 'jT<}j&`M4g[gp9S]?ew3prn$/3eJ9wN]ae4|l`Fo:?8%E~jy*5uA*(_8OHj/a1~1' );
define( 'LOGGED_IN_SALT',   '=R?tJY*0Fd`l>T~{BpA|JgIFp)#>6Xlu;aw,oPTlV*$[$(5xqnMlH[tEV`8;m.Ee' );
define( 'NONCE_SALT',       'd$j_]|rx)mH73C917R*Br.e_:5lUTlZ0Ac/+W)^}y!gEWLN3ksod]oJYHh{jSbxL' );

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
