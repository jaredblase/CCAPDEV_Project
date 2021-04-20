<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title><?= $title ?></title>
    <link rel='icon' href='../public/img/icon.png'>

    <link rel='stylesheet' href='../public/css/bulma.css'>
    <link rel='stylesheet' href='../public/css/custom.css'>
    <link rel='stylesheet' href='../public/css/fontawesome/css/all.css'>

    <script src='../public/js/jquery-3.6.0.js'></script>
</head>
<body>
<header>
    <nav class='navbar' role='navigation' aria-label='main navigation'>
        <div class='navbar-brand'>
            <a class='navbar-item' href='.'>
                <img src='../public/img/Logo.png' alt='brand'>
            </a>

            <a role='button' class='navbar-burger' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
            </a>
        </div>

        <div id='navbarBasicExample' class='navbar-menu'>
            <div class='navbar-start'>
                <a href='.' class='navbar-item'>Home</a>

                <a href='./about' class='navbar-item'>About</a>

                <a href='./explore' class='navbar-item'>Explore</a>
            </div>

            <div class='navbar-end'>
                <div class='navbar-item'>
                    <div class='buttons'>
                        <a class='button is-primary' href='signup.html'><strong>Sign up</strong></a>
                        <a class='button is-light' href='login.html'>Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<?= $output ?>

<footer class='footer'>
    <div class='content has-text-centered'>
                <span class='icon is-large'>
                    <a href='https://facebook.com/'><i class='fab fa-facebook fa-2x'></i></a>
                </span>
        <span class='icon is-large'>
                    <a href='https://twitter.com'><i class='fab fa-twitter fa-2x'></i></a>
                </span>
        <span class='icon is-large'>
                    <a href='https://linkedin.com'><i class='fab fa-linkedin fa-2x'></i></a>
                </span>
        <p>
            <strong>ShefHub</strong> by The Team.<br>
            &copy; Copyright <?= date('Y') ?>, The Team. All Rights Reserved.
        </p>
    </div>
</footer>
</body>
</html>