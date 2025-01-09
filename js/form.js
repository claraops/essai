/*let firstname = document.getElementById('firstname');
let lastname = document.getElementById('lastname') ;
let telephone=document.getElementById('telephone');
let email = document.getElementById('email');
let password = document.getElementById('password');
let passwordconfirm = document.getElementById('passwordconfirm');
let submit = document.getElementById('submit')
let erreur = ""
let error= document.getElementById('erreur')
console.log(error)

submit.addEventListener("click",function(e){
    e.preventDefault()
    console.log (firstname)
    if(firstname.value ==""){
        e.preventDefault()
        erreur == "veillez saisir les informations correctes"
        error.textContent = erreur
        console.log(error.innerHTML,'je suis la')
        console.log("erreur nom")
    }
    if(lastname.value ==""){
        e.preventDefault()
        erreur == "veillez saisir les informations correctes"
        error.innerHTML = erreur
        console.log("erreur prenom")
    }
    if(telephone.value ==""){
        e.preventDefault()
        erreur == "veillez saisir les informations correctes"
        error.innerHTML = erreur
        console.log("erreur tel")
        if (isNaN(telephone)){
            e.preventDefault()
            erreur == "veillez saisir un entier"
            error.innerHTML = erreur
            console.log("erreur tel2")
        }
    }
    if(password.value ==""){
        e.preventDefault()
        erreur == "veillez saisir les informations correctes"
        error.innerHTML = erreur
        console.log("erreur mot")
       
    }else if(password.value != passwordconfirm.value){
        e.preventDefault()
        erreur == "veillez saisir un password adequat"
        error.innerHTML = erreur
        console.log("erreur conf")
    }


}
)*/





document.getElementById("formulaire").addEventListener("submit",function(event){
  self = this
  var firstname = document.getElementById('firstname').value;
  var email = document.getElementById('email').value;

  if(firstname == ""|| email =="" ){
     event.preventDefault();
    document.getElementById("messagederreur").style.display = "block";

  }else{
    document.getElementById("messagederreur").style.display = "none";
    if(!checkPassword()){
      event.preventDefault()
    }
  }

})

function checkPassword() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("passwordconfirm").value;

  if (password.length < 8) {
    document.getElementById("message").innerHTML = "Le mot de passe doit contenir au moins 8 caractères";
    return false;
  }

  if (password !== confirmPassword) {
    document.getElementById("message").innerHTML = "Les mots de passe ne correspondent pas";
    return false;
  }

  document.getElementById("message").innerHTML = "Le mot de passe est valide";
  return true
}
  


 