for (let i=1; i<=10; i++) {
    console.log(i);
} 

// const Movie = require('./classes/movie.js');

const fs = require('fs');

console.log(fs);

fs.readdir('./', (err, files) => {
    files.forEach(file => {
    console.log(file.isFile());
    });
});