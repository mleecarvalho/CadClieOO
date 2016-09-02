<link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link type="text/css"  rel="stylesheet" href="assets/bootstrap-table/bootstrap-table.min.css">
<link type="text/css"  rel="stylesheet" href="css/index.css">
<?php

include_once('controllers/ClientesController.php');

$clientes = new ClientesController();
extract($_GET);
if(!isset($order)) $order = 'ASC';
$descrOrder = ($order == 'ASC') ? 'Descendente' : 'Ascendente';
$toOrder = ($order == 'ASC') ? 'DESC' : 'ASC';
?>
<div class="page-container">
    <div class="page-head">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="page-title">
                    <h1>CadClieOO
                        <small> - Clientes listados</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="col-md-12">
            <div class="portlet light bordered flip-scroll">
                <a class="pull-right" href="index.php?order=<?php echo $toOrder; ?>">Ordernar Nome em forma <?php echo $descrOrder; ?></a>
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                    <tr>
                        <th align="left"> Nome </th>
                        <th align="left"> Idade </th>
                        <th align="left"> CPF </th>
                        <th align="left"> CEP </th>
                        <th align="left"> Endereço </th>
                        <th align="left"> Número </th>
                        <th align="left"> Complemento </th>
                        <th align="left"> Bairro </th>
                        <th align="left"> Cidade </th>
                        <th align="left"> Estado </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($clientes->getClientes($order) as $key => $itens) {
                            echo'<tr  onclick="javascript:window.open('."'".'cliente.php?nome='.$itens->nome."'".','."'_self'".');" class="rowclick">';
                            echo '<td>'.$itens->nome.'</td>';
                            echo '<td>'.$itens->idade.'</td>';
                            echo '<td>'.$itens->cpf.'</td>';
                            echo '<td>'.$itens->cep.'</td>';
                            echo '<td>'.$itens->endereco.'</td>';
                            echo '<td>'.$itens->numero.'</td>';
                            echo '<td>'.$itens->complemento.'</td>';
                            echo '<td>'.$itens->bairro.'</td>';
                            echo '<td>'.$itens->cidade.'</td>';
                            echo '<td>'.$itens->estado.'</td>';
                            echo'</tr>';
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<div id="myMod" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" id="modcontent">
        </div>
    </div>
</div>
<script type="application/javascript" src="assets/jquery/jquery.min.js"></script>
