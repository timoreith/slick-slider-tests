<?php
require_once(__DIR__ . '/vendor/autoload.php');

$loader = new Twig_Loader_Filesystem(__DIR__ . '/tpl');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
));

$template = $twig->load('index.html');

echo $template->render(array('the' => 'variables', 'go' => 'here'));