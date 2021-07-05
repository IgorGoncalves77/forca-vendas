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
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
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
            <a class="brand-link menu-personalizate">
                <i class="nav-icon fas fa-chart-line"></i>
                <span class="brand-text font-weight-light">Controle Vendas</span>
            </a>

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
                            <button type="button" class="btn btn-inserir" data-toggle="modal" data-target="#modalCadastroVenda">
                                Inserir
                            </button>


                            <!-- CADASTRO DE USUÁRIOS -->
                            <div class="modal fade" id="modalCadastroVenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 800px!important;" role="document">
                                    <div class="modal-content">
                                        <!--      Wizard container        -->
		            <div class="wizard-container">

<div class="card wizard-card" data-color="orange" id="wizardProfile">
    <form action="" method="">
<!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

        <div class="wizard-header text-center">
            <h3 class="wizard-title">Create your profile</h3>
            <p class="category">This information will let us know more about you.</p>
        </div>

        <div class="wizard-navigation">
            <div class="progress-with-circle">
                 <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
            </div>
            <ul>
                <li>
                    <a href="#about" data-toggle="tab">
                        <div class="icon-circle">
                            <i class="ti-user"></i>
                        </div>
                        About
                    </a>
                </li>
                <li>
                    <a href="#account" data-toggle="tab">
                        <div class="icon-circle">
                            <i class="ti-settings"></i>
                        </div>
                        Work
                    </a>
                </li>
                <li>
                    <a href="#address" data-toggle="tab">
                        <div class="icon-circle">
                            <i class="ti-map"></i>
                        </div>
                        Address
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="about">
                <div class="row">
                    <h5 class="info-text"> Please tell us more about yourself.</h5>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="picture-container">
                            <div class="picture">
                                <img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                <input type="file" id="wizard-picture">
                            </div>
                            <h6>Choose Picture</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name <small>(required)</small></label>
                            <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                        </div>
                        <div class="form-group">
                            <label>Last Name <small>(required)</small></label>
                            <input name="lastname" type="text" class="form-control" placeholder="Smith...">
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label>Email <small>(required)</small></label>
                            <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="account">
                <h5 class="info-text"> What are you doing? (checkboxes) </h5>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="col-sm-4">
                            <div class="choice" data-toggle="wizard-checkbox">
                                <input type="checkbox" name="jobb" value="Design">
                                <div class="card card-checkboxes card-hover-effect">
                                    <i class="ti-paint-roller"></i>
                                    <p>Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="choice" data-toggle="wizard-checkbox">
                                <input type="checkbox" name="jobb" value="Code">
                                <div class="card card-checkboxes card-hover-effect">
                                    <i class="ti-pencil-alt"></i>
                                    <p>Code</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="choice" data-toggle="wizard-checkbox">
                                <input type="checkbox" name="jobb" value="Develop">
                                <div class="card card-checkboxes card-hover-effect">
                                    <i class="ti-star"></i>
                                    <p>Develop</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="address">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="info-text"> Are you living in a nice area? </h5>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" class="form-control" placeholder="5h Avenue">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Street Number</label>
                            <input type="text" class="form-control" placeholder="242">
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="New York...">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Country</label><br>
                            <select name="country" class="form-control">
                                <option value="Afghanistan"> Afghanistan </option>
                                <option value="Albania"> Albania </option>
                                <option value="Algeria"> Algeria </option>
                                <option value="American Samoa"> American Samoa </option>
                                <option value="Andorra"> Andorra </option>
                                <option value="Angola"> Angola </option>
                                <option value="Anguilla"> Anguilla </option>
                                <option value="Antarctica"> Antarctica </option>
                                <option value="...">...</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wizard-footer">
            <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
            </div>

            <div class="pull-left">
                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
            </div>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
</div> <!-- wizard container -->
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
                                            <th>Valor Total R$</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                            $vendasclientcodigo = $row['vendasclientcodigo'];
                                            $vendasconpagcodigo = $row['vendasconpagcodigo'];
                                            $vendasvlrtot       = $row['vendasvlrtot']; ?>
                                            <tr>
                                                <td><?= $vendasclientcodigo ?></td>
                                                <td><?= $vendasconpagcodigo ?></td>
                                                <td><?= $vendasvlrtot ?></td>
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
            var vendasprodutcodigo = document.getElementById('prod');//vendasprodutcodigo
            var vetorprodutos = [];
            document.getElementById('prod').addEventListener("change", function() {
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