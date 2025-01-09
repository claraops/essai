var express = require('express');
var router = express.Router();

var logger = require('morgan');
var cookieParser = require('cookie-parser');

//var path = require('path');
var path = require('path');
var http = require('http');
var app = express();


app.get('/', function(req, res){
  res.sendFile(__dirname+'views/register.html'); // change the path to your index.html
});

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');


app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));


/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});


router.get('/register', function(req, res, next) {
  res.render('/register', { title: 'Register' });
});
router.get('/login', function(req, res, next) {
  res.render('login', { title: 'login' });
});
router.get('/commande', function(req, res, next) {
  res.render('index', { title: 'commande' });
});

/*app.get("/register",(req, res) => {
  res.status(200).sendFile("/register.html", { root: __dirname});
})*
app.get("/login",(req, res) => {
  res.status(200).sendFile("/login.html", { root: __dirname});
})
app.get("/commande",(req, res) => {
  res.status(200).sendFile("/commande.html", { root: __dirname});
})
app.get("/",(req, res) => {
  res.status(300).redirect("/register", { root: __dirname});
})


/*app.listen(3000, () =>{
  console.log("en attente de requetes au 3000")
})
*/

module.exports = router;
