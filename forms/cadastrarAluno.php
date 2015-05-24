<?php
/**
 * Created by PhpStorm.
 * User: Whelber
 * Date: 21/04/2015
 * Time: 09:36
 */

include('forms/bottom.php');



if (isset($_GET['funcao'])){
    //Echo $_POST['dt_nasc'];
    if ($_GET['funcao'] == 'cadastroBasico'){  
        

        if (date('Y') - $_POST['dt_nasc'] < 18){
            dadosComplementares();
        }
        else{
            $classificacao  = $_POST['clas'];
            $ra             = $_POST['ra'];
            $nome           = $_POST['nome'];
            $dt_nasc        = $_POST['dt_nasc'];
            $sexo           = $_POST['sexo'];
            $estado_civil   = $_POST['est_civil'];
            $num_doc        = $_POST['num_doc'];
            $tipo_doc       = $_POST['tipo_doc'];
            $cidade_nasc    = $_POST['cidade_nasc'];
            $estado_nasc    = $_POST['est_nasc'];
            $cpf            = $_POST['cpf'];
            $dt_exp_doc     = $_POST['dt_exp_doc'];
            $tel_res        = $_POST['tel_res'];
            $tel_comer      = $_POST['tel_com'];
            $tel_cel        = $_POST['tel_cel'];
            $email          = $_POST['email'];
            $cep            = $_POST['cep'];
            $endereco       = $_POST['end'];
            $numero_casa    = $_POST['num_casa'];
            $complemento    = $_POST['complemento'];
            $bairro         = $_POST['bairro'];
            $cidade         = $_POST['cidade'];
            $estado_atual   = $_POST['est_atual'];


            include_once("aluno.class.php");
            $aluno = new Aluno();

            $linhas = $aluno->cadastrarAluno($classificacao, $ra, $nome, $dt_nasc, $sexo, $estado_civil, $num_doc, $tipo_doc, $cidade_nasc, $estado_nasc, $cpf, $dt_exp_doc, 
                                     $tel_res, $tel_comer, $tel_cel, $email, $cep, $endereco, $numero_casa, $complemento, $bairro, $cidade, $estado_atual);

            if ($linhas > 0){
                echo "
                    <div class='panel-body'> 
                        <div class='alert alert-success'>
                            <strong>Cadastro realizado com sucesso!</strong>
                        </div>
                    </div>";
            } 
            else{
                echo "
                    <div class='panel-body'> 
                        <div class='alert alert-danger'>
                            <strong>Falha ao cadastrar!</strong>
                        </div>
                    </div>";
            }
                
        }
    }

}
else{
    echo"
    <div id='page-inner'>
        <div class='row'>
            <div class='col-md-12'>
                <h1 class='page-head-line'>Olá Liliane</h1>
            </div>
        </div>
        <div class='row'>
           <div class='col-md-12 col-sm-6'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    O que falar dela?
                </div>
                <div class='panel-body'>
                    <p>Essa pessoa tem uma senha com 'pepper'. Isso já fala muito por si só, porém ela ainda consegue se achar um MÁXIMO hahahaha</p>
                </div>
                ";
                    modal(); 
echo"                
                <div class='panel-footer'>
                    Vlw/flw
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
";    



}

function modal() {
echo"
    <div class='panel panel-default'>
        <div class='panel-heading' >
                Modals Example
        </div>
        <div class='panel-body'>
            <button class='btn btn-primary col-lg-12 btn-lg' data-toggle='modal' data-target='#myModal'>
              Click  Launch Demo Modal
            </button>
            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                            <h4 class='modal-title' id='myModalLabel'>Cadastro de Aluno</h4>
                        </div>
                        <form role='form' method='POST' action='cadastrarAluno.php?funcao=cadastroBasico'>
                        <div class='modal-body'>
";
    dadosBasicos();

echo "
                        </div>
                        
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-success' tabindex='41'>Salvar</button>
                            <button type='button' class='btn btn-danger' tabindex='42' data-dismiss='modal'>Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals-->";
}


