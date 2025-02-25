<?php

spl_autoload_register(function ($class) {
    // Define the base directory for the namespace prefix
    $baseDir = __DIR__ . '/';

    // Convert namespace to file path
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    // Check if file exists, then require it
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Class file not found: $file\n";  // Debugging
    }
});


// function autoload($className)
// {
//     $className = ltrim($className, '\\');
//     $fileName = '';
//     $namespace = '';
//     if ($lastNsPos = strrpos($className, '\\')) {
//         $namespace = substr($className, 0, $lastNsPos);
//         $className = substr($className, $lastNsPos + 1);
//         $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
//     }

//     $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

//     require $fileName;
// }
// spl_autoload_register('autoload');