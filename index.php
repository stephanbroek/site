<?php

define('DIR', dirname(__FILE__) . '/');
define('TEMPLATE_DIR', DIR . 'templates/');

require_once DIR . 'vendor/autoload.php';
require_once DIR . 'fn.php';

use \Smarty;
use \Parsedown;

$smarty = new Smarty();
$smarty->setTemplateDir(TEMPLATE_DIR);
$smarty->setCompileDir(DIR . 'cache/templates/');
$smarty->setConfigDir(DIR . 'config/');
$smarty->setCacheDir(DIR . 'cache/');


// Find the page required and default to index if none.
$page = substr($_SERVER['REQUEST_URI'],1) ?: 'index';

if (!preg_match('/^[A-Za-z0-9_\/-]+$/', $page))
   redirect('index');

$smarty->assign('page', $page);

if (file_exists($file = DIR . "pages/$page.md"))
{
   $parsedown = new Parsedown();
   $markdown = file_get_contents($file);
   $html = $parsedown->text($markdown);

} 
else if (file_exists($file = DIR . "pages/$page.html")) 
{
   $html = file_get_contents($file);
}
else
{
   redirect('index');
}

$smarty->assign('body', $html);

$smarty->display('main.tpl');

