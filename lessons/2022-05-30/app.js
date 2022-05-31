function showMessage(message = null) {
    if (message) {
        console.log((new Date).toISOString(), message);
    } else {
        console.error('No message defined');
    }
    
}

const user = {
    name: 'Marius',
    age: 30
}

function getUser() {
    return user;
}

function getUserName(user, name) {
    return getUser().name;
}

function setUserName() {
    user.name = name;

    return true;
}

function setUserParameter(user, parameterName, parameterValue = null) {
    user[parameterName] = parameterValue;

    return true;
}

showMessage();
showMessage('hello world');
showMessage(`hello, my name is ${getUser()}`);
showMessage(`hello, my name is ${getUser().name}`);
showMessage(`hello, my name is ${getUser().name}. My agee is ${getUser().age}`);
showMessage(`hello, my name is ${getUserName()}`);

