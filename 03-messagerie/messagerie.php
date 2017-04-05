<!DOCTYPE html>
<html>
<head>
    <title>Messagerie</title>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $("#formMsg").submit(function () {
                $.post("traitement.php", $("#formMsg").serialize(), function (texte) {
                    $("div#zoneTexte").append(texte);
                });
                return false; // Permet de rester sur la même page
            });
        });
    </script>
</head>

<body>
<h1>Navigation Ajax 4</h1>
    <form action="traitement.php" method="POST" id="formMsg">
        <input type="text" name="login" id="login" placeholder="login" />
        <input type="text" name="msg" id="msg" placeholder="message" />
        <input type="submit" />
    </form>
<div id="zoneTexte">
    <!-- Affichage des messages ici -->
</div>
</body>
</html>
