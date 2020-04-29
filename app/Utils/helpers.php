<?php

use Laminas\Diactoros\Response\RedirectResponse;

if(!function_exists('base_path')){
    function base_path($path = ''){
        return __DIR__ . '/../..//' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if(!function_exists('public_path')){
    function public_path($path = ''){
        return __DIR__ . '/../../public//' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if(!function_exists('env')){
    function env($key,$default = null){
        $value = getenv($key);

        if($value == false){
            return $default;
        }

        switch (strtolower($value)){
            case $value == 'true':
                return true;
            case $value == 'false':
                return false;
            default:
                return $value;
        }
    }
}

if(!function_exists('redirect')){
    function redirect($path){
        return new RedirectResponse($path);
    }
}

