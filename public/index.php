<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Login - RPG dos Anos 90</title>

    <link rel="stylesheet" href="public/css/style.css">

</head> 

<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="login.php"  id="login-form">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/script.js"></script>
</body>

</html>