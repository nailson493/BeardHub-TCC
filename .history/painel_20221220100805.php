<?php
 include "hea.php";
?>



<body>
    <?php
    include "headeer.php";



    switch($_GET['r']){

        case 'signup':
                include "views/signup.php";
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
        case 'estabelecimento':
                include "views/estabelecimento.php";
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