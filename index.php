<?php

require_once('vendor/autoload.php');

use Dotenv\Dotenv;
use Http\Controllers\ContactsController;
use Http\Requests\StoreContactRequest;

const LOCAL_PATH = __DIR__ . '/';

$dotenv = Dotenv::create(LOCAL_PATH);
$dotenv->load();

$route = get_request_route();
switch($route) {
    case '/':
        view('profile.index', [
            'name' => 'Ervinne'
        ]);
        break;
    case '/contact':
        if (is_request_method('POST')) {
            //  We'll refactor this later to use a better routing system.
            $request = new StoreContactRequest();            
            $controller = new ContactsController();
            $controller->store($request);
        }
        break;
    default:
        throw new \Exception("Unhandled route {$route}");
}
