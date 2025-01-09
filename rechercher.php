<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche dans la Base de Données</title>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#searchForm").submit(function(event){
                event.preventDefault(); // Empêche la soumission du formulaire par défaut

                var query = $("#query").val(); // Récupère la valeur du champ de recherche
                $.ajax({
                    url: "search.php",
                    method: "GET",
                    data: { query: query },
                    success: function(data){
                        $("#searchResult").html(data); // Affiche les résultats dans une div
                    }
                });
            });
        });
    </script>
</head>
<body>
    <form id="searchForm">
        <input type="text" id="query" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
    </form>
    <div id="searchResult"></div> <!-- Ici seront affichés les résultats de la recherche -->
</body>
</html>