<?php
    if(!isset($_POST["userName"]) || !isset($_POST["userLastName"]) || !isset($_POST["userEmail"]) || !isset($_POST["correctAnswers"])){
        header('Location: index.php');
    }else{
        $name = $_POST["userName"];
        $lastName = $_POST["userLastName"];
        $email = $_POST["userEmail"];
        $correctAnswers = $_POST["correctAnswers"];
        $today = getDate();
        $currentTime = $today['hours'].":".$today['minutes'].":".$today['seconds'];

        $file = fopen("data.txt", "a+");
        
        if($file == false){
            echo "Error al crear el archivo";
        }else{
            fwrite($file, $name."||".$lastName."||".$email."||".$correctAnswers."||".$currentTime."**\r\n");
            fflush($file);
        }
    
        fclose($file);
        if($correctAnswers == 5){
            header("Location: win.php");
        }else{
            header("Location: lose.php?correctAnswers=".$correctAnswers);
        }
    }
?>