<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>
        <?php
        include 'navbar.php';
        include 'functions.php';

        $conn = OpenDb();

        OvzBieren();
        
        ?>
    </body>
</html>