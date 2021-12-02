var indexForm = document.getElementById("indexForm");
var userName = document.getElementById("userName");
var userLastName = document.getElementById("userLastName");
var nameMaxCharacters = 35;

userName.addEventListener("keydown", limitField);
userLastName.addEventListener("keydown", limitField);

$(document).ready(function(){
    $("#start__button").click(function(){
        var nameRegExp = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;

        var userName = document.forms["indexForm"]["userName"];
        var nameErrorMessage = document.getElementById('name_error__message');

        var userLastName = document.forms["indexForm"]["userLastName"];
        var lastNameErrorMessage = document.getElementById('lastname_error__message');
        
        var userEmail = document.forms["indexForm"]["userEmail"];
        var emailRegExp = /^([a-z\d\-._\u00f1\u00d1]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
        var emailErrorMessage = document.getElementById('email_error__message');
        var emailMaxCharacters = 50;
        
        var userEmailIsValid = validateField(userEmail, emailRegExp, emailErrorMessage, emailMaxCharacters);
        var userNameIsValid = validateField(userName, nameRegExp, nameErrorMessage, nameMaxCharacters);
        var userLastNameIsValid = validateField(userLastName, nameRegExp, lastNameErrorMessage, nameMaxCharacters);
    
        if(userNameIsValid && userLastNameIsValid && userEmailIsValid) {
            indexForm.submit();
        }
    });
});

function limitField(){
    if(userName.value.length > nameMaxCharacters){
        userName.value = userName.value.substr(0, nameMaxCharacters);
    }

    if(userLastName.value.length > nameMaxCharacters){
        userLastName.value = userLastName.value.substr(0, nameMaxCharacters);
    }
}

function validateField(field, regExp, errorMessage, maxCharacters){
    let isValid = false;
    const pattern = new RegExp(regExp);
    field.value = field.value.trim();
    
    if(!field.value) {
        isValid = false;
    }else if(field.value.length > maxCharacters) {    
        isValid = false;
    }else if(!pattern.test(field.value)){   
        isValid = false;
    }else{
        isValid = true;
    }

    if(!isValid) {
        field.focus();
        field.style.borderColor = 'red';
        errorMessage.hidden = false;
    }else{
        field.style.borderColor = 'black';
        errorMessage.hidden = true;
    }

    return isValid;
}