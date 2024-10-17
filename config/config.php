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
define("TMPLTPREFIX", "views/{$templateFolder}/");
const TMPLTPOSTFIX = ".tpl";

// Путь к шаблонам в www
define('TMPLTWEBPATH', 'templates/{$templateFolder}/');

// Instantiated via composer
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();

// Конфигурирование Smarty
$smarty->setTemplateDir(TMPLTPREFIX);
$smarty->setConfigDir('library/Smarty/configs');
$smarty->setCompileDir('tmp/smarty/template_c');
$smarty->setCacheDir('tmp/smarty/cache');
// $smarty->testInstall();

$smarty->assign('templateWebPath', TMPLTWEBPATH);
