<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultStyles.css">
    <title>¡Ups!</title>
</head>
<body>
    <main class="container">
        <section class="title__container">
            <h1>¡UPS!</h1>
            <h4>RESPONDISTE <?php echo $_GET['correctAnswers'] ?>/5 RESPUESTAS CORRECTAS</h4>
        </section>

        <section class="mid_title__container">
            <h4>Respondiste incorrectamente ALGUNA pregunta u otros participantes respondieron la trivia en menor tiempo.</h4>
        </section>

        <section class="last_title__container"> 
            <h6>Agradecemos tu participación en el streaming de este lanzamiento. Recordá que a partir de mañana podrás ver las respuestas a las consultas enviadas al Box de Preguntas durante el evento, en esta misma web, hasta el 17/12/2021.</h6>
            <h6><b>¡Gracias por participar!</b></h6>
        </section>

    </main>
</body>
</html>