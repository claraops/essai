function addProduct() {
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;
  
    // Appeler la fonction PHP pour ajouter le produit
    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'ajouter_produit.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Le produit a été ajouté avec succès
           // alert(xhr.responseText);
        }
    };
    xhr.send("name=" + name + "&price=" + price + "&quantity" + quantity);
  }
  


  function updateProduct() {
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;

    // Effectuer une requête AJAX vers le fichier PHP
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            } else {
                alert("Erreur lors de la modification du produit : " + xhr.status);
            }
        }
    };

    xhr.open("POST", "modifier.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("&name=" + encodeURIComponent(name) + "&price=" + encodeURIComponent(price) + "&quantity=" + encodeURIComponent(quantity));

    return false; // Empêche le formulaire de se soumettre normalement
}


function deleteProduct() {
    var productId = document.getElementById("product_id").value;

    // Effectuer une requête AJAX vers le fichier PHP
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                alert ("suppression reussie");
            } else {
                alert("Erreur lors de la suppression du produit : " + xhr.status);
            }
        }
    };

    xhr.open("POST", "supprimer.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("product_id=" + encodeURIComponent(productId));

    return false; // Empêche le formulaire de se soumettre normalement
}