/*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

document.getElementById("formulaire").addEventListener("submit",function(event){
    self = this
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
  
    if(email == ""|| password =="" ){
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
    if (password.length < 8) {
      document.getElementById("message").innerHTML = "Le mot de passe doit contenir au moins 8 caractères";
      return false;
    }
    document.getElementById("message").innerHTML = "Le mot de passe est valide";
    return true
  }

