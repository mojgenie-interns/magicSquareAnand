<?php

$classmap = [
    'App' => __DIR__ . '/src/',
];


spl_autoload_register(function(string $name) use ($classmap) {
    $parts = explode('\\', $name);

    $namespace = array_shift($parts);
    $classfile = array_pop($parts) . '.php';

    if (! array_key_exists($namespace, $classmap)) {
        return;
    }

    $path = implode(DIRECTORY_SEPARATOR, $parts);
    $file = $classmap[$namespace] . $path . DIRECTORY_SEPARATOR . $classfile;

    if (! file_exists($file) && ! class_exists($name)) {
        return;
    }

    require_once $file;
});