<?php
 include "header.php";
?>
<body>
    <?php
    include "in.php";
 
    switch($_GET['r']){

        case 'cadProduto':
            include "views/cadProduto.php";
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