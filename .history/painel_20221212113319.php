<?php
 include "head.php";
?>



<body>
    <?php
    include "header.php";



    switch($_GET['r']){

        case 'signup':
            include "views/signup.php";
            break;
        case 'login':
            include "views/login.php";
            break;
        case 'inicial':
            include "views/a.php";
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