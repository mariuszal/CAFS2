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
