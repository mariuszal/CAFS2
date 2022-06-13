    const btn = document.querySelector('#button')
    const enterText = document.getElementById("enter-text");
    const display = document.querySelector("#display");
    button.addEventListener("click", function (event) {
       display.value = enterText.value;
    });

