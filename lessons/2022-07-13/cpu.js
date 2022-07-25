const os = require('os');
const cpuInfo = os.cpus();

console.log(os.cpus()[0].model);

const numOfCpu = os.cpus().length;

console.log(numOfCpu);