<?php
 include "head.php";
?>


<?php
    include "header.php"
?>


<body>
    <?php
    include "inicial.php";
 
    switch($_GET['r']){

        case 'sign.up':
            include "views/sin.php";
            break;
        case 'mostrarProdutos':
            include "views/mostrarProdutos.php";
            break;
        case 'editProduto':
            include "views/editProduto.php";
            break;
        case 'cadUser':
            include "views/cadUser.php";
            break;
        default:
            include "views/home.php";
            break;
        

    }
    
    
    ?>
    <?php include "js.php"; ?>
</body>
</html>