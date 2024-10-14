<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #007bff; /* Couleur de fond de l'en-tête */
            color: white;
            padding: 40px; /* Espacement intérieur */
            text-align: center; /* Centrer le texte */
            width: 100%; /* Prendre toute la largeur */
        }
        .login-container {
            max-width: 450px; /* Taille du formulaire */
            margin: auto;
            padding: 40px; /* Espacement agrandi */
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 30px; /* Décalage du haut */
        }
        h3 {
            text-align: center;
            margin-bottom: 30px; /* Espacement agrandi */
            color: #343a40;
            font-size: 28px; /* Augmenter la taille du texte */
        }
        .btn {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 1.2rem;
            padding: 12px; /* Espacement interne du bouton */
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .input-group-text {
            background-color: #e9ecef;
            border: none;
            font-size: 1.5rem; /* Agrandir la taille de l'icône */
        }
        .input-group {
            margin-bottom: 20px; /* Espace entre les champs */
        }
        .text-center a {
            color: #007bff;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red; /* Couleur rouge pour les messages d'erreur */
            text-align: center;
            margin-bottom: 20px; /* Espacement entre l'erreur et le formulaire */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h3>Connexion</h3>
            <?php endif; ?>
            <form action="" method="post">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" id="login" name="login" class="form-control" placeholder="Adresse email" required>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="btn">Se connecter</button>
            </form>
            <div class="text-center mt-3">
                <a href="inscription.php">Inscription</a>
                <br>
                <a href="motDePasseOublie.php">Mot de passe oublié ?</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
