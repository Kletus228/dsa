<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Клас пользователя
    'identity' => \Model\Users::class,
    //Классы для middleware
    'routeMiddleware' => [
    'trim' => \Middlewares\TrimMiddleware::class,
    'auth' => \Middlewares\AuthMiddleware::class],
    'validators' => [
    'required' => \Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class,
     'validators' => [
    'required' => \Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class
]
]

];
