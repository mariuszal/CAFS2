function checkNumber(num) {
    if (isNaN(num)) {
        return false;
    }

    if (num % 3 === 0 && num % 5 === 0) {
            return 3;
    }

    if (num % 3 === 0) {
        return 1;
    }

    if (num % 5 === 0) {
        return 2;
    }

    return 4;
}


// for (let x of ['a', 3, 5, 'b', 14, 15]) {
//     let message = null;

//     switch (checkNumber(x)) {
//         case 1:
//             message = 'skaicius dalijasi is 3';
//         break;

//         case 2:
//             message = 'skaicius dalijasi is 5';
//         break;

//         case 3:
//             message = 'skaicius dalijasi is 3 ir is 5';
//         break;

//         case 4:
//             message = 'skaicius nesidalija nei is 3 nei is 5';
//         break;

//         default:
//             message = 'ne skaicius';
//         break;
//     }
//     console.log(x, message);
// }

// let x = 9;
// while (x >= 1) {
//     console.log('hello ' +x);
//     x = x-1;
// }

// let x = 9;
// for (let x = 9; x >= 1 ; x--) {
//     console.log('hello ' +x)
// }
let arr = [11, -2, 34, 45, 19, 6];

function getMaxSubSum() {

    let r = 0;
    for (let i = 0; i < arr.length; i++) {
        if(arr[i] > 0) {
            r = r + arr[i];
        }
    }
    return r;
}


console.log(getMaxSubSum(arr));
