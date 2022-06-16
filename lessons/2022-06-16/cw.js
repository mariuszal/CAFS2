const updateDiv = document.querySelector('div');

window.addEventListener('DOMContentLoaded', (event) => {

    const h2 = document.createElement('h2');
    const h2Content = document.createTextNode('cia yra <h2> eilute');
    h2.appendChild(h2Content);
   
    const p = document.createElement('p');
    const pContent = document.createTextNode('cia yra <p> tag eilute');
    p.appendChild(pContent);

    const ul = document.createElement('ul');
    const li = document.createElement('li');
    ul.appendChild(li);

    const p2 = document.createElement('p');
    const p2Content = document.createTextNode('cia yra antro <p> tag eilute');
    p2.appendChild(p2Content);

   
    updateDiv.appendChild(h2);
    updateDiv.appendChild(p);
    updateDiv.appendChild(ul);
    updateDiv.appendChild(p2);
});