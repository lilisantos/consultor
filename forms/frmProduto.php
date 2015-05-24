<?php
    include "top.php";

if (isset($_GET['funcao'])){
    if ($_GET['funcao'] == 'alterar'){
        modal();
    }
}


function __autoload($classe) {
    include_once("../classes/$classe.class.php");
}
    $conn = new Conexao();
    $conn->connect();



echo"
     <div class='panel panel-default'>
        <div class='panel-body'>
             <button class='btn btn-primary col-lg-6 btn-lg' data-toggle='modal' data-target='#modalCadastrar'>
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
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Produto</th>
                                <th>Estoque</th>
                                <th>Preço Unitário</th>
                                <th>Fabricante</th>
                                <th>Foto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>";
                            $consulta = mysql_query("SELECT * FROM produto");
                            while($campo = mysql_fetch_array($consulta)) {
                                echo "
                            <tr>
                                <td> " . $campo['codProd'] . " </td>
                                <td> " . $campo['descricaoProd'] . " </td>
                                <td> " . $campo['qtdEstoqueProd'] . " </td>
                                <td> " . $campo['precoUniProd'] . " </td>
                                <td> " . $campo['fabricante'] . " </td>
                                <td><img src='" . $campo['fotoProd'] . "' width='20' height='20' /> </td>
                                <td></td>
                                <td>
                                    <form action='frmProduto.php?funcao=alterar&codProd=" . $campo['codProd'] . "' method='POST'  data-toggle='modal' data-target='#modalAlterar'>
                                        <button type='submit' class='btn btn-primary' tabindex=''> Alterar</button>
                                    </form>
                                </td>
                                <td><button type='submit' class='btn btn-danger' tabindex=''>Excluir</button></td>
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

    include "bottom.php";



//Modals

//cadastrar
echo"
    <div class='modal fade' id='modalCadastrar' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title' id='myModalLabel'>Cadastro de Produto</h4>
                </div>
                <!--Form-->
                <form role='form' method='POST' action='cadastrarAluno.php?funcao=cadastroBasico'>
                    <div class='modal-body'>
                        <!--TODO-->
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='nome' >Nome</label>
                                    <input type='text' id='nome' name='nome' class='form-control' autofocus required>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='fabricante' >Fabricante</label> <br />
                                    <div class='btn-group'>
                                      <button data-toggle='dropdown' class='btn btn-primary dropdown-toggle' aria-expanded='false'>Selecione <span class='caret'></span></button>
                                      <ul class='dropdown-menu'>
                                        <li><a href='#'>Avon</a></li>
                                        <li><a href='#'>Natura</a></li>
                                        <li><a href='#'>O Boticário</a></li>
                                        <li class='divider'></li>
                                        <li><a href='#'>Outro</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='preco' >Preço</label>
                                    <input type='number' id='preco' name='preco' class='form-control' min='0' size='6' maxlength='6' required>
                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='estoque' >Quantidade em estoque</label>
                                    <input type='number' id='estoque' name='estoque' class='form-control' min='1' size='6' maxlength='6' required>
                                </div>
                            </div>

                            <div class='col-lg-3'> </div>

                            <div class='col-lg-9'>
                                <label for='foto'>Foto do produto</label>
                                <input type='file' id='foto' name='foto' value='img/'/>
                            </div>
                        </div>
                    </div>

                    <div class='modal-footer'>
                        <button type='button' class='btn btn-success' tabindex='41'>Salvar</button>
                        <button type='button' class='btn btn-danger' tabindex='42' data-dismiss='modal'>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";

//alterar
function modal() {
    echo "
    <div class='modal fade' id='modalAlterar' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title' id='myModalLabel'>Alterar produto</h4>
                </div>
                <!--Form-->
                <form role='form' method='POST' action='cadastrarAluno.php?funcao=cadastroBasico'>
                    <div class='modal-body'>
                        <!--TODO-->
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='nome' >Nome</label>
                                    <input type='text' id='nome' name='nome' class='form-control' autofocus required>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='fabricante' >Fabricante</label> <br />
                                    <div class='btn-group'>
                                      <button data-toggle='dropdown' class='btn btn-primary dropdown-toggle' aria-expanded='false'>Selecione <span class='caret'></span></button>
                                      <ul class='dropdown-menu'>
                                        <li><a href='#'>Avon</a></li>
                                        <li><a href='#'>Natura</a></li>
                                        <li><a href='#'>O Boticário</a></li>
                                        <li class='divider'></li>
                                        <li><a href='#'>Outro</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='preco' >Preço</label>
                                    <input type='number' id='preco' name='preco' class='form-control' min='0' size='6' maxlength='6' required>
                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='estoque' >Quantidade em estoque</label>
                                    <input type='number' id='estoque' name='estoque' class='form-control' min='1' size='6' maxlength='6' required>
                                </div>
                            </div>

                            <div class='col-lg-3'> </div>

                            <div class='col-lg-9'>
                                <label for='foto'>Foto do produto</label>
                                <input type='file' id='foto' name='foto' value='img/'/>
                            </div>
                        </div>
                    </div>

                    <div class='modal-footer'>
                        <button type='button' class='btn btn-success' tabindex='41'>Salvar</button>
                        <button type='button' class='btn btn-danger' tabindex='42' data-dismiss='modal'>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
}
