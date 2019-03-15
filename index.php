<?php

const LOCAL_PATH = __DIR__ . '/';

//  Bootstrap our functions
require_once(LOCAL_PATH . 'src/helpers/string_helper_functions.php');
require_once(LOCAL_PATH . 'src/helpers/view_loader_functions.php');

//  Let's not bother with routing for now and directly display the view instead.
view('profile.index', [
    'name' => 'Ervinne'
]);