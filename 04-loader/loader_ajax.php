<!DOCTYPE html>
<html>
<head>
    <title>Loader ajax</title>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        var dataReturn='';

    /* Lors du submit la div preloader est affichée avec une image montrant à l'internaute
       que le traitement est en cours */
        function makeRequest(url) {
            $('#preloader').show();
            $.get(url, function(data) {
                $('#resultDiv').html(data);
                $('#preloader').hide();
            });
        }

    // Même chose que précédemment mais en POST
        function makePostRequest(url, params) {
            $('#preloader').show();
            $.post(url,params, function(data) {
                $('#resultDiv').html(data);
                $('#preloader').hide();
            });
        }
    </script>
    <style>
        html {
            background-color: #141414;
            color: white;
        }
        a {
            text-decoration: none;
        }

        /* Loader caché par défaut */
        #preloader {
            display: none;
            position: absolute;
            left: 40%;
            top: 25%;
        }
    </style>
</head>
<body>

<h1>Loading test</h1>
    <div id="preloader">
        <img src="loading.gif" alt="AJAX loader" title="AJAX loader" />
    </div>

    <input type="button" onclick="makeRequest('ajax.php?param1=111&param2=222')" value="Send GET request" />
    <input type="button" onclick="makePostRequest('ajax.php?param1=111&param2=222', 'post_param1=333&post_param2=444')" value="Send POST request" />

    <div id="resultDiv">
        <!--Affichage du résultat ici-->
    </div>
</body>
</html>