<?php
require_once "conexao.php";
session_start();
    if(isset($_POST['enviar'])):
            $email= $_POST['email'];
            $senha= $_POST['senha'];
            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            if(empty($email) or empty($senha)){
                $erros[]="preencha os dados";
                header('location: ../login.php?erro');
                }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $erros[]="Digite um email valido";
                    header('location: ../login.php?erro');
            }else{ 
                $sql="SELECT email FROM users WHERE email = '$email'";
                $resultado= mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0){
                    $sql="SELECT * FROM users WHERE email = '$email' AND senha ='$senha'";
                    $resultado= mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado) == 1){
                        $_SESSION['logado'];
                        header('location: ../teladeinteresses.php');
                    }else{
                        $erros[]="Senha inválida";
                        header('location: ../login.php?erro');
                    }
                }else{
                    $erros[]="Email inexistente";
                    header('location: ../login.php?erro');
                }
            }


    endif;
?>