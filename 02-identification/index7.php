<!DOCTYPE html>
<html>
<head>
    <title>Récupérer les données en JSON</title>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">

        // Formulaire submit à loginJSON.php
        $(document).ready( function() {
            $("#formLogin").submit(function () {
                $.post("loginJSON.php",$("#formLogin").serialize(),function(reponse) {

                    // On entre les valeurs retournées dans les spans correspondant
                    $("#infoNom").html(reponse.answer["nom"]);
                    $("#infoPrenom").html(reponse.answer["prenom"]);
                    $("#infoPromo").html(reponse.answer["promotion"]);

                    // Prévoit le cas où la réponse serait null
                    if(reponse.answer["nom"]==null) {
                        $("span#erreur").html("Erreur de login/mdp");
                    } else {
                        $("span#erreur").html("");
                    }
                });
                return false;
            });
        });
    </script>
</head>
<body>

<h1>Récupération de données en JSON</h1>
<div id="divLogin">
    <form action="#" method="POST" id="formLogin">
        <input type="text" name="login" id="login" placeholder="Ash" />
        <input type="password" name="mdp" id="mdp" placeholder="12345" />
        <input type="submit" value="login"/>
    </form>
    <span id="erreur" style="color:red"></span>
    </div>
    <ul>
        <li>Nom: <span id="infoNom"></span></li>
        <li>Prénom: <span id="infoPrenom"></span></li>
        <li>Promotion: <span id="infoPromo"></span></li>
    </ul>
</body>
</html>