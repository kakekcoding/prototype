<?php 
    $title = "Halaman Admin"; 

    session_start();
    require_once "class.user.php";
    $login = new USER();

    if($login->is_loggedin()!="")
    {
        $login->redirect('index.php');
    }

    if(isset($_POST['form-btn']))
    {
        $uname = strip_tags($_POST['txt_uname_email']);
        $umail = strip_tags($_POST['txt_uname_email']);
        $upass = strip_tags($_POST['txt_password']);
            
        if($login->doLogin($uname,$umail,$upass))
        {
            $login->redirect('index.php');
        }
        else
        {
            $error = "Salah memasukkan username atau password";
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- head -->
    <?php require_once '../layouts/partials/admin/head.php'; ?>
</head>
<body>
    <div class="error">
        <?php
            if(isset($error))
            {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> &nbsp; <?php echo $error; ?> !
                </div>
                <?php
            }
        ?>
    </div>
    <?php require_once '../layouts/partials/admin/form-login.php'; ?>
    <!-- js -->
    <?php require_once '../layouts/partials/admin/js-init.html'; ?>
</body>
</html>