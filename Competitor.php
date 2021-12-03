<?php 

class Competitor{
    private $name;
    private $lastName;
    private $email;
    private $correctAnswers;
    private $endTime;

    public function __construct($name, $lastName, $email, $correctAnswers, $end_time){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->correctAnswers = $correctAnswers;
        $this->endTime = $end_time;
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCorrectAnswers(){
        return $this->correctAnswers;
    }

    public function getEndTime(){
        return $this->endTime;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setCorrectAnswers($correctAnswers){
        $this->correctAnswers = $correctAnswers;
    }

    public function setEndTime($end_time){
        $this->endTime = $end_time;
    }
}



