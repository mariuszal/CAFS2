const companies = [
    [
        'alfreds furtt',
        'maria anders',
        'germany',
    ],
    [
        'centro comercial',
        'francisco chang',
        'mexico',
    ],
    [
        'ernst hadel',
        'roland mendel',
        'austria',
    ],
    [
        'island trading',
        'malen bennett',
        'UK',
    ]
];

const tbody = document.querySelector('#companies > tbody');

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    const tr = document.createElement('tr');

    const tdCompany = document.createElement('td');
    const newContent = document.createTextNode('alfred furtt');
    tdCompany.appendChild(newContent);
    

    const tdContact = document.createElement('td');
    tdContact.textContent = 'maria anders';

    const tdCountry = document.createElement('td');
    tdCountry.innerText = 'germany';

    tr.appendChild(tdCompany);
    tr.appendChild(tdContact);
    tr.appendChild(tdCountry);

    tbody.appendChild(tr);


    // let div = document.createElement('div');
    
    // div.setAttribute('id', 'hi');


    // const newContent = document.createTextNode("hi there and greetings");

    // div.appendChild(newContent);

    // document.body.prepend(div);


    // window.addEventListener('mousemove', (event) => {
    //     console.log({event});
    // });

    // window.addEventListener('keyup', (event) => {
    //     console.log(event, event.type, event.keyCode, String.fromCharCode(event.keyCode));
    // });

    // window.addEventListener('keydown', (event) => {
    //     console.log(event, event.type, event.key, event.keyCode, String.fromCharCode(event.keyCode));
    // });


});
