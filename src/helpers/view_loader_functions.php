<?php

/**
 * Displays the specified view described in dot notation starting from the 'views' folder.
 * 
 * @param $view 
 *      The view to be displayed in dot notation.
 *      Example: displaying a view in /src/views/profile/index.php, 
 *      you may call this function with: view('profile.index')
 * @param $data
 *      Associative array representation of the variables you want
 *      your view to be able to access.
 *      Example: specifying [ 'name' => 'Ervinne' ] will enable the
 *      view to make use of a variable $name which contains the value
 *      'Ervinne'
 * 
 * @return void
 */
function view($view, $data = []) {
    //  Creates variables and encloses it in this scope
    extract($data);
    require(dot_to_path("src.views.$view") . '.php');
}