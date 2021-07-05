<!-- DEFINIÇÃO DE COR DA APLICAÇÃO -->
<?php
$cor = "#3c8dbc";
include('ConectaBD.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle Vendas | Vendas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- IMPORTAÇÃO DE DOCUMENTOS PARA LISTA -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../pages/ControleVendas/personalizacoes.css">

    <!-- IMPORTAÇÃO DE DOCUMENTOS PARA CADASTRO -->
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:<?= $cor ?>!important">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-personalizate" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link nav-personalizate">Vendas</a>
                </li>
            </ul>
        </nav>


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary ">
            <!-- Brand Logo -->
            <div class="brand-link menu-personalizate transition-menu">
                <i class="nav-icon fas fa-chart-line"></i>
                <span class="brand-text font-weight-light">Controle Vendas</span>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="Vendas.php" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Vendas
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="Clientes.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="Produtos.php" class="nav-link">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Produtos
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="CondicoesPagamento.php" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Condições de Pagamento
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="Usuarios.php" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Usuários
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="formulario.php" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    login
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="Wizard.php" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Wizard
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-inserir btn-personalizate" data-toggle="modal" data-target="#modalCadastroVenda">
                                Inserir
                            </button>


                            <!-- CADASTRO DE USUÁRIOS -->
                            <div class="modal fade" id="modalCadastroVenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 800px!important;" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: <?= $cor ?>!important;">
                                            <h5 class="modal-title" style="color: white!important;" id="exampleModalLabel">Cadastro de Venda</h5>
                                            <!-- Função X -->
                                            <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Fechar">
                                                    <span aria-hidden="true" style="color: white!important;">&times;</span>
                                                </button> -->
                                        </div>

                                        <?php
                                        if (!isset($vendascodigo))
                                            $vendascodigo         = isset($_GET["vendascodigo"]) ? $_GET["vendascodigo"] : null;
                                        if (!isset($vendasclientcodigo))
                                            $vendasclientcodigo = isset($_GET["vendasclientcodigo"]) ? $_GET["vendasclientcodigo"] : null;
                                        if (!isset($vendasconpagcodigo))
                                            $vendasconpagcodigo = isset($_GET["vendasconpagcodigo"]) ? $_GET["vendasconpagcodigo"] : null;
                                        // if (!isset($vendasprodutcodigo))
                                        //     $vendasprodutcodigo = isset($_GET["vendasprodutcodigo"]) ? $_GET["vendasprodutcodigo"] : null;
                                        if (!isset($vendasdesper))
                                            $vendasdesper         = isset($_GET["vendasdesper"]) ? $_GET["vendasdesper"] : null;
                                        if (!isset($vendasdesval))
                                            $vendasdesval         = isset($_GET["vendasdesval"]) ? $_GET["vendasdesval"] : null;
                                        if (!isset($vendasvlrtot))
                                            $vendasvlrtot         = isset($_GET["vendasvlrtot"]) ? $_GET["vendasvlrtot"] : null;
                                        if (!isset($arq))
                                            $arq     = isset($_GET["arq"]) ? $_GET["arq"] : "InsereVenda.php";
                                        ?>

                                        <div class="modal-body">

                                            <form method="post" action="<?php echo $arq; ?>" class="row">

                                                <div class="col-12 col-md-5">
                                                    <div>
                                                        <label for="vendasclientcodigo" class="col-sm-10 col-form-label">
                                                            Cliente
                                                        </label>
                                                    </div>
                                                    <select class="form-control select2" id="vendasclientcodigo" name="vendasclientcodigo" style="width: 100%;">
                                                        <option value="0">Selecione</option>
                                                        <?php
                                                        $selectClientes = "SELECT * FROM clientes";
                                                        $queryClientes  = mysqli_query($id_conexao, $selectClientes);
                                                        while ($row = mysqli_fetch_array($queryClientes)) {
                                                        ?>
                                                            <option value="<?= $row['clientcodigo'] ?>"><?= $row['clientnome'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-1 col-md-1"></div>
                                                
                                                <div class="col-12 col-md-5">
                                                    <div>
                                                        <label for="vendasconpagcodigo" class="col-sm-10 col-form-label">
                                                            Condição de Pagamento
                                                        </label>
                                                    </div>
                                                    <select class="form-control select2" id="vendasconpagcodigo" name="vendasconpagcodigo" style="width: 100%;">
                                                        <option value="0">Selecione</option>
                                                        <?php
                                                        $selectCondicoesPagamento = "SELECT * FROM condicoespagamento";
                                                        $queryCondicoesPagamento  = mysqli_query($id_conexao, $selectCondicoesPagamento);
                                                        while ($row = mysqli_fetch_array($queryCondicoesPagamento)) {
                                                        ?>
                                                            <option value="<?= $row['conpagcodigo'] ?>"><?= $row['conpagdescri'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-md-11 col-sm-12">
                                                    <div>
                                                        <label for="vendasprodutcodigo" class="col-sm-10 col-form-label">
                                                            Produtos
                                                        </label>
                                                    </div>
                                                    <div class="select2-blue">
                                                        <input name="vetorvendasprodutos" style="display:none" id="vetorvendasprodutos">

                                                        <select class="select2" id="vendasprodutcodigo" name="vendasprodutcodigo[]" multiple="multiple" data-dropdown-css-class="select2-selection__choice" style="width: 100%;">
                                                            <option value="0">Selecione</option>
                                                            <?php
                                                            $selectProdutos = "SELECT * FROM produtos";
                                                            $queryProdutos  = mysqli_query($id_conexao, $selectProdutos);
                                                            while ($row = mysqli_fetch_array($queryProdutos)) {
                                                            ?>
                                                                <option value="<?= $row['produtcodigo'] ?>"><?= $row['produtdescri'] ?></option>
                                                                <?php echo $vendasvlrtot += $row['produtvlruni']?> 
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="vendasvlrtot" class="col-sm-10 col-form-label">
                                                            Valor Total R$
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="money form-control" id="vendasvlrtot" name="vendasvlrtot" value="<?php echo $vendasvlrtot ?>">
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="vendascodigo" value="<?php echo "$vendascodigo" ?>">

                                                <div class="col-11 col-md-11 modal-footer modal-footer-personalizate">
                                                    <button type="button" class="btn btn-danger btn-personalizate" data-dismiss="modal">Fechar</button>
                                                    <button type="submit" value="Enviar" class="btn btn-success btn-personalizate">Salvar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.container-fluid -->
            </section>

            <!-- REALIZA CONSULTA NO BANCO PARA ALIMENTAR A LISTA -->
            <?php
            $sql = "SELECT * FROM vendas";
            $query = mysqli_query($id_conexao, $sql);
            ?>


            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Vendas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Condição de Pagamento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                            $vendascodigo       = $row['vendascodigo'];
                                            $vendasclientcodigo = $row['vendasclientcodigo'];
                                            $vendasconpagcodigo = $row['vendasconpagcodigo']; 
                                            
                                            $sql2 = "SELECT clientnome FROM clientes where clientcodigo = $vendasclientcodigo";
                                            $query2 = mysqli_query($id_conexao, $sql2);
                                            $row2 = mysqli_fetch_array($query2);
                                            $cliente       = $row2['clientnome'];
                                            
                                            $sql3 = "SELECT conpagdescri FROM condicoespagamento where conpagcodigo = $vendasconpagcodigo";
                                            $query3 = mysqli_query($id_conexao, $sql3);
                                            $row3 = mysqli_fetch_array($query3);
                                            $condicaopagamento       = $row3['conpagdescri'];

                                            ?>
                                            <tr>
                                                <td><?= $cliente ?></td>
                                                <td><?= $condicaopagamento ?></td>
                                                <td><a href="DeletaVenda.php?vendascodigo=<?php echo $row['vendascodigo']; ?>" type="" class="btn btn-sm btn-danger fas fa-trash-alt" name="excluir" id="excluir"></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                Version 1.0
            </div>
            Copyright &copy; 2020 Igor Gonçalves</a>. All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- IMPORTAÇÃO DE DOCUMENTOS PARA LISTA -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>


    <script src="../../dist/js/jquery.mask.min.js"></script>


    <!-- IMPORTAÇÃO DE DOCUMENTOS PARA CADASTRO -->
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- page script -->

    <!-- FUNÇÕES -->
<script>
    
    $(document).ready(function(){
    $('.date').mask('11/11/1111');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    });



    $(document).ready(function() {
        console.log("1 teste")
            var vendasprodutcodigo = document.getElementById('vetorvendasprodutos');//vendasprodutcodigo
            var vetorprodutos = [];
            var theID = $(this).select2('vetorvendasprodutos').id;
            console.log("theID" + theID)
            document.getElementById('vetorvendasprodutos').addEventListener("change", function() {
                console.log("foi")
                var armazenavalor = this.value;

                var indice = vetorprodutos.indexOf(armazenavalor);
                if (indice > -1) {
                    vetorprodutos.splice(indice, 1);
                } else {
                    vetorprodutos.push(armazenavalor);
                }

                var h = "";

                for (let i = 0; i < vetorprodutos.length; i++) {
                    h += vetorprodutos + ">"
                }

                h = h.substring(0, (h.length - 1));

                document.getElementById('vetorvendasprodutos').value = h;

                console.log("valor: " + document.getElementById('vetorvendasprodutos').value)

            })
        });
</script>

    <script>
        // FUNÇÕES PARA LISTA
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });


        // FUNÇÕES PARA CADASTRO
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });



        })

    </script>

</body>

</html>