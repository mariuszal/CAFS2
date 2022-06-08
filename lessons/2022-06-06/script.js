// Testuosime šį masyvą
let numbers = [5, 1, 7, 2, -9, 8, 2, 7, 9, 4, -5, 2, -6, -4, 6];

// 1. Parašykite funkciją arrDoubled, kuri sukuria ir grąžina naują masyvą, 
// kurio elementai padauginti iš 2;
// return num.map(function(value) { return value * 2; });
function arrDoubled(num){
  let doubledArr = [];
  for (let i = 0; i < num.length; i++) {
        doubledArr[i] = num[i] * 2;
  }
  return doubledArr;
}
console.log(arrDoubled(numbers));



// 2. Parašykite funkciją arrMultiplied, kuri sukuria ir grąžina naują masyvą, 
// kurio elementai padauginti iš argumentu nurodyto skaičiaus
function arrMultiplied(num, arg) {
  let multiplieddArr = [];
  for (let i = 0; i < num.length; i++) {
        multiplieddArr[i] = num[i] * arg;
  }
  return multiplieddArr;
}
console.log(arrMultiplied(numbers,3));



// 3. Parašykite funkciją arrCountTwos, kuri suskaičiuoja dvejetus masyve
function arrCountTwos(num) {
  let sumOfTwos = 0;
  for (let i = 0; i < num.length; i++) {
    if (num[i] == 2) {
      sumOfTwos++;
    }
  }
  return sumOfTwos;
}
console.log('Dvejetu suma masyve:', arrCountTwos(numbers));


// 4. Parašykite funkciją arrIndexOfFirst, kuri grąžintu pirmo surasto, 
// argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas 
// funkcija turi grąžinti -1.
function arrIndexOfFirst(num, arg) {
  let indexNr = num.indexOf(arg);
  return indexNr;
}
console.log('Index Nr. masyve:', arrIndexOfFirst(numbers, 2));



// 5. Parašykite funkciją arrIndexOfLast, kuri grąžintu paskutinio surasto, 
// argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas funkcija 
// turi grąžinti -1.
function arrIndexOfLast(num, arg) {
  let indexNr = num.lastIndexOf(arg);
  return indexNr;
}
console.log('Paskutinis Index Nr. masyve:', arrIndexOfLast(numbers, 2));




// 6. Parašykite funkciją reverseNumbers, kuri pakeis skaičius vietomis taip, kad 
// pirmas skaičius taps paskutiniu, antras piešpaskutiniu, o buvęs paskutinis
//  taps pirmu, priešpaskutinis bus antru.
// Pvz.: Turime skaičius 32243;
// Iškvietus funkciją rezultata bus: 34223
function reverseNumbers(num) {
  return num.reverse();
}
console.log(reverseNumbers(numbers));




// 7. Parašykite  funkciją, kuri kaip argumentą priims skaičių masyvą ir suras
//  atitinkamai mažiausią ir didžiausią skaičių bei juos grąžins.
// Pvz.: Turime masyvą: [8,5,4,2,7,1,9]
// Iškvietus funkciją rezultata bus: "Mažiausas: 1, Didžiausas: 9"
function arrMinMax(num) {
  let min = Math.min(...num);
  let max = Math.max(...num);
  return `maziausias: ${min}, diziausias: ${max}`;
}
console.log(arrMinMax(numbers));



// 8. Parašykite  funkciją checkForLetters, kuri priims du argumentus: 
// Pirmas argumentas bus sakinys (arba žodžiai (-is)) 
// ir antras argumentas bus raidė (kaip string). 
// Funkcija turės suskaičiuoti kiek pirmu agrumentu nurodytame 
// sakinyje/žodžiuose(-yje) yra antru argumentu nurodytų raidžių ir 
// gražinti tų raidžių sumą su sakiniu pvz.: “Raidė “v” sakinyje rasta 4 kartus”.
function checkForLetters(words, arg) {
  let sumOfletters = 0;
  for (let i = 0; i < words.length; i++) {
    if (words[i] == arg) {
      sumOfletters++;
    }
  }
  return sumOfletters;
}
console.log(checkForLetters('sakykim taip', 'y'));



