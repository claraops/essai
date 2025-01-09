var express = require('express');
var router = express.Router();

//var http = require('http');
var app = express();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});


/*app.get("/register",(req, res) => {
  res.status(200).sendFile("/register.html", { root: __dirname});
})
app.get("/login",(req, res) => {
  res.status(200).sendFile("/login.html", { root: __dirname});
})
app.get("/",(req, res) => {
  res.status(200).redirect("/commande.html", { root: __dirname});
})
app.get("/",(req, res) => {
  res.status(300).redirect("/register", { root: __dirname});
})

app.listen(3000, () =>{
  console.log("en attente de requetes au 3000")
})*/


module.exports = router;
