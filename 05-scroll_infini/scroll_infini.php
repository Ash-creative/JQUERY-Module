<!DOCTYPE html>
<html>
<head>
    <title>Page de test</title>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $("#btSuite").click(function () {
                $.post("plus.php",$("#btSuite").serialize(),function(texte) {
                    $("div#page").append(texte);
                    $("#btSuite").focus();
                });
                return false; // Permet de rester sur la page
            });
        });
    </script>

</head>
<body>

<h1>Scroll infini</h1>

<div id="page">Contenu de départ</div>
    <button type="button" id="btSuite">Lire la suite</button>
</body>
</html>