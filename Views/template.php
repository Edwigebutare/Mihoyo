<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
        <div class="menu">
            <a href="/home.php">Accueil</a>
        </div>
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
<?=$this->section('content')?>
</main>
<footer>
 <p> <?= date('Y') ?> - Projet Mihoyo | IUT Dijon-Auxerre</p>
</footer>

</body>

</html>