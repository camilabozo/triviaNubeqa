

var userName = sessionStorage.getItem('userName');
var userLastName = sessionStorage.getItem('userLastName');
var userEmail = sessionStorage.getItem('userEmail');

var questionOneAnswerOne   = document.getElementById('question_one_answer_one');
var questionOneAnswerTwo   = document.getElementById('question_one_answer_two');
var questionOneAnswerThree = document.getElementById('question_one_answer_three');
var questionOneAnswerFour  = document.getElementById('question_one_answer_four');

var questionTwoAnswerOne = document.getElementById('question_two_answer_one');
var questionTwoAnswerTwo = document.getElementById('question_two_answer_two');

var questionThreeAnswerOne   = document.getElementById('question_three_answer_one');
var questionThreeAnswerTwo   = document.getElementById('question_three_answer_two');
var questionThreeAnswerThree = document.getElementById('question_three_answer_three');
var questionThreeAnswerFour  = document.getElementById('question_three_answer_four');

var questionFourAnswerOne   = document.getElementById('question_four_answer_one');
var questionFourAnswerTwo   = document.getElementById('question_four_answer_two');
var questionFourAnswerThree = document.getElementById('question_four_answer_three');
var questionFourAnswerFour  = document.getElementById('question_four_answer_four');

var questionFiveAnswerOne   = document.getElementById('question_five_answer_one');
var questionFiveAnswerTwo   = document.getElementById('question_five_answer_two');
var questionFiveAnswerThree = document.getElementById('question_five_answer_three');
var questionFiveAnswerFour  = document.getElementById('question_five_answer_four');

const answer1  = new Answer(questionOneAnswerOne.id, 1, questionOneAnswerOne.nextElementSibling.innerHTML, false);
const answer2  = new Answer(questionOneAnswerTwo.id, 2, questionOneAnswerTwo.nextElementSibling.innerHTML, true);
const answer3  = new Answer(questionOneAnswerThree.id, 3, questionOneAnswerThree.nextElementSibling.innerHTML, false);
const answer4  = new Answer(questionOneAnswerFour.id, 4, questionOneAnswerFour.nextElementSibling.innerHTML, false);

var answersQuestion1 = Array();
answersQuestion1['question_one_answer_one'] = answer1;
answersQuestion1['question_one_answer_two'] = answer2;
answersQuestion1['question_one_answer_three'] = answer3;
answersQuestion1['question_one_answer_four'] = answer4;

const answer5  = new Answer(questionTwoAnswerOne.id, 1, questionTwoAnswerOne.nextElementSibling.innerHTML, false);
const answer6  = new Answer(questionTwoAnswerTwo.id, 2, questionTwoAnswerTwo.nextElementSibling.innerHTML, true);

var answersQuestion2 = Array();
answersQuestion2['question_two_answer_one'] = answer5;
answersQuestion2['question_two_answer_two'] = answer6;

const answer7  = new Answer(questionThreeAnswerOne.id, 1, questionThreeAnswerOne.nextElementSibling.innerHTML, false);
const answer8  = new Answer(questionThreeAnswerTwo.id, 2, questionThreeAnswerTwo.nextElementSibling.innerHTML, true);
const answer9  = new Answer(questionThreeAnswerThree.id, 3, questionThreeAnswerThree.nextElementSibling.innerHTML, false);
const answer10 = new Answer(questionThreeAnswerFour.id, 4, questionThreeAnswerFour.nextElementSibling.innerHTML, false);

var answersQuestion3 = Array();
answersQuestion3['question_three_answer_one'] = answer7;
answersQuestion3['question_three_answer_two'] = answer8;
answersQuestion3['question_three_answer_three'] = answer9;
answersQuestion3['question_three_answer_four'] = answer10;

const answer11 = new Answer(questionFourAnswerOne.id, 1, questionFourAnswerOne.nextElementSibling.innerHTML, false);
const answer12 = new Answer(questionFourAnswerTwo.id, 2, questionFourAnswerTwo.nextElementSibling.innerHTML, true);
const answer13 = new Answer(questionFourAnswerThree.id, 3, questionFourAnswerThree.nextElementSibling.innerHTML, false);
const answer14 = new Answer(questionFourAnswerFour.id, 4, questionFourAnswerFour.nextElementSibling.innerHTML, false);

