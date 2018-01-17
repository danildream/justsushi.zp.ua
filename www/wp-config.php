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
define('DB_NAME', 'justsushi');

/** Имя пользователя MySQL */
define('DB_USER', 'justsushi');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'justsushi');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D<)Xm5`W$|@QfY_&4aE{!H-FpP=|`?X+0|gPB<34m`BAb,S&rBSR:0{K)4$6]M_N');
define('SECURE_AUTH_KEY',  'ko^^pj_=sj)d:!#o9rq@o[yR|l:VA_p$Xn|@X+,a@#lr3II|V2%72=wEL[2&vz]j');
define('LOGGED_IN_KEY',    '2DKtm4_JzSqrbI):N8MW{yPp]w*huS/]yLulXRb):-@G$/)QsP+GMAQ_kaa1pY-A');
define('NONCE_KEY',        'o7n~OAb/|2UnPmJk+-E3+m@H4Fv[yu!LzuLc^ DGphR#~y2ym`pP<O<|i=2nS(Ku');
define('AUTH_SALT',        'Esjs+Tcji%1+ b|Ojz7,|d5_e +J$?OBgR|W)bQ79r`9&B4/xpjUuXc}_-f0>euL');
define('SECURE_AUTH_SALT', 'aRu|[rw8KS+wp<8%+x=}wqyA+dGa,}T+o?t#C&+ddu*cB/^`Sp]N 4@>amdr<MnG');
define('LOGGED_IN_SALT',   '}):Y($dZCOZcM/$(0-y~#(67:_?6z{X_z^/40%,a8>>;3#=rpSZ{e6:Wd|Z,Dl2}');
define('NONCE_SALT',       '4J(eQ-zRAwL;g+K^(Ud~Z,Q5J+_8r|o@4HZ=XOUt5w01<04(mb&J)>Asq@:g]gHW');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
