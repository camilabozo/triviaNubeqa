class Trivia
{
    user;
    questions;
    remainingQuestions;
    form = document.getElementById('triviaForm');
    finishButton = document.getElementById('finishButton');

    constructor(user, questions)
    {
        this.user = user;
        this.questions = questions;
        this.remainingQuestions = Object.keys(questions).length;
    }

    correctAnswers()
    {
        let corrects = 0;
        Object.keys(this.questions).forEach(question => {
            if (this.questions[question].wasPreviouslyAnswered() && this.questions[question].wasAnsweredCorrectly()) {
                corrects++;
            }
        });
        return corrects;
    }

    enableFinishButton()
    {
        const finishFunction = () => {
            this.finish()
        }
        finishButton.style.backgroundColor = "#46B7E8";
        finishButton.style.transform = "scale(1)";
        finishButton.style.animation = "pulseA 2s infinite";
        finishButton.style.cursor = "pointer";
        finishButton.addEventListener('click', finishFunction);
        finishButton.disabled = false;
    }

    finish()
    {
        var userNameInput = document.createElement('input');
        userNameInput.name = 'userName';
        userNameInput.type = 'hidden';
        userNameInput.value = user.name;    
        this.form.appendChild(userNameInput);

        var userLastNameInput = document.createElement('input');
        userLastNameInput.name = 'userLastName';
        userLastNameInput.type = 'hidden';
        userLastNameInput.value = user.lastName;    
        this.form.appendChild(userLastNameInput);
    
        var userEmailInput = document.createElement('input');
        userEmailInput.name = 'userEmail';
        userEmailInput.type = 'hidden';
        userEmailInput.value = user.email;    
        this.form.appendChild(userEmailInput);
    
        var correctAnswersInput = document.createElement('input');
        correctAnswersInput.name = 'correctAnswers';
        correctAnswersInput.type = 'hidden';
        correctAnswersInput.value = this.correctAnswers();
        this.form.appendChild(correctAnswersInput);

        this.form.submit();
    }
}