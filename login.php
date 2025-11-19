<?php
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "extindustria_bd");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Sanitizar entradas
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validar campos vacíos
    if (empty($username) || empty($password)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        // Consulta preparada para evitar SQL Injection
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE (username = ? OR email = ?) AND password = ?");
        $stmt->bind_param("sss", $username, $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Usuario válido
            $row = $result->fetch_assoc(); // Obtener datos del usuario
            $_SESSION['usuario'] = $username;
            $_SESSION['nombre']  = $row['nombre'];   // aquí guardas el nombre real del admin
            header("Location: admin/adm_index.php");
            exit();
        } else {
            $error = "Usuario, correo o contraseña incorrectos.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Extindustria - Login</title>
    <link rel="icon" href="img/Logo_Extindustria.svg" type="image/svg+xml" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container login-container">
        <div class="login-card">
            <div class="login-left">
                <h2>Bienvenido a Exindustria</h2>
                <p>Por favor, inicia sesión para continuar.</p>
            </div>
            <div class="login-right">
                <h3 class="mb-4">Iniciar sesión</h3>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username o Email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario o correo">
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                👁️
                            </button>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Recordar</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Ingresar</button>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>