const arrSimple = [
    'Kunigunda',
    'Jonas',
    'Novaldas'
];

for (let key in arrSimple) {
    console.log('for in', key, arrSimple[key]);
}

for (let value of arrSimple) {
    console.log('for of', value);
}

let indexNameOfJonas = 1;

console.log(arrSimple[indexNameOfJonas]);

const arrSimpleOfObjects = [
    {
        name: 'Kunigunda',
        age: 23
    },
    {
        name: 'Jonas',
        age: 24
    },
    {
        name: 'Novaldas',
        age: 25
    },
];

function getIndexOf(someArr, name) {
    for (let key in arrSimple) {
        if (someArr[key]?.name == name) {
            return key;
        }
    }
}

let userIndex = getIndexOf(arrSimpleOfObjects, 'Novaldas');

console.log();