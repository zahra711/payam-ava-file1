<?php
include_once 'db.php';
if(isset($_POST['emaillogin']) && isset($_POST['passwordlogin']))
{
    if(!empty($_POST['emaillogin']) && !empty($_POST['passwordlogin']))
    {
        $email=$_POST['emaillogin'];
        $password=$_POST['emaillogin'];        
        global $pdo;
        $result=$pdo->prepare("select * from users where email=:email and password=:password");
        $result->bindvalue(':email',$email);
        $result->bindvalue(':password',md5($password));
        $result->execute();
        $row=$result->fetchAll(PDO::FETCH_OBJ);
        session_start();
        $_SESSION['loginSSID']='logined';
        echo 'logind successfuly'; //or redirect to another page       
        exit();        
    }
}
else{
    echo "please fill all of them ";
}



?>