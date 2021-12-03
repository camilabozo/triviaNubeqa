class Trivia
{
    questions;
    remainingQuestions;

    form = document.getElementById('triviaForm');
    finishButton = document.getElementById('finishButton');

    constructor(questions)
    {
        this.questions = questions;
        this.remainingQuestions = Object.keys(questions).length;
    }

    correctAnswers(){
        console.log("hola");
        let correctAnswers = 0;
        questions.forEach(question => {
            if(question.wasAnsweredCorrectly()){
                correctAnswers++;
            }
        });
        return correctAnswers;
    }

    enableFinishButton(){
        finishButton.style.backgroundColor = "#46B7E8";
        finishButton.style.transform = "scale(1)";
        finishButton.style.animation = "pulseA 2s infinite";
        finishButton.style.cursor = "pointer";
        finishButton.disabled = false;
    } 
}