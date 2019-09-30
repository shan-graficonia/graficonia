<?php

session_start();

if(isset($_POST['login'])) {
 
    include_once 'db.inc.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

    if(empty($uid) || empty($pwd)) {
        header("Location: ../index.php?Login:empty");
        exit();
}else {
    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
    header("Location: ../index.php?Login:mismatch");
    exit();
}else {
    if($row = mysqli_fetch_assoc($result)){
        // Dehasing the password
    $hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
    if($hashedpwdcheck == false){
    header("Location: ../index.php?Login:error");
    exit();
    }elseif($hashedpwdcheck == true){
        //Login User Here
    $_SESSION['u_id'] = $row['user_id'];
    $_SESSION['first'] = $row['user_first'];
    $_SESSION['u_last'] = $row['user_last'];
    $_SESSION['u_email'] = $row['user_email'];
    $_SESSION['u_uid'] = $row['user_uid'];
    header("Location: ../index.php?Login:Success");
    exit();
    }
    }
}

}
}
else {
    header("Location: ../index.php?Login:error");
    exit();
}