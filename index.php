<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Momasta - Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">

    <h1>Bienvenido</h1>

    <form action="login.php" method="POST">

        <input type="email" name="email" placeholder="Correo" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Ingresar</button>

    </form>

    <a href="google-login.php" class="google">
        Ingresar con Google
    </a>

</div>

</body>
</html>