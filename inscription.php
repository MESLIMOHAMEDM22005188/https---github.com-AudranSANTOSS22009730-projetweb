<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Inscription</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-form {
            background-color: rgb(255, 213, 43)
            color: black;
            width: 340px;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            radius: 200px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<div class="login-form">
    <?php
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
            case 'success':
                ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> inscription réussie !
                </div>
                <?php
                break;

            case 'password':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
                </div>
                <?php
                break;

            case 'email':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
                <?php
                break;

            case 'email_length':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email trop long
                </div>
                <?php
                break;

            case 'pseudo_length':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> pseudo trop long
                </div>
                <?php
                break;

            case 'already':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte déjà existant
                </div>
                <?php
                break;
        }
    }
    ?>

    <form action="inscription_traitement.php" method="post">
        <h2 class="text-center">Inscription</h2>
        <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="checkbox" id="showPassword"> Afficher le mot de passe
        </div>
        <div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
        </div>

        <!-- Ajouter le lien vers la page de connexion -->
        <p class="text-center">Déjà inscrit ? <a href="index.php">Connectez-vous ici</a></p>

        <!-- JavaScript pour afficher/masquer le mot de passe -->
        <script>
            const passwordField = document.getElementById('password');
            const showPasswordCheckbox = document.getElementById('showPassword');


            showPasswordCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    passwordField.type = 'text'; // Afficher le mot de passe
                } else {
                    passwordField.type = 'password'; // Masquer le mot de passe
                }
            });
        </script>
        <!-- Ajouter le lien vers la page de connexion -->

</body>
</html>
