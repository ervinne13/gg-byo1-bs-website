<?php

const LOCAL_PATH = __DIR__ . '/';

//  Bootstrap our functions
require_once(LOCAL_PATH . 'src/helpers/string_helper_functions.php');
require_once(LOCAL_PATH . 'src/helpers/url_helper_functions.php');
require_once(LOCAL_PATH . 'src/helpers/view_loader_functions.php');

$route = get_request_route();
switch($route) {
    case '/':
        view('profile.index', [
            'name' => 'Ervinne'
        ]);
        break;
    case '/contact':
        if (is_request_method('POST')) {
            echo 'will be handled';
        }
        break;
    default:
        // throw new \Exception("Unhandled route {$route}");
}
