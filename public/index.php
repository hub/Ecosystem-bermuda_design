<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!defined('H')) {
  define('H', $_SERVER ['DOCUMENT_ROOT'] . '/..'); // корневая директория сайта
}

require_once '../vendor/autoload.php';
use Jenssegers\Blade\Blade;

function view($template, $params = [], $view = true)
{
    static $blade;
    if (!$blade) {
        $blade = new Blade(H . '/resources/views/', H . '/resources/cache');
    }
    if ($view) {
        echo $blade->make($template, $params);
    } else {
        return $blade->make($template, $params);
    }
    
}

function dd($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
/************************************************************ */

if ( !empty($_GET['page']) ) {
  view($_GET['page']);
  exit;
}

$files = glob(H . '/resources/views/*.php');

view('home', compact('files'));
