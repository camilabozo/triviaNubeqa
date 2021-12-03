class Question 
{
    id;
    number;
    description;
    answers;
    userAnswer;

    constructor(id, number, description, answers)
    {
        this.id = id;
        this.number = number;
        this.description = description;
        this.answers = answers;
        this.userAnswer = null;
        this.itsTrust = false;
    }

    setUserAnswer(answer)
    {
        this.userAnswer = answer;
    }

    hasNeverBeenAnswered()
    {
        return this.userAnswer == null;
    }

    wasAnsweredCorrectly()
    {
        return this.userAnswer.isCorrect()
    }

    changeAnswersStyle()
    {
        Object.keys(this.answers).forEach(answer => {
            let element =  document.getElementById(answer).nextElementSibling;
            if (answer != this.userAnswer.id) {
               element.style.color = "#BEC0C2";
            }else{
               element.style.color = "white";
            }
        });
    }

}