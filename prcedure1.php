<html>
    <head>
    <body>
        <?php
        require_once 'dbh.php';
        $id=12;
        $sql = 'CALL proc2('.$id.')';
        $sql='CALL proc1()';
        $result = mysqli_query($conn, $sql);
        ?>
    </body>
    </head>
</html>