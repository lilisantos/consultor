<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php

//Modals

//cadastrar

    $codProd = filter_input(INPUT_POST, 'codProd', FILTER_SANITIZE_NUMBER_INT);

    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }
    $conn = new conexao();
    $conn->connect();

if($codProd) {
        $consulta = mysql_query('SELECT codProd, fotoProd FROM produto WHERE codProd = ' . $codProd);
        $campo = mysql_fetch_array($consulta);

        echo"
                <div class='modal-body' id='conteudoModalFoto'>
                    <!--TODO-->
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group'>
                                <img src='". $campo['fotoProd'] ."' alt='Produto ". $campo['codProd'] ."'  style='width:400px;height:350px;'>
                            </div>
                        </div>
                    </div>
                </div>
        ";
}

$conn->disconnect();
?>
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="../assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>

