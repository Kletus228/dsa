<?php

namespace Controller;

use Model\Personal;
use Model\Chapter;
use Model\Post;
use Model\Adres;
use Src\View;
use Src\Request;
use Src\Validator\Validator;
use Model\Users;
use Src\Auth\Auth;
use Illuminate\Database\Capsule\Manager as DB;


class Site
{

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && Users::create($request->all())) {
            app()->route->redirect('/');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }
    public function add(Request $request)
    {
        if ($request->method === 'POST' && Personal::create($request->all())) {
            app()->route->redirect('/check');
        }
        if (!Users::isAdmin()) {
            app()->route->redirect('/');
        }

        return (new View())->render('site.add',['Adres' => DB::table('adres')->get(),'division' => DB::table('chapters')->get()]);
    }

    public function add_adres(Request $request)
    {
        if ($request->method === 'POST' && Adres::create($request->all())) {
            app()->route->redirect('/check');
        }
        if (!Users::isAdmin()) {
            app()->route->redirect('/');
        }
        return (new View())->render('site.add_adres');
    }


    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }




}
