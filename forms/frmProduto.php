<?php
    $title = "Produtos";
    include "top.php";

    function __autoload($classe) {
        include_once("../classes/$classe.class.php");
    }
    $conn = new Conexao();
    $conn->connect();

echo"
     <div class='panel panel-default'>
        <div class='panel-body'>
             <button class='btn btn-primary col-lg-12 btn-lg' data-toggle='modal' data-target='#modalCadastrar'>
                  Cadastrar novo produto
            </button>
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12'>
              <!--    Striped Rows Table  -->
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    Lista de produtos
                </div>
            <div class='panel-body'>
                <div class='table-responsive'>
                    <table class='table table-striped table-hover' id='dataTables-example'>
                        <thead>
                            <tr>
                                <th><i class='fa fa-sort'></i> Código</th>
                                <th><i class='fa fa-sort'></i> Produto</th>
                                <th><i class='fa fa-sort'></i> Estoque</th>
                                <th><i class='fa fa-sort'></i> Preço Unitário</th>
                                <th><i class='fa fa-sort'></i> Fabricante</th>
                                <th>Foto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>";
                            $consulta = mysql_query("SELECT codProd, descricaoProd, qtdEstoqueProd, precoUniProd, fabricante FROM produto");
                            while($campo = mysql_fetch_array($consulta)) {
                                echo "
                            <tr>
                                <td> " . $campo['codProd'] . " </td>
                                <td> " . $campo['descricaoProd'] . " </td>
                                <td> " . $campo['qtdEstoqueProd'] . " </td>
                                <td> " . $campo['precoUniProd'] . " </td>
                                <td> " . $campo['fabricante'] . " </td>
                                <td>
                                     <button type='submit' class='btn btn-primary' tabindex='' id='btnVisualizar' data-id='".$campo['codProd']."'>
                                            +
                                     </button>
                                </td>
                                <td>
                                    <button type='submit' class='btn btn-primary center' tabindex='' id='btnAlterar' data-id='".$campo['codProd']."'>
                                        <i class='fa fa-edit'></i> Alterar
                                    </button>
                                </td>
                                <td>
                                    <a href='../intermediario/excluirProduto.php?codProd=".$campo['codProd']."'>
                                        <button type='submit' class='btn btn-danger' tabindex=''><i class='fa fa-pencil'></i> Excluir</button>
                                    </a>
                                    </td>
                            </tr>";
                            }
                            echo"
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  End  Striped Rows Table  -->
    </div>";

    $conn->disconnect();

//Modals
//alterar
echo"
    <div class='modal fade' id='modalAlterar' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title' id='myModalLabel'>Alterar Produto</h4>
                </div>

                <div class='modal-body' id='conteudoModal'>

                </div>

                <!--<div class='modal-footer'>
                    <button type='button' class='btn btn-success' tabindex='41'>Salvar</button>
                    <button type='button' class='btn btn-danger' tabindex='42' data-dismiss='modal'>Cancelar</button>
                </div>-->
            </div>
        </div>
    </div>

";

//visualizar Foto
echo"
    <div class='modal fade' id='modalFoto' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title' id='myModalLabel'>Visualizar Foto</h4>
                </div>

                <div class='modal-body' id='conteudoModalFoto'>
                    <!--TODO-->
                </div>
            </div>
        </div>
    </div>

";



//cadastrar
    echo "
    <div class='modal fade' id='modalCadastrar' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title' id='myModalLabel'>Cadastro de produto</h4>
                </div>
                <!--Form-->
                <form role='form' method='POST' action='../intermediario/cadastroProduto.php'>
                    <div class='modal-body'>
                        <!--TODO-->
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='descricaoProd' >Descrição do produto</label>
                                    <textarea rows='9' id='descricaoProd' name='descricaoProd' class='form-control' size='50' autofocus required style='resize: none;'> </textarea>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='fabricante' >Fabricante</label> <br />
                                    <select class='form-control' name='fabricante' id='fabricante' tabindex=''>
                                        <option value=''>Selecione...</option>
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
                                        <span class='input-group-addon' ><i class='fa fa-money fa-fw'></i></span>
                                        <input type='tel' id='precoUniProd' name='precoUniProd' class='form-control' min='0' size='6' maxlength='6' pattern='([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$' required>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='qtdEstoqueProd' >Quantidade em estoque</label>
                                    <div class='input-group margin-bottom-lg'>
                                        <span class='input-group-addon'><i class='fa fa-cubes fa-fw'></i></span>
                                    <input type='number' id='qtdEstoqueProd' name='qtdEstoqueProd' class='form-control' min='1' size='6' maxlength='6' required>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-3'> </div>

                            <div class='col-lg-9'>
                                <label for='fotoProd'>Foto do produto</label>
                                <input type='file' id='fotoProd' name='fotoProd' value='img/' required />
                            </div>
                        </div>
                    </div>

                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-success' tabindex='' name='cadastrar'>Salvar</button>
                        <button type='button' class='btn btn-danger' tabindex='' data-dismiss='modal'>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";

include "bottom.php";

