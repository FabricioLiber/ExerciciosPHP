<?php
    // spl_autoload_register(
    //     function ($classe)
    //     {
    //         $classname = str_replace ("\\","/", $classe);
    //         // $classname = str_replace ("loja/","loja\\", $classe);
    //         $filename = "$classname.php";
    //         echo "Pesquisando por $filename<br>";
    //         if (file_exists($filename))
    //             include_once $filename;
    //     }
    // );

    spl_autoload_register(function ($class) {
        // project-specific namespace prefix
        $prefix = 'loja\\';
    
        // base directory for the namespace prefix
        $base_dir = __DIR__ . '/src/';
    
        // does the class use the namespace prefix?
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            // no, move to the next registered autoloader
            return;
        }
    
        // get the relative class name
        $relative_class = substr($class, $len);
        // replace the namespace prefix with the base directory, replace namespace
        // separators with directory separators in the relative class name, append
        // with .php
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        echo $file.'<br>';
        // if the file exists, require it
        if (file_exists($file)) {
            require $file;
        }
    });