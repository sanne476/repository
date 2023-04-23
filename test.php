<?php
    session_start();
// if (!isset($_SESSION['ingelogd'])) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h1>test pagina</h1>
    <!-- <a href="uitloggen.php" -->
    <?php
        echo "Welkom!<hr>";
        echo $_SESSION ['bIngelogd'];
        //$_SESSION["user"] = "ingelogd";
    
    ?>

</body>
</html>
