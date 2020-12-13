<?php
include_once 'db.php';
//authentication
if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['username']))
{
    if(!empty($_POST['name'])&& !empty($_POST['lastname'])&& !empty($_POST['email'])&& !empty($_POST['password'])&& !empty($_POST['username']))
    {     
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $username=$_POST['username'];  
        //insert into DB
        global $pdo;
        $sql='insert into users set name=:name,lastname=:lastname,email=:email,password=:password,username=:username';
        $s=$pdo->prepare($sql);
        $s->bindvalue(':name',$name);
        $s->bindvalue(':lastname',$lastname);
        $s->bindvalue(':email',$email);
        $s->bindvalue(':password',md5($password));
        $s->bindvalue(':username',$username);
        $s->execute();
        echo 'registeration is successfuly';
    }
}
else{
    echo "please fill all of them ";
}



?>