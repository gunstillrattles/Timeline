<?php
    require_once 'authorization.php';
    $query = $connection->prepare("select * from authorization");
    $query->execute();
    $result = $query->fetchAll();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['login']) && isset($_POST['password'])){
            foreach ($result as $l) {
                if($l['login'] == $_POST['login'] && $l['password'] == $_POST['password']){
                            session_start();
                            $_SESSION['id'] = $l['id'];
                            $_SESSION['roleId'] = $l['roleId'];
                            $_SESSION['login'] = $l['login'];
                            $_SESSION['password'] = $l['password'];
                            $_SESSION['name'] = $l['name'];
                            $_SESSION['surname'] = $l['surname'];
                            setcookie('login', $_POST['login'], time() + 10000);
                            setcookie('password', $_POST['password'], time() + 10000);
                            header('location:infopage.php');
                        }
                    }
                    echo 'Login <b>'. $_POST['login'] .'</b> or Password <b>'. $_POST['password'] .'</b> not found!';
                }
            }
?>