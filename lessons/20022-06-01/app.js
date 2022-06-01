function getEvenNumbers(from, till) {

}

// const start = 0, 
//     end = 10;

// let i = start;

// while (i <= end) {
//     if (i % 2 == 0) {
//         console.log('while', i);
//     }
//     i++;
// }
function aHa(x) {
let word = 'Ha';
let r = '';
let i = 0;
    while (i < x) {
        r += word;
        i++;
    }
    return r;
}

function bHa(x) {
    let word = 'Ha';
    let r = '';
    let i = 0;
        do {
            r += word;
            i++;
        } while (i < x);
        return r;
    }

    function cHa(x) {
        let word = 'Ha';
        let r = '';
            for (i = 0; i < x; i++) {
                r += word;
            }
            return r;
        }
console.log(aHa(2)); //while
console.log(bHa(3)); //doWhile
console.log(cHa(4)); //for

/////////////////////////////////////////////////////////

let getHighestNumber = (...arr) => Math.max(...arr);


console.log(getHighestNumber(2,5,6,9,4,1));

///////////////////////////////////////////////////////////



// let i = 0;
// while(i < 5) {
//     console.log(i);
//     i++;
// }

// i = 1;
// while (i <= 5) {
//     console.log(i)
//     i++;
// }


let arr = ['a', 'b', 'c', 'd'];

for (let index in arr) {
    console.log('for in', index);
}

for (let i of arr) {
    console.log('for of', i)
}