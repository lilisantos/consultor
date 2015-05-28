<?php
    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }
    $conn = new conexao();
    $conn->connect();

    if (isset ($_POST['alterar'])){
        $codProd        = $_POST['codProd'];
        $codProd        = $_POST['codProd'];
        $descricaoProd  = $_POST['descricaoProd'];
        $fotoProd       = $_POST['fotoProd'];
        $qtdEstoqueProd = $_POST['qtdEstoqueProd'];
        $precoUniProd   = $_POST['precoUniProd'];
        $fabricante     = $_POST['fabricante'];

        $crud = new crud('produto');
        $crud->atualizar("descricaoProd='$descricaoProd',fotoProd='$fotoProd',qtdEstoqueProd='$qtdEstoqueProd',precoUniProd='$precoUniProd',fabricante='$fabricante'", "codProd='$codProd'"); // utiliza a funçao ATUALIZAR da classe crud
        echo "<script>location='../forms/frmProduto.php'; alert ('Dados alterados com sucesso');</script>";
    }

