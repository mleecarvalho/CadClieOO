<link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link type="text/css"  rel="stylesheet" href="assets/bootstrap-table/bootstrap-table.min.css">
<link type="text/css"  rel="stylesheet" href="css/index.css">
<link href="assets/star-rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
<script type="application/javascript" src="assets/jquery/jquery.min.js"></script>
<script src="assets/star-rating/js/star-rating.js" type="text/javascript"></script>

<div class="page-container">
    <div class="page-head">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="page-title">
                    <h1>CadClieOO
                        <small> - Dados do Cliente</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<?php
    extract($_GET);
    if(!isset($nome)){
        header('location:index.php');
        die();
    }

    include_once('controllers/ClientesController.php');

    $clientes = new ClientesController();
    $dados = $clientes->findCliente($nome);
?>
    <div class="page-content">
        <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_0">
                    <div class="portlet light bordered flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <tbody class="flip-content">
                            <tr>
                                <td>
                                    <label  class="bold">Nome:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->nome;
                                        echo '<input id="rating-system" type="number" class="rating" min="1" max="5" step="'.$dados->importancia.'">';
                                        echo "<script>$('#rating-system').rating('update', ".$dados->importancia.");</script>";
                                    ?>
                                    </span>
                                </td>
                                <td>
                                    <label  class="bold">Idade:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->idade; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php $tipoCliente = ($dados->tipo == 1) ? 'Pessoa Jurídica' : 'Pessoa Física'; ?>
                                    <label  class="bold"><?php echo $tipoCliente; ?> :</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->documento; ?></span>
                                </td>
                                <td>
                                    <label  class="bold">CEP:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->cep; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label  class="bold">Endereço:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->endereco; ?></span>
                                </td>
                                <td>
                                    <label  class="bold">Número:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->numero; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label  class="bold">Complemento:</label>
                                </td>
                                <td>
                                    <span><?php echo $dados->complemento; ?></span>
                                </td>
                                <td>
                                    <label  class="bold">Bairro:</label>
                                <td>
                                    <span><?php echo $dados->bairro; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label  class="bold">Cidade:</label>
                                <td>
                                    <span><?php echo $dados->cidade; ?></span>
                                </td>
                                <td>
                                    <label  class="bold">Estado:</label>
                                <td>
                                    <span><?php echo $dados->estado; ?></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
                <div class="col-md-12">
                    <button class="pull-right btn" onclick="window.open('index.php','_self');" style="font-weight: bold;">< VOLTAR</button>
                </div>
            </div>
</div>
