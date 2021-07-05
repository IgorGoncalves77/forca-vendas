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
    <title>Controle Vendas | Clientes</title>
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
                    <a class="nav-link nav-personalizate" >Clientes</a>
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
                                data-target="#modalCadastroCliente">
                                Inserir
                            </button>
                            

                            <!-- CADASTRO DE USUÁRIOS -->
                            <div class="modal fade" id="modalCadastroCliente" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 800px!important;" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: <?=$cor ?>!important;">
                                            <h5 class="modal-title" style="color: white!important;"
                                                id="exampleModalLabel">Cadastro de Cliente</h5>
                                                <!-- Função X -->
                                                <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Fechar">
                                                    <span aria-hidden="true" style="color: white!important;">&times;</span>
                                                </button> -->
                                        </div>
                                        
                                        <?php	
                                            if(!isset($clientcodigo))
                                                $clientcodigo 	= isset($_GET["clientcodigo"]) ? $_GET["clientcodigo"] : null;
                                            if(!isset($clientnome))
                                                $clientnome 	= isset($_GET["clientnome"]) ? $_GET["clientnome"] : null;
                                            if(!isset($clientaniver))
                                                $clientaniver 	= isset($_GET["clientaniver"]) ? $_GET["clientaniver"] : null;
                                            if(!isset($clientfisjur))
                                                $clientfisjur 	= isset($_GET["clientfisjur"]) ? $_GET["clientfisjur"] : null;
                                            if(!isset($clientsexo))
                                                $clientsexo 	= isset($_GET["clientsexo"]) ? $_GET["clientsexo"] : null;
                                            if(!isset($clienttelef))
                                                $clienttelef 	= isset($_GET["clienttelef"]) ? $_GET["clienttelef"] : null;
                                            if(!isset($clientcel))
                                                $clientcel 	    = isset($_GET["clientcel"]) ? $_GET["clientcel"] : null;
                                            if(!isset($clientemail))
                                                $clientemail 	= isset($_GET["clientemail"]) ? $_GET["clientemail"] : null;
                                            if(!isset($clientendere))
                                                $clientendere 	= isset($_GET["clientendere"]) ? $_GET["clientendere"] : null;
                                            if(!isset($clientnumero))
                                                $clientnumero 	= isset($_GET["clientnumero"]) ? $_GET["clientnumero"] : null;
                                            if(!isset($clientbairro))
                                                $clientbairro 	= isset($_GET["clientbairro"]) ? $_GET["clientbairro"] : null;
                                            if(!isset($clientcomple))
                                                $clientcomple 	= isset($_GET["clientcomple"]) ? $_GET["clientcomple"] : null;
                                            if(!isset($clientuf))
                                                $clientuf 	    = isset($_GET["clientuf"]) ? $_GET["clientuf"] : null;
                                            if(!isset($clientcidade))
                                                $clientcidade 	= isset($_GET["clientcidade"]) ? $_GET["clientcidade"] : null;
                                            if(!isset($arq))
                                                $arq 	= isset($_GET["arq"]) ? $_GET["arq"] : "InsereCliente.php";
                                        ?>
                                        
                                        <div class="modal-body">

                                            <form method="post" action="<?php echo $arq; ?>" class="row">
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientnome" class="col-sm-10 col-form-label">
                                                            Nome
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientnome" name="clientnome" value="<?php echo $clientnome ?>">
                                                    </div>
                                                </div>

                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientaniver" class="col-sm-10 col-form-label">
                                                            Aniversário
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientaniver"
                                                            name="clientaniver" data-inputmask-alias="datetime"
                                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?php echo $clientaniver ?>">
                                                    </div>
                                                </div>
                                                                                              
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientfisjur" class="col-sm-10 col-form-label">
                                                            CPF
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientfisjur" name="clientfisjur"
                                                            data-inputmask='"mask": "999.999.999-99"' data-mask value="<?php echo $clientfisjur ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-5">
                                                    <div>
                                                        <label for="clientsexo" class="col-sm-10 col-form-label">
                                                            Sexo
                                                        </label>
                                                    </div>
                                                    <select class="form-control select2">
                                                        <option selected="selected">Selecione</option>
                                                        <option>Masculino</option>
                                                        <option>Feminino</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clienttelef" class="col-sm-10 col-form-label">
                                                            Telefone
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clienttelef"
                                                            name="clienttelef" data-inputmask='"mask": "(99) 9999-9999"'
                                                            data-mask OnKeyPress="formatar('## ####-####', this)" value="<?php echo $clienttelef ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientcel" class="col-sm-10 col-form-label">
                                                            Celular
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientcel"
                                                            name="clientcel" data-inputmask='"mask": "(99) 99999-9999"'
                                                            data-mask OnKeyPress="formatar('## #####-####', this)" value="<?php echo $clientcel ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-12">
                                                    <div>
                                                        <label for="clientemail" class="col-sm-10 col-form-label">
                                                            Email
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-11">
                                                        <input type="text" class="form-control" id="clientemail" name="clientemail"
                                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $clientemail ?>">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientendere" class="col-sm-10 col-form-label">
                                                            Endereço
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientendere" name="clientendere" value="<?php echo $clientendere ?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientnumero" class="col-sm-10 col-form-label">
                                                            Número
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientnumero" name="clientnumero" value="<?php echo $clientnumero ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientbairro" class="col-sm-10 col-form-label">
                                                            Bairro
                                                        </label>
                                                    </div>    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientbairro" name="clientbairro" value="<?php echo $clientbairro ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientcomple" class="col-sm-10 col-form-label">
                                                            Complemento
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientcomple" name="clientcomple" value="<?php echo $clientcomple ?>">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-5">
                                                    <div>
                                                        <label for="clientuf" class="col-sm-10 col-form-label">
                                                            UF
                                                        </label>
                                                    </div>
                                                    <select class="form-control select2" id="clientuf" name="clientuf" style="width: 100%;">
                                                    
                                                    </select>
                                                </div>

                                                <div class="col-1 col-md-1"></div>
                                                
                                                <div class="col-12 col-md-6">
                                                    <div>
                                                        <label for="clientcidade" class="col-sm-10 col-form-label">
                                                            Cidade
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="clientcidade" name="clientcidade" value="<?php echo $clientcidade ?>">
                                                    </div>
                                                    <!-- <select class="form-control select2" id="clientcidade" name="clientcidade" style="width: 100%;">
                                                        <option velue="0" selected="selected">Selecione</option>
                                                    </select> -->
                                                </div>

                                                <input type="hidden" name="clientcodigo" value="<?php echo "$clientcodigo" ?>">

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
            $sql = "SELECT * FROM clientes";
            $query = mysqli_query($id_conexao, $sql);
        ?>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Clientes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Telefone</th>
                                        <th>Celular</th>
                                        <th>Cidade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($query)){
                                            $clientcodigo   = $row['clientcodigo'];
                                            $clientnome     = $row['clientnome'];
                                            $clienttelef    = $row['clienttelef'];
                                            $clientcel      = $row['clientcel'];
                                            $clientcidade   = $row['clientcidade'];?>
                                            <tr>
                                                <td><?= $clientnome ?></td>
                                                <td><?= $clienttelef ?></td>
                                                <td><?= $clientcel ?></td>
                                                <td><?= $clientcidade ?></td>
                                                <td><a href="DeletaCliente.php?clientcodigo=<?php echo $row['clientcodigo']; ?>" type="" class="btn btn-sm btn-danger fas fa-trash-alt" name="excluir" id="excluir"></a></td>
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
    <!-- Select Cidades e Estados -->
    <script src="../../pages/ControleVendas/estadoscidades.js"></script>
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
        
        
        //SCRIPT ALIMETAÇÃO CAMPO UF E CIDADE 
        var select = document.getElementById('clientuf');
        var h = `<option value="0">Selecione</option>`
        for (let i = 0; i < estadoCidade.length; i++) {
            h += `<option value="${[i]}">${estadoCidade[i].sigla}</option>`;
            
        }
        select.innerHTML = h;

        select.addEventListener("change", function(){
            console.log("dfgfd")
            var cidades = estadoCidade[this.value].cidades
            var selectCidade = document.getElementById('clientcidade');
            var h = `<option value="0">Selecione</option>`
            if (this.value != "0") {
                for (let i = 0; i < cidades.length; i++) {
                    h += `<option value="${[i]}">${cidades[i]}</option>`;
                }
            }
            selectCidade.innerHTML = h
        })

    })

      
    </script>

</body>

</html>