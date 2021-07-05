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
    <title>Controle Vendas | Usuários</title>
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
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:<?= $cor?>!important">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-personalizate" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link nav-personalizate" >Usuários</a>
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
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

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
                            <button type="button" class="btn btn-inserir btn-personalizate" data-toggle="modal"
                                data-target="#modalCadastroUsuarios">
                                Inserir
                            </button>
                            

                            <!-- CADASTRO DE USUÁRIOS -->
                            <div class="modal fade" id="modalCadastroUsuarios" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 800px!important;" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: <?=$cor ?>!important;">
                                            <h5 class="modal-title" style="color: white!important;"
                                                id="exampleModalLabel">Cadastro de Usuários</h5>
                                                <!-- Função X -->
                                                <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Fechar">
                                                    <span aria-hidden="true" style="color: white!important;">&times;</span>
                                                </button> -->
                                        </div>
                                        
                                        <?php	
                                            if(!isset($usuaricodigo))
                                                $usuaricodigo 	= isset($_GET["usuaricodigo"]) ? $_GET["usuaricodigo"] : null;
                                            if(!isset($usuarinome))
                                                $usuarinome 	= isset($_GET["usuarinome"]) ? $_GET["usuarinome"] : null;
                                            if(!isset($usuaridescri))
                                                $usuaridescri 	= isset($_GET["usuaridescri"]) ? $_GET["usuaridescri"] : null;
                                            if(!isset($usuarisenha))
                                                $usuarisenha 	= isset($_GET["usuarisenha"]) ? $_GET["usuarisenha"] : null;
                                            if(!isset($usuariconfirsenha))
                                                $usuariconfirsenha 	= isset($_GET["usuariconfirsenha"]) ? $_GET["usuariconfirsenha"] : null;
                                            if(!isset($arq))
                                                $arq 	= isset($_GET["arq"]) ? $_GET["arq"] : "InsereUsuario.php";
                                        ?>
                                        
                                        <div class="modal-body">

                                            <form method="post" action="<?php echo $arq; ?>" class="row">
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="usuarinome" class="col-sm-10 col-form-label">
                                                            Nome
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="usuarinome" name="usuarinome" value="<?php echo $usuarinome ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="usuaridescri" class="col-sm-10 col-form-label">
                                                            Usuário
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="usuaridescri" name="usuaridescri" value="<?php echo $usuaridescri ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="usuarisenha" class="col-sm-10 col-form-label">
                                                            Senha
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="usuarisenha" name="usuarisenha" value="<?php echo $usuarisenha ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="usuariconfirsenha" class="col-sm-10 col-form-label">
                                                            Confirmar Senha
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="usuariconfirsenha" name="usuariconfirsenha" value="<?php echo $usuariconfirsenha ?>">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="usuaricodigo" value="<?php echo "$usuaricodigo" ?>">
                                                
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
            $sql = "SELECT * FROM usuarios";
            $query = mysqli_query($id_conexao, $sql);
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Usuários</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Usuário</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($query)){
                                            $usuaricodigo   = $row['usuaricodigo'];
                                            $usuarinome     = $row['usuarinome'];
                                            $usuaridescri   = $row['usuaridescri'];?>
                                            <tr>
                                                <td><?= $usuarinome ?></td>
                                                <td><?= $usuaridescri ?></td>
                                                <td><a href="DeletaUsuario.php?usuaricodigo=<?php echo $row['usuaricodigo']; ?>" type="" class="btn btn-sm btn-danger fas fa-trash-alt" name="excluir" id="excluir"></a></td>
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
        // FUNÇÕES PARA LISTA
        $(function () {
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
        $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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
        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
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

        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })

      
    </script>

</body>

</html>