// 9. Parašykite funckiją, kuri ras visus skaičius esančius msyve ir gražins juos 
// kaip atsikrą masyvą. Naujame masyve visi skaičiai bus surikiuoti nuo mažiausio 
// iki didžiausio.
// let arr2 = [8, 'Hello', 'click', 'u', 7, 4, 'a', 'a', 3, 6, "chair", ,10, 1];
// Iškvietus funkciją rezultata bus: [1,3,4,6,7,8,10];
let arr2 = [8, 'Hello', 'click', 'u', 7, 4, 'a', 'a', 3, 6, "chair", ,10, 1];
function findNumbers(arr) {
  let numbersSum = 0;
  let test = [];
  for (let i = 0; i < arr.length; i++) {
    if(Number.isInteger(arr[i])) {
      test.push(arr[i]);
    }
  }
  return test.sort((a,b) => a - b); //kazkur radau pavyzdi bet biskuti neaiski si vieta
}
console.log(findNumbers(arr2));




// 10. Sukurkite funkciję checkIfAllSmaller(arr, max), 
// BE MASYVO METODŲ, kuri patikrintų ar visi skaičiai masyve yra didesni 
// negu perduota reikšmė max;
// Pvz.: Turime masyvą: let arr1 = [2, 7, 6, 9, 5];
// Iškvietus funkciją checkIfAllSmaller(arr1, 5) rezultata bus: False
let arr1 = [2, 7, 6, 9, 5];
function checkIfAllSmaller(arr, max) {
  let r = true;
  arr.forEach(arg => {
    if (arg < max) { 
      r = false;
    }
  });
  return r;
}
console.log(checkIfAllSmaller(arr1, 1));



// 11. Parašykite funkciją filteredByLetter, kuri turi du parametrus: 
// 1. masyvas; 
// 2. raidė. 
// Funkcija sukuria ir grąžina naują masyvą, kuriame yra visi masyvo, 
// nurodyto kaip pirmas parametras elemntai, kuriuose galima rasti antru paramatetru 
// nurodytą raidę.
// Testuosime šį masyvą
let citiesOfLithuania = [
  'Vilnius',
  'Kaunas',
  'Klaipėda',
  'Šiauliai',
  'Panevėžys',
  'Alytus',
  'Marijampolė',
  'Mažeikiai',
  'Jonava',
  'Utena',
];
function filteredByLetter(arr, letter) {
  for(let i=0;i<arr.length; i++) {
    arr[i] = arr[i].toLowerCase();
  }
  return arr.filter(a => a.includes(letter))
}
console.log(filteredByLetter(citiesOfLithuania, 'v'));




// 12. Parašykite penkias funkcijas:
// - calculateValue()
// - addition()
// - subtraction()
// - multiplication()
// - division()

// Pagridinė funkcija bus calculateValue(num1, num2, action), 
// kuri priims tris argumentus:
//  a) num1 - skaičius;
// b) num2 - skaičius; 
// c) action - (matematinis veiksmas kaip string pvz. “substraction”). 
// Būtina, kad funckija validuotų ar num1 ir num2 yra skaičiai.

// Priklausomai trečio argumento (action), su pirmais dviem (num1 ir num2) 
// bus atliekamas matematinis veiksmas ir kviečiama viena iš keturių funkcijų, 
// kurios priims du argumentus (num1 ir num2) ir grąžins atlikta veiksmą.

// Pastaba: šios funkcijos: addition(), subtraction(), multiplication(), 
// division() turi būti kviečiamas calculateValue() viduje, o aprašomos išorėje.
function addition (num1, num2) {
  return num1 + num2;
}

function subtraction (num1, num2) {
  return num1 - num2;
}

function multiplication (num1, num2) {
  return num1 * num2;
}

function division (num1, num2) {
  return num1 / num2;
}

function calculateValue (num1, num2, action) {
  if (Number.isInteger(num1) || Number.isInteger(num2)) {

    switch (action) {
        case 'addition':
            return addition (num1, num2);
            break;
        case 'subtraction':
            return subtraction (num1, num2);
            break;
        case 'multiplication':
            return multiplication (num1, num2);
            break;
        case 'division':
            return division (num1, num2);
            break;    
        default:
            return false;
    }
  } else {
    return false;
  }  
}
console.log(calculateValue(2, 4, 'addition'));
console.log(calculateValue(4, 5, 'subtraction'));
console.log(calculateValue(8, 4, 'multiplication'));
console.log(calculateValue(6, 2, 'division'));