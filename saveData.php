<?php
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["correct_answers"]) || !isset($_POST["employed_time"]) || !isset($_POST["end_time"])){
        header('Location: index.php');
    }else{
        $name = $_POST["userName"];
        $email = $_POST["userEmail"];
        $correct_answers = $_POST["correct_answers"];
        $employed_time = $_POST["employed_time"];
        $end_time = $_POST["end_time"];
        $archivo = fopen("data.txt", "a+");
        
        if($archivo == false){
            echo "Error al crear el archivo";
        }else{
            fwrite($archivo, $name."||".$email."||".$correct_answers."||".$employed_time."||".$end_time."**\r\n");
            fflush($archivo);
        }
    
        fclose($archivo);
        header("Location: result.php?correctAnswers=".$correct_answers);
    }
?>