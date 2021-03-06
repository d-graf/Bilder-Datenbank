<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/css/style.css"/>
    <title>Gallery</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Gallery</a></li>
                <?php if (Security::isLoggedIn()) : ?>
                    <li><a href="/image/upload">Upload</a></li>
                    <li><a href="/user/logout">Logout</a></li>
                <?php else : ?>
                    <li><a href="/user">Login</a></li>
                <?php endif; ?>
        </ul>
    </nav>
</header>
