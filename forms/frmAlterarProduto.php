<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
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
    $codProd = filter_input(INPUT_POST, 'codProd', FILTER_SANITIZE_NUMBER_INT);

    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }
    $conn = new conexao();
    $conn->connect();

    if($codProd) {
        $consulta = mysql_query('SELECT * FROM produto WHERE codProd = ' . $codProd);
        $campo = mysql_fetch_array($consulta);


        echo "
            <form role='form' method='POST' action='../intermediario/alterarProduto.php'>
                <div class='modal-body' id='conteudoModal'>
                    <!--TODO-->
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group'>
                                <label for='codProd' >Código</label>
                                <div class='input-group margin-bottom-lg'>
                                    <span class='input-group-addon'><i class='fa fa-barcode fa-fw'></i></span>
                                    <input type='text' id='codProd' name='codProd' class='form-control' value='" . $campo['codProd'] ."' required readonly>
                                </div>
                            </div>
                        </div>

                        <div class='col-lg-6'>
                            <div class='form-group'>
                                <label for='descricaoProd' >Descrição do produto</label>
                                    <textarea rows='9' id='descricaoProd' name='descricaoProd' class='form-control'  size='50' autofocus required style='resize: none;'>". $campo['descricaoProd'] ." </textarea>
                            </div>
                        </div>

                        <div class='col-lg-6'>
                            <div class='form-group'>
                                <label for='fabricante' >Fabricante</label> <br />
                                <select class='form-control' name='fabricante' id='fabricante' tabindex='' required>
                                    <option value='". $campo['fabricante'] ."'>" .$campo['fabricante']."</option>
                                    <option> -------------- </option>
                                    <option value='Avon' >Avon</option>
                                    <option value='Natura' >Natura</option>
                                    <option value='O Boticáro' >O Boticário</option>
                                    <option value='Outros' >Outros</option>
                                </select>
                            </div>
                        </div>

                        <div class='col-lg-6'>
                            <div class='form-group'>
                                <label for='precoUniProd' >Preço</label>
                                <div class='input-group margin-bottom-lg'>
                                    <span class='input-group-addon'><i class='fa fa-money fa-fw'></i></span>
                                    <input type='tel' id='precoUniProd' name='precoUniProd' class='form-control' value='". $campo['precoUniProd'] ."' min='0' size='6' maxlength='6' pattern='([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$' required>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group'>
                                <label for='qtdEstoqueProd' >Quantidade em estoque</label>
                                <div class='input-group margin-bottom-lg'>
                                    <span class='input-group-addon'><i class='fa fa-cubes fa-fw'></i></span>
                                <input type='number' id='qtdEstoqueProd' name='qtdEstoqueProd' class='form-control' value='". $campo['qtdEstoqueProd'] ."' min='1' size='6' maxlength='6' required>
                                </div>
                            </div>
                        </div>

                        <div class='col-lg-3'> </div>

                        <div class='col-lg-9'>
                            <label for='fotoProd'>Foto do produto</label>
                            <input type='file' id='fotoProd ' name='fotoProd' accept='image/*' required />
                        </div>
                    </div>
                </div>

                <div class='modal-footer'>
                    <button type='submit' class='btn btn-success' tabindex='' name='alterar'> Alterar</button>
                    <button type='button' class='btn btn-danger' tabindex='' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>
        ";
        $conn->disconnect();
    }
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

