<!DOCTYPE html>
<html lang="nl">
<?php $pagina = $pagina ?? basename($_SERVER['SCRIPT_NAME'], '.php'); ?>
<?php $theme_url = function_exists('get_stylesheet_directory_uri')
    ? get_stylesheet_directory_uri()
    : rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))), '/'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/style.css">
    <?php if (file_exists(__DIR__ . '/../css/' . $pagina . '.css')): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/css/<?php echo htmlspecialchars($pagina, ENT_QUOTES, 'UTF-8'); ?>.css">
    <?php endif; ?>
    <title>Jepser van Niekerk | Portfolio</title>
</head>

<body class="pagina-<?php echo htmlspecialchars($pagina, ENT_QUOTES, 'UTF-8'); ?>">
    <header class="navigatie">
        <a class="logo" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/01-over-mij.php">Jepser<span>.</span></a>
        <nav>
            <ul class="buttons">
                <li><a class="<?php echo $pagina === '01-over-mij' ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/01-over-mij.php">01 Home</a></li>
                <li><a class="<?php echo $pagina === '02-opleiding' ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/02-opleiding.php">02 Opleiding</a></li>
                <li><a class="<?php echo $pagina === '03-projecten' ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/03-projecten.php">03 Projecten</a></li>
                <li><a class="<?php echo $pagina === '04-vaardigheden' ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/04-vaardigheden.php">04 Skills</a></li>
                <li><a class="<?php echo $pagina === '05-contact' ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($theme_url, ENT_QUOTES, 'UTF-8'); ?>/hoofdstukken/05-contact.php">05 Contact</a></li>
            </ul>
        </nav>
    </header>