function dadosBasicos(){
echo "
    <div id='page-inner'>
            <!-- /. ROW  -->
              <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Dados Pessoais
                        </div>
                        <div class='panel-body'>
                            <div class='row'>
                                
                                    <div class='col-lg-6'>
                                         <div class='form-group'>
                                            <label for='clas' >Classificação</label>
                                            <input type='number' id='clas' name='clas' class='form-control' autofocus required>
                                        </div>

                                        <div class='form-group'>
                                            <label for='nome' >Nome</label>
                                            <input id='nome' name='nome' class='form-control' tabindex='2' required>
                                        </div>

                                        <div class='form-group'>
                                            <label>Sexo</label>
                                            <label class='radio-inline'>
                                                <input type='radio' name='sexo' id='masc' value='masc' checked='' tabindex='4'> Masculino
                                            </label>
                                            <label class='radio-inline'>
                                                <input type='radio' name='sexo' id='fem' value='fem' tabindex='5'> Feminino
                                            </label>
                                        </div>

                                        <div class='form-group'>
                                            <label>Estado civíl</label>
                                            <label class='radio-inline'>
                                                <input type='radio' name='est_civil' id='solteiro' value='solteiro' checked='' tabindex='6'> Solteiro
                                            </label>
                                            <label class='radio-inline'>
                                                <input type='radio' name='est_civil' id='casado' value='casado' tabindex='7'> Casado
                                            </label>
                                            <label class='radio-inline'>
                                                <input type='radio' name='est_civil' id='outros' value='outros' tabindex='8'> Outros
                                            </label>
                                        </div>

                                        <div class='form-group'>
                                            <label for='num_doc' >Nº do documento de identidade</label>
                                            <input id='num_doc' name='num_doc' class='form-control' tabindex='11'>
                                        </div>

                                        <div class='form-group'>
                                            <label for=''>Tipo de documento</label>
                                            <select class='form-control' name='tipo_doc' id='tipo_doc' tabindex='12'>
                                                <option value=''>Selecione...</option>
                                                <option value='1' >carteira de identidade expedida pelas Secretarias de Segurança Pública (RG)</option>
                                                <option value='2' >cédula de identidade de estrangeiros (RNE)</option>
                                                <option value='3' >carteira nacional de habilitação com foto (CNH)</option>
                                                <option value='4' >carteira expedida por Ordens ou Conselhos Profissionais (OAB/COREN/CREA/outros)</option>
                                                <option value='5' >carteira de trabalho e previdência social (CTPS)</option>
                                                <option value='6' >passaporte brasileiro</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class='col-lg-6'>
                                         <div class='form-group'>
                                            <label for='ra' >RA</label>
                                            <input type='text' id='ra' name='ra' value='GU2015' class='form-control' tabindex='1' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for='dt_nasc' >Data de Nascimento</label>
                                            <input type='date' id='dt_nasc' name='dt_nasc' class='form-control' tabindex='3' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for='cidade_nasc' >Cidade de Nascimento</label>
                                            <input id='cidade_nasc' name='cidade_nasc' class='form-control' tabindex='9'>
                                        </div>

                                        <div class='form-group'>
                                            <label for='est_nasc'>Estado</label>
                                            <select class='form-control' name='est_nasc' id='est_nasc' tabindex='10'>
                                                <option value=' '>Selecione...</option>
                                                <option value='AC' >AC</option>
                                                <option value='AL' >AL</option>
                                                <option value='AP' >AP</option>
                                                <option value='AM' >AM</option>
                                                <option value='BA' >BA</option>
                                                <option value='CE' >CE</option>
                                                <option value='DF' >DF</option>
                                                <option value='ES' >ES</option>
                                                <option value='GO' >GO</option>
                                                <option value='MA' >MA</option>
                                                <option value='MT' >MT</option>
                                                <option value='MS' >MS</option>
                                                <option value='MG' >MG</option>
                                                <option value='PA' >PA</option>
                                                <option value='PB' >PB</option>
                                                <option value='PR' >PR</option>
                                                <option value='PE' >PE</option>
                                                <option value='PI' >PI</option>
                                                <option value='RJ' >RJ</option>
                                                <option value='RN' >RN</option>
                                                <option value='RS' >RS</option>
                                                <option value='RO' >RO</option>
                                                <option value='RR' >RR</option>
                                                <option value='SC' >SC</option>
                                                <option value='SP' >SP</option>
                                                <option value='SE' >SE</option>
                                                <option value='TO' >TO</option>
                                            </select>
                                        </div>

                                        <div class='form-group'>
                                            <label for='cpf' >CPF</label>
                                            <input id='cpf' name='cpf' class='form-control' tabindex='13'>
                                        </div>

                                    </div>

                                     <div class='col-lg-12'>
                                     </div>

                                    <div class='col-lg-3'>
                                         <div class='form-group'>
                                            <label for='dt_exp_doc' >Data de expedição </label>
                                            <input type='month' id='dt_exp_doc' name='dt_exp_doc' class='form-control' tabindex='14'>
                                         </div>
                                    </div>

                                    <div class='col-lg-3'>
                                         <div class='form-group'>
                                            <label for='tel_res' >Telefone Residencial</label>
                                            <input id='tel_res' name='tel_res' class='form-control' tabindex='15'>
                                         </div>
                                    </div>

                                    <div class='col-lg-3'>
                                         <div class='form-group'>
                                            <label for='tel_com' >Telefone Comercial</label>
                                            <input id='tel_com' name='tel_com' class='form-control' tabindex='16'>
                                         </div>
                                    </div>

                                    <div class='col-lg-3'>
                                         <div class='form-group'>
                                            <label for='tel_cel' >Celular do aluno</label>
                                            <input id='tel_cel' name='tel_cel' class='form-control' tabindex='17'>
                                         </div>
                                    </div>

                                    <div class='col-lg-12'>
                                         <div class='form-group'>
                                            <label for='email' >E-mail</label>
                                            <input type='email' id='email' name='email' class='form-control' tabindex='18'>
                                         </div>
                                    </div>
                            </div> <!-- /.row (nested) -->
                        </div> <!-- /.panel-body -->
                    </div> <!-- /.panel -->
                </div> <!-- /.col-lg-12 -->
            </div>";

echo "
    <div class='row'>
        <div class='col-lg-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    Endereço
                </div>
                <div class='panel-body'>
                    <div class='row'>
                        <!-- <form role='form'> -->
                            <div class='col-lg-3'>
                                <div class='form-group'>
                                    <label for='cep' >CEP</label>
                                    <input id='cep' name='cep' class='form-control' tabindex='19'>
                                </div>
                            </div>

                            <div class='col-lg-3'>
                                <div class='form-group'>
                                    <br />
                                    <button type='submit' class='btn btn-primary' tabindex='40'>Procurar</button>
                                </div>
                            </div>
                            
                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='end' >Endereço</label>
                                    <input id='end' name='end' class='form-control' tabindex='20'>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='num_casa' >Número</label>
                                    <input id='num_casa' name='num_casa' class='form-control' tabindex='21'>
                                </div>

                                <div class='form-group'>
                                    <label for='complemento' >Complemento</label>
                                    <input id='complemento' name='complemento' class='form-control' tabindex='22'>
                                </div>
                            </div>


                            <div class='col-lg-6'>
                                <div class='form-group'>
                                    <label for='bairro' >Bairro</label>
                                    <input id='bairro' name='bairro' class='form-control' tabindex='21'>
                                </div>

                                <div class='form-group'>
                                    <label for='cidade' >Cidade</label>
                                    <input id='cidade' name='cidade' class='form-control' tabindex='23'>
                                </div>

                                <div class='form-group'>
                                    <label>Estado</label>
                                    <select class='form-control' name='est_atual' id='est_atual' tabindex='24'>
                                        <option value=' '>Selecione...</option>
                                        <option value='AC' >AC</option>
                                        <option value='AL' >AL</option>
                                        <option value='AP' >AP</option>
                                        <option value='AM' >AM</option>
                                        <option value='BA' >BA</option>
                                        <option value='CE' >CE</option>
                                        <option value='DF' >DF</option>
                                        <option value='ES' >ES</option>
                                        <option value='GO' >GO</option>
                                        <option value='MA' >MA</option>
                                        <option value='MT' >MT</option>
                                        <option value='MS' >MS</option>
                                        <option value='MG' >MG</option>
                                        <option value='PA' >PA</option>
                                        <option value='PB' >PB</option>
                                        <option value='PR' >PR</option>
                                        <option value='PE' >PE</option>
                                        <option value='PI' >PI</option>
                                        <option value='RJ' >RJ</option>
                                        <option value='RN' >RN</option>
                                        <option value='RS' >RS</option>
                                        <option value='RO' >RO</option>
                                        <option value='RR' >RR</option>
                                        <option value='SC' >SC</option>
                                        <option value='SP' >SP</option>
                                        <option value='SE' >SE</option>
                                        <option value='TO' >TO</option>
                                    </select>
                                </div>
                            </div>
                    </div> <!-- /.row (nested) -->
                </div> <!-- /.panel-body -->
            </div> <!-- /.panel -->
        </div> <!-- /.col-lg-12 -->
    </div> <!--.row -->";
}

