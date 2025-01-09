/*const express = require("express")
const mysql = require("mysql")

const port = process.env.PORT || 3001

const app = express();

//extraction des donnée du formulaire 
app.use(express.urlencoded({extended: false }))

const connection= mysql.createConnection({
    host: 'localhost', 
    user: 'root',
    password:'',
    database:'bdvente'

});




connection.connect((err) => {
    if(err){
        console.error("erreur de connexion :"+err.stack)
        return;
    }
    console.log("connexion reussi a la bd !")

});

connection.query("SELECT * FROM COMPTE",( err, rows, fields)=>{
    if(err) throw err;
    console.log("les données sont : ", rows)
 
})


   


app.listen(port,() => {
    console.log("serveur est en ligne !")
})


/*app.post("/compte", (req, res) => {
    let login = req.body.login
    let email= req.body.email
    let mot_de_passe = req.body.mod_de_passe
    console.log(login)
    console.log(mot_de_passe)

    req.getConnection((erreur, connection) => {
        if(erreur){
            console.log(erreur)
        }else{
            connection.query("INSERT INTO compte(id_compte,login ,mod_de_passe, email) VALUES(?, ?, ?, ?)"),
            [null, login, mot_de_passe, email],
            (erreur, resultat ) =>{
                if(erreur){
                    console.log(erreur)
                }else{
                    res.status(200).redirect("/")
                }
            }
            }
    })
})

/** *
app.get("/register",(req, res) => {
    res.status(200).sendFile("/register.html", { root: __dirname});
})
app.get("/login",(req, res) => {
    res.status(200).sendFile("/login.html", { root: __dirname});
})
app.get("/",(req, res) => {
    res.status(300).redirect("/register", { root: __dirname});
})
*
app.listen(3001, () =>{
    console.log("en attente de requetes au 3001")
})


/*const express = require("express")
const mysql = require("mysql")
const myConnection = require("express-myconnection")

const optionbd = {
    host: 'localhost', 
    user: 'root',
    password:'',
    port: 3306,
    database:'bdvente'
}

const app = express();

// middleware 
app.use(myConnection(mysql, optionbd, "pool"))


app.get()*/

