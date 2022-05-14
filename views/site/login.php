<head>
    <link href="./views/layouts/style.css" rel="stylesheet">
</head>
<div class="container">
<h2 class="text-dark text-center pt-4"> Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3  class="text-dark text-center pt-4"><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post" class="dawwq">
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login" name="login">
        </div>
        <br>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-outline-dark mt-4 ">Submit</button>
    </form>
</div>
<?php endif;
