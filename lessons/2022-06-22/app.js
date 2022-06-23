let userArr = [
  'Kiril',
  'Klaipeda',
  31
];

console.log(userArr[1]);

let userObj = {
  city: 'Vilnius',

  name: 'Kiril',
  age: 31,

  sayHelloWorld: function() {
    return 'Hello world';
  },

  greetings() {
    return `Hello my name is ${this.name}!`;
  },

  sayHelloWorldWithGr() {
    return this.sayHelloWorld() + ' - ' + this.greetings();
  },

  // city: 'klaipeda',
};

console.log(userObj.city);
console.log(userObj.sayHelloWorld());
console.log(userObj.greetings());
console.log(userObj.sayHelloWorldWithGr());

let userObj2 = {
  name: 'Karolis',
  age: 31,
  city: 'Kaunas',
};

let users = [
  userObj,
  userObj2, 
  {
    name: 'Kristijonas',
    age: 31,
    city: 'Klaipeda',
  }
];

console.log(users[2].city);
console.log(users[2]['city']);

const KEY = 'age';

console.log(users[2][KEY]);
