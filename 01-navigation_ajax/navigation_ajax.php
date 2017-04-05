<!DOCTYPE html>
<html>
<head>
    <title>Navigation Ajax</title>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $(".lien").click(function() {
                $("#main").load("page_"+$(this).attr("id")+".php")
            });
        });
    </script>
</head>

<body>
<h1>Navigation Ajax 2</h1>
    <ul>
        <li><a href="#" id="accueil" class="lien">Accueil</a></li>
        <li><a href="#" id="contact" class="lien">Contact</a></li>
    </ul>
<div id="main">
    <!-- Affichage de la page ici -->
</div>
</body>
</html>