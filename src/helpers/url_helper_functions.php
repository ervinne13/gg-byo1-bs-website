<?php

function get_request_route() {
    $url = trim($_SERVER['REQUEST_URI']);
    if (!starts_with($url, '/')) {
        $url = '/' . $url;
    }
    
    return $url;
}

function is_request_method($assertMethod) {
    return strtoupper(get_request_method()) === $assertMethod;
}

function get_request_method() {
    return $_SERVER['REQUEST_METHOD'];
}