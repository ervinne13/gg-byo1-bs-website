<?php

// $_GET['search'] = '; DELETE TABLE users;';
$_GET['search'] = 'test';

$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);

echo "You have searched for $search_html.";

echo PHP_EOL;