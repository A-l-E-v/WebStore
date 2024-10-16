<?php
/**
 * Файл настройки проекта
 */

// Константы для обращения к контроллерам
const PATHPREFIX = 'controllers/';
const PATHPOSTFIX = 'Controller.php';

// Папка шаблона
$templateFolder = 'default';

// Пути к шаблонам
define('TMPLTPREFIX', 'views/{$templateFolder}/');
const TMPLTPOSTFIX = '.tpl';

// Путь к шаблонам в www
define('TMPLTWEBPATH', 'templates/{$templateFolder}/');