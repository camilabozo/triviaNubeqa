<?php
require "Competitor.php";
$file = fopen("data.txt", "rb");
$fileContent = fread($file, filesize("data.txt"));
$competitors = explode("**", $fileContent);
array_pop($competitors);
$competitorsArray = array();
foreach ($competitors as $c) { 
    $competitorData = explode("||", $c);
    $competitor = new Competitor($competitorData[0], $competitorData[1], $competitorData[2], $competitorData[3], $competitorData[4]);
    array_push($competitorsArray, $competitor);
}

// Creamos un array por cantidad de respuesas correctas
$competitorsWith0CorrectAnswers = array();
$competitorsWith1CorrectAnswers = array();
$competitorsWith2CorrectAnswers = array();
$competitorsWith3CorrectAnswers = array();
$competitorsWith4CorrectAnswers = array();
$competitorsWith5CorrectAnswers = array();

foreach ($competitorsArray as $c) { 
    switch ($c->getCorrectAnswers()) {
        case '0':
            array_push($competitorsWith0CorrectAnswers, $c);
            break;
        case '1':
            array_push($competitorsWith1CorrectAnswers, $c);
            break;
        case '2':
            array_push($competitorsWith2CorrectAnswers, $c);
            break;
        case '3':
            array_push($competitorsWith3CorrectAnswers, $c);
            break;
        case '4':
            array_push($competitorsWith4CorrectAnswers, $c);
            break;
        case '5':
            array_push($competitorsWith5CorrectAnswers, $c);
            break;
    }
}

// Ordenamos cada uno de los arreglos
usort($competitorsWith0CorrectAnswers, "compareByTime");
usort($competitorsWith1CorrectAnswers, "compareByTime");
usort($competitorsWith2CorrectAnswers, "compareByTime");
usort($competitorsWith3CorrectAnswers, "compareByTime");
usort($competitorsWith4CorrectAnswers, "compareByTime");
usort($competitorsWith5CorrectAnswers, "compareByTime");

// Mergeamos en orden los arreglos
$competitorsArray = array_merge($competitorsWith5CorrectAnswers, 
                                $competitorsWith4CorrectAnswers, 
                                $competitorsWith3CorrectAnswers, 
                                $competitorsWith2CorrectAnswers, 
                                $competitorsWith1CorrectAnswers, 
                                $competitorsWith0CorrectAnswers);

function compareByTime($competitorA, $competitorB){
    if ($competitorA->getEndTime() == $competitorB->getEndTime()) {
        return 0;
    }
    return ($competitorA->getEndTime() < $competitorB->getEndTime()) ? -1 : 1;
}