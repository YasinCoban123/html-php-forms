<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>
        <?php
        // functie: programma overzicht bieren
        // auteur : Yasin Coban
        include 'navbar.php';
        include 'functions.php';
// connect database bieren
        OpenDb();
// print bieren
        OvzBieren();
        
        ?>
    </body>
</html>