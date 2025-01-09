








function calculerStock() {
  var productQuantity = document.getElementById("product_quantity").value;
  var stockTotal = parseInt(productQuantity, 10);
  
  // Effectuer des calculs supplémentaires si nécessaire
  
  document.getElementById("stock_total").innerHTML = "Le stock total est de : " + stockTotal;
  
  if (stockTotal > 0) {
    document.getElementById("message").innerHTML = "Le stock est disponible.";
  } else {
    document.getElementById("message").innerHTML = "Le stock est épuisé.";
  }
}




/*
function addToCart() {
  // Récupérer les informations du produit
  var productName = document.querySelector('.product-main span').textContent;
  var productPrice = document.querySelector('.product-main p').textContent;

  // Envoyer les informations du produit au serveur PHP
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'add_to_cart.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert('Produit ajouté au panier !');
      } else {
        alert('Une erreur s\'est produite lors de l\'ajout du produit au paniersqsq.');
      }
    }
  };
  xhr.send('name=' + encodeURIComponent(productName) + '&price=' + encodeURIComponent(productPrice));
}
*/
console.log('bonjour');


'use strict';

// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}



//
