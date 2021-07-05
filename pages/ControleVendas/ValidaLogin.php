<?php
  
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuaridescri']) OR empty($_POST['usuarisenha']))) {
      header("Location: index.php"); exit;
  }

  include('ConectaBD.php');

  $usuaridescri = mysqli_real_escape_string($id_conexao,$_POST['usuaridescri']);
  $usuarisenha = mysqli_real_escape_string($id_conexao, $_POST['usuarisenha']);

    // Validação do usuário/senha digitados
    $sql = "SELECT usuaricodigo, usuarinome, usuarinivel FROM usuarios WHERE (usuaridescri = '".$usuaridescri ."') AND (usuarisenha = '". sha1($usuarisenha) ."') AND (usuariativo = 1) LIMIT 1";
    $query = mysqli_query($id_conexao, $sql);
  
    if (mysqli_num_rows($query) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; exit;
    } else {
        // Salva os dados encontados na variável $resultado
        $resultado = mysqli_fetch_assoc($query);

        // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['usuaricodigo'];
      $_SESSION['UsuarioNome'] = $resultado['usuarinome'];
      $_SESSION['UsuarioNivel'] = $resultado['usuarinivel'];
    
      // Redireciona o visitante
      header("Location: restrito.php"); exit;

    }

  ?>