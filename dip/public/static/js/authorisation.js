let form = document.forms.authorisation;
const SUCCESS = "Авторизация прошла успешно";
const ERROR = "Ошибка авторизации";
form.addEventListener('submit', sendRequest);

function responseHandler(response) {
    if(response == SUCCESS) {
        window.location.replace("/account");
    } else if (response == ERROR) {
        let elem = document.
        getElementById('error');
        elem.innerText = ERROR;
    }
}

function sendRequest(event) {
    event.preventDefault();
    let data = new FormData(this);
    let request = new XMLHttpRequest();
    request.open("POST", "/login",
        true);
    request.send(data);
    request.onload = function() {
        if (request.status === 200){
            responseHandler(request.responseText);
        }
    }
}
