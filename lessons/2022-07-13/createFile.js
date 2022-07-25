// var arguments = process.argv;
  
// function add(a, b) {
  
//     // To extract number from string
//     return parseInt(a)+parseInt(b);
// }
  
// var sum = add(arguments[2], arguments[3]);
  
// console.log("Addition of 2, 3 is ", sum);


const arguments = process.argv.slice(2);
const fs = require('fs');

function createFileWithContent(fileName, content) {
    return new Promise(function(resolve, reject) {
        if(fileName && content) {
            fs.writeFile(fileName, content, function (err) {
                if (err) {
                    reject(err);
                } else {
                    resolve();
                }
            });
        } else { 
            reject(new Error('Syntax: node createFile.js <fileName> <content>')); 
        }
    });
}

createFileWithContent(arguments[0], arguments[1]).then(() => console.log('done')).catch(e => console.log(e.message));