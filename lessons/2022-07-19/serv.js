const express = require('express');
const app = express();
const os = require('os');
const port = 3000;

app.get('/', (req, res) => {
  res.send('<a href=/os>os</a><br><a href=/cpu>cpu</a><br><a href=/ram>ram</a><br>');
});

app.get("/os", function (req, res) {
    res.send({
      Type: os.type(),
      Version: os.version(),
    });
  });
  
  app.get("/cpu", function (req, res) {
    res.send({ CPU: os.cpus()[0].model, Cores: os.cpus().length });
  });
  
  app.get("/ram", function (req, res) {
    res.send({
      "RAM": `${Math.floor(os.totalmem() / (1024 * 1024))} MB`
    });
  });

app.listen(port, () => {
  console.log(`Express listening on port ${port}`)
});