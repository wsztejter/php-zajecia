<?php 
declare(strict_types=1);

namespace App;
include_once ('./src/utils/debug.php');

if (!empty($_GET['action'])) {
    $action = $_GET['action']; //$action = 'create'
} else {
    $action = null;
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> Moje notatki</h1>
</header>
<main>
    <nav>
        <ul>
            <li><a href="/">Lista notatek</a></li>
</ul>
</nav>

<article>
    <?php if ($action === 'create') : ?>
        <h3>Nowa notatka</h3>
        <?php else : ?>
            <h3>Lista notatek</h3>
            <?php endif; ?>
        </article>
        </main>
        <footer>Stopka</footer>
</body>
</html>