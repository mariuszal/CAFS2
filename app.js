// ALERT
let alertButton = document.getElementById('alert-btn');
  alertButton.addEventListener('click', function(e) {
  alert('hello world!!');
});



// UPPER LOWER CASE
let changeCase = document.querySelector('#inpute-case-change');
document.querySelector('#to-upper-case')?.addEventListener('click', (e) => {
  e.preventDefault();
  console.log(changeCase.value);
  changeCase.value = changeCase.value.toUpperCase();
});
document.querySelector('#to-lower-case')?.addEventListener('click', (e) => {
  e.preventDefault();
  console.log(changeCase.value);
  changeCase.value = changeCase.value.toLowerCase();
});
document.querySelector('#first-upper-case')?.addEventListener('click', (e) => {
  e.preventDefault();
  console.log(changeCase.value);
  changeCase.value = changeCase.value.charAt(0).toUpperCase() + changeCase.value.slice(1);
});
document.querySelector('#first-lower-case')?.addEventListener('click', (e) => {
  e.preventDefault();
  console.log(changeCase.value);
  changeCase.value = changeCase.value.charAt(0).toLowerCase() + changeCase.value.slice(1);
});



// BLOCK UNBLOCK INPUT
let blockUnblockInpute = document.querySelector('#block-unblock-inpute');
document.querySelector('#button-block')?.addEventListener('click', (e) => {
  blockUnblockInpute.disabled = true;
});
let blockUnblockInpute2 = document.querySelector('#block-unblock-inpute');
document.querySelector('#button-unblock')?.addEventListener('click', (e) => {
  blockUnblockInpute2.disabled = false;
});



// FORM VALIDATION 
(() => {
 const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



// TEXT AND BORDER DECOTARION 
let resetAll = document.querySelector('#reset-all');

let pointer = document.querySelector('#pointer');
let textCursor = document.querySelector('#text-cursor');
let copy = document.querySelector('#copy');
let help = document.querySelector('#help');
let crosshair = document.querySelector('#crosshair');
let changeText = document.querySelector('#text');
let redColor = document.querySelector('#red-color');
let greenColor = document.querySelector('#green-color');
let blueColor = document.querySelector('#blue-color');
let redBorder = document.querySelector('#red-border');
let greenBorder = document.querySelector('#green-border');
let blueBorder = document.querySelector('#blue-border');
// cursor
pointer?.addEventListener('click', function(e) {
  e.preventDefault();
  document.body.style.cursor = 'pointer';
  console.log('POINTER');
});
textCursor?.addEventListener('click', function(e) {
  e.preventDefault();
  document.body.style.cursor = 'text';
  console.log('TEXT');
});
copy?.addEventListener('click', function(e) {
  e.preventDefault();
  document.body.style.cursor = 'copy';
  console.log('COPY');
});
help?.addEventListener('click', function(e) {
  e.preventDefault();
  document.body.style.cursor = 'help';
  console.log('HELP');
});
crosshair?.addEventListener('click', function(e) {
  e.preventDefault();
  document.body.style.cursor = 'crosshair';
  console.log('CROSSHAIR');
});
// color
redColor?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'red';
});
greenColor?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'green';
});
blueColor?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'blue';
});
// border
redBorder?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.outline = '1px solid red';
});
greenBorder?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.outline = '1px solid green';
});
blueBorder?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.outline = '1px solid blue';
});
// reset
resetAll?.addEventListener('click', function(e) {
    e.preventDefault();
    changeText.style.color = 'black';
    changeText.style.outline = 'none';
    document.body.style.cursor = 'auto';
})