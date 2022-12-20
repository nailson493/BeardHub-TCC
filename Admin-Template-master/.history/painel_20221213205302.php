<?php
 include "head.php";
?>
<body>
    <?php
    include "header.php";



    switch($_GET['r']){

        case 'index':
                include "views/index.php";
                break;
        case 'login':
                include "views/login.php";
                break;
        case 'inicial':
                include "views/inicial.php";
                break;
        case 'cadUser':
                include "views/cadUser.php";
                break;
        default:
                include "views/inicial.php";
                break;
            
    }
    


    ?>
    <?php include "footer.php";?>
    
 <?php include "js.php"; ?>
 

</body>
</html>