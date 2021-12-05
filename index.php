<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Trivia Nubeqa | BAYER</title>
</head>
<body>
    <!-- INICIO SECCION PÁGINA INACTIVA -->
    <main class="inactive_page">
        <section class="title_container">
            <h1>¡Podrás acceder a esta página una vez que el streaming haya finalizado!</h1>
        </section>
    </main>
    <!-- FIN SECCION PÁGINA INACTIVA -->

    <section class="main_page">
        <header class="header_container">
            <img class="logo" src="./assets/5.png" alt="Logo Nubeqa">
        </header>

        <!-- INICIO SECCION FORMULARIO REGISTRO -->
        <main class="register_container">
            <h2>Registro</h2>
            
            <form action="validate.php" class="form_container" id="indexForm" method="POST">
                <label for="nombre">
                    <input class="input" type="text" name="userName" id="userName" placeholder="Nombre" required>
                    <div class="error__message" id="name_error__message" hidden>
                        Nombre inválido. Sólo caracteres alfabéticos.
                    </div>
                </label>

                <label for="apellido">
                    <input class="input" type="text" name="userLastName" id="userLastName" placeholder="Apellido" required>
                    <div class="error__message" id="lastname_error__message" hidden>
                        Apellido inválido. Sólo caracteres alfabéticos.
                    </div>
                </label>

                <label for="email">
                    <input class="input" type="text" name="userEmail" id="userEmail" placeholder="Email" required>
                    <div class="error__message" id="email_error__message" hidden>
                        Email inválido.
                    </div>
                </label>

                <label for="button" class="button">
                    <button type="button" class="start_button" id="start__button">SIGUIENTE</button>
                </label>
            </form>
        </main>
        <!-- FIN SECCION FORMULARIO REGISTRO -->
    </section>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
    <?php 
        if(isset($_GET['message'])){ 
            $message = $_GET['message'];
            echo '<script> alert("'.$message.'") </script>';
        }
    ?>
</body>
</html>