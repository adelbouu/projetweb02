<?php

function invalidUni($username)  {

    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {

    $result=true; }

    else {
        $result=false;
    }
    return $result; 
}

function invalidEmail($email) {

    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $result=true; }

    else {
        $result=false;
    }
    return $result; 
}

function pwdMatch($pwd,$pwdRepeat)  {

    $result;
    if($pwd !== $pwdRepeat) {

    $result=true; }

    else {
        $result=false;
    }
    return $result; 
}

fonction uidExists($conn,$username,$email) {
    $sql = "SELECT * FROM users WHERE usersUni = ? OR usersEmail = ?;"
    $stmt = mysql_stmt_init($conn);

    if(mysql_stmt_prepare($stmt, $sql))  {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
}

mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysql_stmt_execute($stmt);


$resultData = mysqli_stmt_get_result($stmt);

if(mysqli_fetch_assoc($resultData)) {
    return $row;
}
else{
    $result =false;
    return $result;
}

mysql_stmt_close($stmt);


fonction crateUser($conn,$name,$email,$username,$pwd) {
    $sql = "INSERT INTO users(usersName, usersEmail, usersUni) VALUES() ;"
    $stmt = mysql_stmt_init($conn);

    if(mysql_stmt_prepare($stmt, $sql))  {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
}

mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysql_stmt_execute($stmt);


$resultData = mysqli_stmt_get_result($stmt);

if(mysqli_fetch_assoc($resultData)) {
    return $row;
}
else{
    $result =false;
    return $result;
}

mysql_stmt_close($stmt);



