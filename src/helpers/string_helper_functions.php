<?php

/**
 * Converts a dot notation string to path.
 */
function dot_to_path($dotNotationString) {
    return LOCAL_PATH . str_replace('.', DIRECTORY_SEPARATOR, $dotNotationString);
}