<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/pop-it-mvc/views/layouts/style.css" rel="stylesheet">
    <title>Pop it MVC</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Otdel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="<?= app()->route->getUrl('/ ') ?>">Главная </a>
            </li>

            <?php if (!app()->auth::check()):?>

                <li class="nav-item">
                    <a class="nav-link" <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            </li>


                <?php else: ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= app()->route->getUrl('/logout') ?>">Выход(<?= app()->auth::user()->name ?>)</a>

            </li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Кнопка выпадающего списка
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li> <a class="dropdown-item" href="<?= app()->route->getUrl('/add_adres') ?>">Адреса работника</a></li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= app()->route->getUrl('/add') ?>">Добавление Работника </a>
                        </li>

                    </ul>
                </div>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="<?= app()->route->getUrl('/viewing_add') ?>">Сотруднки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="<?= app()->route->getUrl('/viewing_add_adres') ?>">Адреса</a>
                </li>
    <?php endif; ?>
        </ul>
    </div>
</nav>
<header>
</header>
<main>
    <?= $content ?? '' ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
