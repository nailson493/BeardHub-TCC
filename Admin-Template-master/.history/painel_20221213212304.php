<?php
 include "head.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    <?php
    include "header.php";

    switch($_GET['r']){

        case 'menu':
                include "views/menu.php";
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
                include "views/";
                break;
            
    }
    


    ?>
    <?php include "footer.php";?>
    
 <?php include "js.php"; ?>
 

</body>
</html>