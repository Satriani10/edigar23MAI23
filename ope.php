<?php
    session_start();

    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $servername = "localhost";
    $username = "root";
    $password = "etec";
    $dbname = "edigar";

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $query = $conn->prepare("SELECT * FROM usuario WHERE nmusuario = '$login' and dssenha = '$senha'");
        $query->execute();
        $quantidadeLinhas = $query->rowCount();

        echo $quantidadeLinhas;
    } 
    catch(PDOException $e)
    {
        echo "Falha na conexão: " . $e->getMessage();
    }

   
    if($quantidadeLinhas>= 1){
        $_SESSION['usuario'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:main.php');
    }
    else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo "LOGIN NAO REALIZADO<br/>";
        header('location:index.html');
    }
?>
