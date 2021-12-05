<?php
    include "orderCompetitors.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultsTable.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Resultados TRIVIA</title>
</head>
<body>

    <header class="header_container">
        <img class="logo" src="./assets/5.png" alt="Logo Nubeqa">
    </header>

    <main class="container">
        <section class="main__container">
            <section class="title__container">
                <h1>RESULTADOS DE LA TRIVIA</h1>
                <br>
                <h2>Cantidad total de participantes: <?php echo count($competitorsArray); ?></h2>
                <br>
                <h2>A continuación, se muestran los 50 ganadores que contestaron 5/5 preguntas correctamente. Además, se muestran 10 ganadores de backup.</h2>
                <br>
            </section>
            <section class="table__container">
                <table>
                    <tr>
                        <th>Participante</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Hora de finalización</th>
                        <th>Ganador</th>
                    </tr>
                    <?php

                        $rowColorClass = "winner__row";
                        $winnerType = "";
                        foreach ($competitorsWith5CorrectAnswers as $id => $competitor) 
                        {
                            if ($id < 60) 
                            {
                                if ($id <= 49) {
                                    $winnerType = "Ganador";
                                }elseif ($id >= 49) {
                                    $winnerType = "Ganador Backup";
                                    $rowColorClass = "backup_winner__row";
                                }
                                echo "<tr class='".$rowColorClass."'>";
                                echo "<td>".++$id."</td>";
                                echo "<td>".$competitor->getLastName()."</td>";
                                echo "<td>".$competitor->getName()."</td>";
                                echo "<td>".$competitor->getEmail()."</td>";
                                echo "<td>".$competitor->getEndTime()."hs</td>";
                                echo "<td>".$winnerType."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>
            </section>
        </section>
    </main>
</body>
</html>