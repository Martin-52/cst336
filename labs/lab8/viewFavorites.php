<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                text-align: center;
            }
        </style>
        <script>
            /* global $ */
            
            function displayFavorites(keywordLink) {
                
                var keyword = $(keywordLink).html().trim()
                $.ajax({
                    type: "GET",
                    url: "api/favoritesAPI.php",
                    dataType: "json",
                    data: { "action": "favorites",
                            "keyword": keyword},
                    success: function(data,status) {
                        $("#favorites").html("");
                        data.forEach(function(i) {
                            $("#favorites").append("<img width='200' src='" + i.imageURL+ "'> ");
                        });
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    }
                });//ajax    
                
            }
            
            $(document).ready(function() {
                
                $.ajax({
                    type: "GET",
                    url: "api/favoritesAPI.php",
                    dataType: "json",
                    data: { "action": "keyword" },
                    success: function(data,status) {
                        
                        data.forEach(function(i) {
                            $("#keywords").append("<a onclick='displayFavorites(this)' href='#'> " + i.keyword + "</a>");
                        }); // Data forEach Loop
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                });//ajax
                
                
                
            });// On Document Ready
            
            
        </script>
    </head>
    <body>

        <h1> Favorite Images </h1>
        
        <div id="keywords"></div>
        
        <div id="favorites"></div>
    </body>
</html>