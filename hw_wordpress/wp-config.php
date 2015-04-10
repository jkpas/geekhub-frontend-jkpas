<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7u`i@6Sv=-^zmsbg4TtlD t$N_<kOO9~()n5Bv1DGcHASQ|IL4@tB;Lv`=H%ZMY>');
define('SECURE_AUTH_KEY',  'lp<uX%p[rlQ^[IE_C<Ah?3dnD<+</OUnv`aY+`5t=ar&x/$]}h+iU~6!;3rc--C-');
define('LOGGED_IN_KEY',    '+q+8Fky(C+oSsd-DYC LaOCFv*q%.~hLISYOB#dJK^y%|%#Xz?]5k3nCO!-%*b]w');
define('NONCE_KEY',        '{CrU}V8]z-taR&w4OhoYM7$K J5lD3elzuS=I|fe8(U#=,.TP3w>ndW2n>hcx8|G');
define('AUTH_SALT',        '_0b+FCh^9/{~JnM  4Rlh?npRW8s.H-!/=_e>:9jCjj0(WhTPO/LQsQSKqjHSxdt');
define('SECURE_AUTH_SALT', '?qdf$W#R?]U.3-pn+?ZA>09d5SZ$ngyOJu,sT.U+Ab1y4XqNQu3Q|*`gj{K$Gc`)');
define('LOGGED_IN_SALT',   'M^4n9nZ3q)&tHzSr|U,ZU|^7K0&_:xITo &XGuJarJ++Z//,Nk9Ppw}`Ohq!mKU+');
define('NONCE_SALT',       ';|bmDdPS1.kSrt%MjV-BE3c^XNr|8:f1nJoCTuw9_YmlNJmGAG)1Rtr_+<l#9._n');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
