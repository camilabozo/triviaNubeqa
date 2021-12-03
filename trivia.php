<?php
    if(!isset($_GET['name']) || !isset($_GET['lastname']) || !isset($_GET['email'])){
        header('Location: index.php');
    }else{
        $userName = $_GET['name'];
        $userLastName = $_GET['lastname'];
        $userEmail = $_GET['email']; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Trivia Nubeqa | BAYER</title>
</head>
<body>
    <section class="main_page">
        <!-- INICIO SECCION FORMULARIO REGISTRO -->
        <header class="header_container">
            <img class="logo" src="./assets/5.png" alt="Logo Nubeqa">
        </header>

        <!-- INICIO SECCION FORMULARIO TRIVIA -->
        <main class="trivia_container">
            <h2>Trivia</h2>

            <form action="saveData.php" class="trivia_form__container" id="triviaForm" method="POST">
                <label for="" class="question_container">
                    <h4>1. ¿La dosis diaria máxima recomendada de darolutamida es?</h4>
                    <section class="buttons_container">
                        <input name="question_one" type="radio" id="question_one_answer_one">
                        <label for="question_one_answer_one" class="large_button" name="question_one_answer_one">1.800 mg</label>

                        <input name="question_one" type="radio" id="question_one_answer_two">
                        <label for="question_one_answer_two" class="large_button" name="question_one_answer_two">1.200 mg</label>

                        <input name="question_one" type="radio" id="question_one_answer_three">
                        <label for="question_one_answer_three" class="large_button" name="question_one_answer_three">600 mg</label>

                        <input name="question_one" type="radio" id="question_one_answer_four">
                        <label for="question_one_answer_four" class="large_button" name="question_one_answer_four">300 mg</label>
                    </section>
                </label>

                <label for="" class="question_container">
                    <h4>2. ¿Los comprimidos recubiertos de darolutamida deben tomarse con agua, con el estómago vacío?</h4>
                    <section class="buttons_container">
                        <input name="question_two" type="radio" id="question_two_answer_one">
                        <label for="question_two_answer_one" class="large_button">Verdadero</label>

                        <input name="question_two" type="radio" id="question_two_answer_two">
                        <label for="question_two_answer_two" class="large_button">Falso</label>
                    </section>
                </label>

                <label for="" class="question_container">
                    <h4>3. En relación al estudio pivotal, ¿cuál de las siguientes afirmaciones considera correcta?</h4>
                    <section class="buttons_container">

                        <input name="question_three" type="radio" id="question_three_answer_one">
                        <label for="question_three_answer_one" class="large_button">Darolutamida redujo un 15% el riesgo de muerte vs. placebo.</label>

                        <input name="question_three" type="radio" id="question_three_answer_two">
                        <label for="question_three_answer_two" class="large_button">Darolutamida redujo un 31% el riesgo de muerte vs. placebo.</label>

                        <input name="question_three" type="radio" id="question_three_answer_three">
                        <label for="question_three_answer_three" class="large_button">Darolutamida redujo un 40% el riesgo de muerte vs. placebo.</label>

                        <input name="question_three" type="radio" id="question_three_answer_four">
                        <label for="question_three_answer_four" class="large_button">Darolutamida redujo un 50% el riesgo de muerte vs. placebo.</label>

                    </section>
                </label>

                <label for="" class="question_container">
                    <h4>4. ¿Cuál fue el criterio de valoración principal de eficacia del estudio ARAMIS?</h4>
                    <section class="buttons_container">
                        <input name="question_four" type="radio" id="question_four_answer_one">
                        <label for="question_four_answer_one" class="large_button">Sobrevida promedio.</label>

                        <input name="question_four" type="radio" id="question_four_answer_two">
                        <label for="question_four_answer_two" class="large_button">Sobrevida libre de metástasis.</label>

                        <input name="question_four" type="radio" id="question_four_answer_three">
                        <label name="question_four" for="question_four_answer_three" class="large_button">Tiempo hasta el inicio de la primera quimioterapia citotóxica para el cáncer de próstata.</label>

                        <input name="question_four" type="radio" id="question_four_answer_four"></button>
                        <label for="question_four_answer_four" class="large_button">Sobrevida libre de progresión.</label>

                    </section>
                </label>

                <label for="" class="question_container">
                    <h4>5. En el estudio ARAMIS... para el parámetro de eficacia principal, la mediana del tiempo transcurrido hasta el evento para Darolutamida y placebo fue ______/______ meses, respectivamente?</h4>
                    <section class="buttons_container">
                        <input name="question_five" type="radio" id="question_five_answer_one">
                        <label for="question_five_answer_one" class="large_button">18,4; 14,8.</label>

                        <input name="question_five" type="radio" id="question_five_answer_two">
                        <label for="question_five_answer_two" class="large_button">16,8; 14,8.</label>

                        <input name="question_five" type="radio" id="question_five_answer_three">
                        <label for="question_five_answer_three" class="large_button">40,4; 18,4.</label>

                        <input name="question_five" type="radio" id="question_five_answer_four"></button>
                        <label for="question_five_answer_four" class="large_button">39,0; 23,1.</label>
                    </section>
                </label>

                <label for="button" class="button">
                    <button type="button" class="blue_button" id="finishButton" disabled>ENVIAR</button>
                </label>
            </form>
        </main>
    </section>
    <?php 
        echo "<script>sessionStorage.setItem('userName', '".$userName."')</script>";
        echo "<script>sessionStorage.setItem('userLastName', '".$userLastName."')</script>";
        echo "<script>sessionStorage.setItem('userEmail', '".$userEmail."')</script>";
    ?>
    <script src="js/classes/User.js"></script>
    <script src="js/classes/Trivia.js"></script>
    <script src="js/classes/Question.js"></script>
    <script src="js/classes/Answer.js"></script>
    <script src="js/playTrivia.js"></script>
</body>
</html>