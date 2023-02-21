<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>
        <?php
        // functie: programma overzicht brouwers
        // auteur : Yasin Coban
        include 'navbar.php';
        include 'functions.php';
// connect database brouwer
        OpenDb();
// print brouwers etc.
        OvzBrouwers();
        ?>
    </body>
</html>