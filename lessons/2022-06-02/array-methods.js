const arrSimple = [
    'Kunigunda',
    'Jonas',
    'Novaldas'
];


console.log(arrSimple.length, arrSimple);
console.log(arrSimple[0]); //first element
console.log(arrSimple[arrSimple.length - 1]); //last element

arrSimple.push('Juozas');
arrSimple.push('Elimantas', 'Gilvina', 'Aigustas');

console.log(arrSimple);

arrSimple.unshift('Juozas');
arrSimple.unshift('Elimantas', 'Gilvina', 'Aigustas');

console.log(arrSimple);