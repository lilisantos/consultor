<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    </head>

<?php
    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }
    $conn = new conexao();
    $conn->connect();

    $crud = new crud('produto');
    $id = $_GET['codProd'];

    if (is_numeric($id)){
        $crud->excluir("codProd = $id");
        echo "<script>location='../forms/frmProduto.php'; alert ('Dados excluídos com sucesso');</script>";
        $conn->disconnect();
    }
?>
</html>