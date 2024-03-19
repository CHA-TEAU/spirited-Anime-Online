let redact = document.getElementById("red");
let ok = document.getElementById("ok__btn");
let form = document.getElementById('upload-form');

redact.addEventListener("click", function(){
redact.style.display = "none";

let loginField = document.querySelector('.login__field');
let currentLogin = loginField.textContent.trim();
let inputField = document.createElement('input');

inputField.setAttribute('type', 'text');
inputField.setAttribute('class', 'login__input');
inputField.setAttribute('value', currentLogin);
inputField.setAttribute('name', "login");

loginField.parentNode.replaceChild(inputField, loginField);
inputField.focus();

ok.style.display = 'block';
form.style.display = 'flex';
});



