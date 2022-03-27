<?php
    session_start();
    
    if(isset($_POST['Login'])){
        
        // Mengecek Username dan Pass

        $_SESSION["loginMsg"] = "";

        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $_SESSION['username']) && ($_POST['passwordLogin'] == $_SESSION['password1'])){
                header("Location: home.php");
            }else{
                
                $_SESSION["loginMsg"] .= "Username atau Password Anda Salah!<br>";
                header("Location: login.php");
            }
            
        }
    }

?>