var answersQuestion4 = Array();
answersQuestion4['question_four_answer_one'] = answer11;
answersQuestion4['question_four_answer_two'] = answer12;
answersQuestion4['question_four_answer_three'] = answer13;
answersQuestion4['question_four_answer_four'] = answer14;

const answer15 = new Answer(questionFiveAnswerOne.id, 1, questionFiveAnswerOne.nextElementSibling.innerHTML, false);
const answer16 = new Answer(questionFiveAnswerTwo.id, 2, questionFiveAnswerTwo.nextElementSibling.innerHTML, false);
const answer17 = new Answer(questionFiveAnswerThree.id, 3, questionFiveAnswerThree.nextElementSibling.innerHTML, true);
const answer18 = new Answer(questionFiveAnswerFour.id, 4, questionFiveAnswerFour.nextElementSibling.innerHTML, false);

var answersQuestion5 = Array();
answersQuestion5['question_five_answer_one'] = answer15;
answersQuestion5['question_five_answer_two'] = answer16;
answersQuestion5['question_five_answer_three'] = answer17;
answersQuestion5['question_five_answer_four'] = answer18;

const question1 = new Question(questionOneAnswerOne.name, 1, questionOneAnswerOne.parentNode.previousElementSibling.innerHTML, answersQuestion1);
const question2 = new Question(questionTwoAnswerOne.name, 2, questionTwoAnswerOne.parentNode.previousElementSibling.innerHTML, answersQuestion2);
const question3 = new Question(questionThreeAnswerOne.name, 3, questionThreeAnswerOne.parentNode.previousElementSibling.innerHTML, answersQuestion3);
const question4 = new Question(questionFourAnswerOne.name, 4, questionFourAnswerOne.parentNode.previousElementSibling.innerHTML, answersQuestion4);
const question5 = new Question(questionFiveAnswerOne.name, 5, questionFiveAnswerOne.parentNode.previousElementSibling.innerHTML, answersQuestion5);

var questions = new Array();
questions['question_one'] = question1;
questions['question_two'] = question2;
questions['question_three'] = question3;
questions['question_four'] = question4;
questions['question_five'] = question5;

const trivia = new Trivia(questions);

questionOneAnswerOne.addEventListener('click', answerQuestion);
questionOneAnswerTwo.addEventListener('click', answerQuestion);
questionOneAnswerThree.addEventListener('click', answerQuestion);
questionOneAnswerFour.addEventListener('click', answerQuestion);

questionTwoAnswerOne.addEventListener('click', answerQuestion);
questionTwoAnswerTwo.addEventListener('click', answerQuestion);

questionThreeAnswerOne.addEventListener('click', answerQuestion);
questionThreeAnswerTwo.addEventListener('click', answerQuestion);
questionThreeAnswerThree.addEventListener('click', answerQuestion);
questionThreeAnswerFour.addEventListener('click', answerQuestion);

questionFourAnswerOne.addEventListener('click', answerQuestion);
questionFourAnswerTwo.addEventListener('click', answerQuestion);
questionFourAnswerThree.addEventListener('click', answerQuestion);
questionFourAnswerFour.addEventListener('click', answerQuestion);

questionFiveAnswerOne.addEventListener('click', answerQuestion);
questionFiveAnswerTwo.addEventListener('click', answerQuestion);
questionFiveAnswerThree.addEventListener('click', answerQuestion);
questionFiveAnswerFour.addEventListener('click', answerQuestion);

function answerQuestion(event){
    let answeredQuestion = trivia.questions[event.target.name];
    if (answeredQuestion.hasNeverBeenAnswered()) {
        trivia.remainingQuestions--;
    }

    answeredQuestion.setUserAnswer(answeredQuestion.answers[event.target.id]);
    answeredQuestion.changeAnswersStyle();
    if (trivia.remainingQuestions == 0) {
        trivia.enableFinishButton();
    }
    
}