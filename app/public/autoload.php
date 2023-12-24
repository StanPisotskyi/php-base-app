<?php

$_namespaces = [
    'src',
    'lib'
];

spl_autoload_register(static function ($className) use ($_namespaces) {
    foreach ($_namespaces as $namespace) {
        $className = str_replace('\\', '/', $className);
        $fullName = __DIR__ . '/../' . $namespace . '/' . $className . '.php';

        if (!file_exists($fullName)) {
            continue;
        }

        require_once($fullName);
    }
});
