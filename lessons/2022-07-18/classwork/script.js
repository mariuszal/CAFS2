// EXTERNAL API
const JSONPLACEHOLDER_URI = 'https://jsonplaceholder.typicode.com/posts';

// *** Variables ***
//-- buttons
const btnGetTextFile = document.getElementById('btn1');
const btnGetUser = document.getElementById('btn2');
const btnGetUsers = document.getElementById('btn3');
const btnGetPosts = document.getElementById('btn4');
const btnSendPost = document.getElementById('btn5');
const btnGetUsersFetch = document.getElementById('btn6');

//-- output
const textOutput = document.querySelector('#text');
const userOutput = document.querySelector('#user');
const usersOutput = document.querySelector('#users');
const usersOutputFetch = document.querySelector('#usersFetch');
const postsOutput = document.querySelector('#posts');

// *** Functions ***
//OLD Version AJAX (XMLHttpRequest())
//-- Load Text File Information

function makeRequest(method, url) {
  return new Promise(function (resolve, reject) {
    const xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.onload = function () {
      if (xhr.status >= 200 && xhr.status < 300) {
        resolve(xhr.response);
      } else {
        reject({
          status: xhr.status,
          statusText: xhr.statusText
        });
      }
    };
    xhr.onerror = function () {
      reject({
        status: xhr.status,
        statusText: xhr.statusText
      });
    };
    xhr.send();
  });
}

function createUsersDiv (usersJSON, userPlaceInBody){
  for (let getUser of usersJSON) {
    const newdiv = document.createElement('div')
    const newContent = document.createTextNode(`id: ${getUser.id}, Name: ${getUser.name}, Email: ${getUser.email}`)
    newdiv.className = 'mt-3'
    newdiv.appendChild(newContent);
    userPlaceInBody.appendChild(newdiv)
  }
}

async function loadTextFileXHR() {

  try {
    let getText = await makeRequest('GET', 'http://localhost:8888/sample.txt')
    textOutput.textContent = getText;
  } catch (err) {
    console.error('There was an error!', err.statusText);
  }

  // return;
}

//-- Load User Information
async function loadUserXHR() {
  try {
    let getUser = await makeRequest('GET', 'http://localhost:8888/user.json')
    const userJSON = JSON.parse(getUser);
    userOutput.textContent = `id: ${userJSON.id}, Name: ${userJSON.name}, Email: ${userJSON.email}`;
  } catch (err) {
    console.error('There was an error!', err.statusText);
  }
  // return;
}

//-- Load Users information
async function loadUsersXHR() {
  try {
    let getUsers = await makeRequest('GET', 'http://localhost:8888/users.json')
    const userJSON = JSON.parse(getUsers);
   
    createUsersDiv(userJSON, usersOutput);

  } catch (err) {
    console.error('There was an error!', err.statusText);
  }
}

//-- Load Users information
async function loadPostsXHR() {
  try {
    let getUsers = await makeRequest('POST', 'http://localhost:8888/users.json')
    postsOutput.textContent = getUsers;
  } catch (err) {
    console.error('There was an error!', err.statusText);
  }
}

//NEW VERSION AJAX (fetch())
// -- Getting data
function loadUsersFETCH() {

  const allUsers = async () => {
    try {
      let getUsers = await fetch('http://localhost:8888/users.json')
      return getUsers.json()
    } catch (err) {
      console.error('There was an error!', err.statusText);
    }
  };

  ((async () => {
    const value = await allUsers();
   
    createUsersDiv(value, usersOutputFetch);

  })()).catch(console.error)

}

// -- Sending data
function sendPostFETCH() {

  return;
}
// *** Events ***
btnGetTextFile.addEventListener('click', loadTextFileXHR, {once: true});
btnGetUser.addEventListener('click', loadUserXHR, {once: true});
btnGetUsers.addEventListener('click', loadUsersXHR, {once: true});
btnGetPosts.addEventListener('click', loadPostsXHR, {once: true});
btnGetUsersFetch.addEventListener('click', loadUsersFETCH, {once: true});
btnSendPost.addEventListener('click', sendPostFETCH, {once: true});

/*
    readyState Values:
    0: request not initialized
    1: server connection established
    2: request received
    3: processing request
    4: request finished and response is ready
    More: https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/readyState
    HTTP Statuses
    200: "OK"
    403: "Forbidden"
    404: "Not Found"
    More: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
*/