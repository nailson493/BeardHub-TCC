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
        case 'today':
                include "views/today.php";
                break;
        case 'inicial':
                include "views/inicial.php";
                break;
        case 'cadUser':
                include "views/cadUser.php";
                break;
        default:
                include "views/index.php";
                break;
            
    }
    


    ?>
    <?php include "footer.php";?>
    
 <?php include "js.php"; ?>
 

</body>
</html>