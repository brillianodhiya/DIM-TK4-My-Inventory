<?php
spl_autoload_register( 'autoloader' );

/**
 * Based on PHP Standard Recommendation (PSR), our team is using PSR-4 Autoloading standard.
 * PSR-4 Autoloading describe a specification for autoloading classes from file paths.
 *
 * Read the full documentation here:
 * https://www.php-fig.org/psr/
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function autoloader($class) {
    // replace namespace separators with directory separators in the relative
    // class name, append with .php
    $class_path = str_replace('\\', '/', $class);

    $file =  __DIR__ . '/../' . $class_path . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
}