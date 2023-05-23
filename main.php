<?php
    require_once 'cookie.php';
    session_start();
    if((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['senha']) == true)){
        header('location:index.html');
    }
    $logado = $_SESSION['usuario'];

    $teste = $_COOKIE['usuario'];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>OLA</title>
    </head>

    <body>
        <table width="800" height="748" border="1">
        <tr>
            <td height="90" colspan="2" bgcolor="#CCCCCC">
            <?php
                echo"WELCOME TO THE JUNGLE " . $logado . "<br/>";
                echo $teste . "<br/>";
            ?>
            </td>
        </tr>
        <tr>
            <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
            <td width="546">CONTEUDO E ICONES AQUI</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#000000"> </td>
        </tr>
        </table>
    </body>
</html>