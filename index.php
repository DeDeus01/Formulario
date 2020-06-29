<?php 
    static $page = 'index.php?pg=contact.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewimport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <title>Formulário de Teste</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="main">        
            <div class="header-image-with-description">
                <img src="img/icon.png"/>
                <div class="title">
                    <span><strong>X Formulários LTDA</strong></span>
                </div>
            </div>
            <div>
                <?php 
                    $page = $_GET["pg"];
                    
                    if(file_exists($page)){
                        include($page);
                    }
                    else{
                        print("<h2> 404 Not Found!</h2>");
                    }
                ?>
            </div>
        </div>
        <footer class="page-footer">
            <div class="footer-content">
                <div class="footer-copyright text-center py-3">© Copyright 2020 - DeDeus01</div>
            </div>
        </footer>    
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>