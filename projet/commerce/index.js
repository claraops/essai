const express = require("express")
const mysql = require('mysql')
const myConnection = require('express-myconnection')

//const port = process.env.PORT || 3001

const app = express();

//extraction des donnée du formulaire 
//app.use(express.urlencoded({extended: false }))

const optionbd= {
    host: 'localhost', 
    user: 'root',
    password:'',
    port:'3000',
    database:'bdvente'

};

//definition du middleware
app.use(myConnection(mysql,optionbd,'pool'))


connection.connect((err) => {
    if(err){
        console.error("erreur de connexion :"+err.stack)
        return;
    }
    console.log("connexion reussi a la bd !")

});

/*connection.query("SELECT * FROM COMPTE",( err, rows, fields)=>{
    if(err) throw err;
    console.log("les données sont : ", rows)
 
})*/


