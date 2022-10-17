<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>contact</title>
    <link rel="stylesheet" href="connexion/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="connexion/css/styles.css">
    <link rel="stylesheet" href="connexion/css/trelyco-login-vertical-horizontal-1.css">
    <link rel="stylesheet" href="connexion/css/trelyco-login-vertical-horizontal.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div style="background-color: antiquewhite;">
        <div class="login-card">
            <img class="profile-img-card" src="connexion/img/ong2.png">
            <form class="form-signin"><span class="reauth-email"> </span><input class="form-control" type="email" id="inputEmail" required="" placeholder="Nom d'utilisateur" autofocus="">
                <input class="form-control" type="password" id="inputPassword" required="" placeholder="Mot de passe">
                <div class="checkbox"></div>
                <button class="btn btn-primary btn-lg d-block btn-signin w-100" type="submit">Connexion </button>
            </form>
        </div>
    </div>
    <?php include("footer.php"); ?>

</html>