function dadosComplementares() {
echo "
    <div class='row'>
        <div class='col-lg-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    Dados Complementares
                </div>
                <div class='panel-body'>
                    <div class='row'>
                        <form role='form'>
                            <div class='col-lg-12'>
                                <div class='form-group'>
                                    <label for='nome_rep' >Nome do representante legal</label>
                                    <input id='nome_rep' name='nome_rep' class='form-control' tabindex='25'>
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                 <div class='form-group'>
                                    <label for='tel_cel_rep' >Celular do representante</label>
                                    <input id='tel_cel_rep' name='tel_cel_rep' class='form-control' tabindex='26'>
                                 </div>

                                 <div class='form-group'>
                                    <label for='renda' >Renda familiar</label>
                                    <input id='renda' name='renda' class='form-control' tabindex='28'>
                                </div>
                            </div>


                            <div class='col-lg-6'>
                                 <div class='form-group'>
                                    <label for='cpf_rep' >CPF do representante</label>
                                    <input id='cpf_rep' name='cpf_rep' class='form-control' tabindex='27'>
                                 </div>


                                <div class='form-group'>
                                    <label for='num_fam' >Número de familiares</label>
                                    <input id='num_fam' name='num_fam' class='form-control' tabindex='29'>
                                </div>
                            </div>
                        </div>
                    <!-- /.row (nested) -->
                </div>

                <div class='col-lg-3'>
                </div>

                <div class='col-lg-3'>
                    <button type='submit' class='btn btn-success btn-lg'>Cadastrar</button>
                </div>

                <div class='col-lg-3'>
                    <button type='reset' class='btn btn-danger btn-lg'><a href='cadastrarAluno.php'>Cancelar</a></button>
                </div>

                <div class='col-lg-3'>
                </div>
               
                </form> 

        </div>";
}
echo "</div>";


include('forms/bottom.php');