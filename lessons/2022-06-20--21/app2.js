
function menuBarFunction() {

    var e = document.getElementById("mainMenu");
        if (e.className === "topnav") {
            e.className += " responsive";
        } else {
            e.className = "topnav";
            }
        }

function randomNr(howManyImages) {
    return Math.floor(Math.random() * howManyImages) + 1;
}        

function showRandomImg(randomImg) {
    const img = document.querySelector('.randomImg');
    return img.setAttribute('src', 'img/' + randomImg + '.jpg');
}


function time() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();

    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("time").innerHTML = h + ":" + m + ":" + s;
    setTimeout(time, 1000);
}

function checkTime(i) {
    if (i < 10) { 
        i = "0" + i
    };
    return i;
}

function formConfirmation() {
    let btn = document.getElementById('button');
    let msg = document.getElementById('msg');
    let inputName = document.getElementById('name');
    let inputComment = document.getElementById('comment');
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        if (inputName.value === '' || inputComment.value === '') {
            alert('all fields required');
        } else {
            let p = document.createElement('p');
            msg.appendChild(p);
            p.innerText = "excelent";
            button.disabled = true;
        }
    });
}

window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('menuBtn').addEventListener('click', menuBarFunction); 
    showRandomImg(randomNr(3));
    console.log(showRandomImg(randomNr(3)));
    setInterval('showRandomImg(randomNr(3))', 2000);
    time();
    formConfirmation();
})
