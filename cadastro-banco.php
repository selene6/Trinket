<?php
 
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect("localhost","root","","trinket");
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
    if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastro.php';</script>";
 
        }else{
            if($logarray == $email){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='cadastro.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (email,senha) VALUES ('$email','$senha')";
                $insert = mysqli_query($connect, $query);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
                }
            }
        }
?>
