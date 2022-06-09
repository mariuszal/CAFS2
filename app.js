    const btn = document.querySelector('#button')
    const enterText = document.getElementById("enter-text");
    const display = document.querySelector("#display");
    button.addEventListener("click", function (event) {
       display.value = enterText.value;
    });


// console.log(btn);

// if (btn) {
//     console.log(btn);

//     btn.addEventListener('click', function(event) {
//         console.log('anonymous function', event);
//     });

//     btn.addEventListener('click', (event) => {
//         console.log('anonymous arrow function', event);
//     });

//     function clickEventHandler(event) {
//         console.log('clickEventHandler', event);
//     }

//     btn.addEventListener('click', clickEventHandler);

//     const clickEventHandlerAsVariable = function(event) {
//         console.log('clickEventHandlerAsVariable', event);
//     }

//     btn.addEventListener('click', clickEventHandlerAsVariable);
// }

// document.querySelector('button:last-of-type')?.addEventListener('click', clickEventHandler);
// document.querySelector('span')?.addEventListener('click', clickEventHandler);


