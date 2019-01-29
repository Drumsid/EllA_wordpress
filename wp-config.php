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
define('DB_NAME', 'ella');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'h4$HpLN.)e~*u1-R:Z*1VBnHT(&Z%C3Y2plW68>H5a/=^`/yl`fPt23ef96;T<F4');
define('SECURE_AUTH_KEY',  '58|i1P=~(kMi};}%]zR7bGgOOEV>R1PUWI!y;SuGSUuDB:JJ9oclqr*|uEw(NDBe');
define('LOGGED_IN_KEY',    'GRi,7#!R#_-80CmYW,7r22{qWx@rAl<DpY*Rh~gvAuPE`A[!^r0?| #&[%Vgl#zm');
define('NONCE_KEY',        'xrp*ty#}B}^[w.j$oF1U8Oe$Vs/u_]gA0x$6N}Vu?OK_5H/K@u793]5eg9Ie<9(`');
define('AUTH_SALT',        'ssJk?l)Xu15+kW2p({bVR0CWlC6?C8Gc|^VM};+]U?=nxQ!7nC=rx<:*}#G*[/0.');
define('SECURE_AUTH_SALT', 'gh.5*ak,[avjMRP143G?e)fc79!A9LQ%(f@VIg,B9_&M0<TVN{ C v0U6}48[:/e');
define('LOGGED_IN_SALT',   '>tIn~;>6[G-W&eYfQVZ:V<&6@cu5kMsG,c05>Vz:5^eY4&!d#QV$uX}2N7m]OB~:');
define('NONCE_SALT',       '7#KGtbMJ$R8mowANQhGaeWhRdUR@Rs@v-+Row%@f}oq1CmK U5C@ $cir[K24gqF');

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
