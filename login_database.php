<?php
$username = $password = $err = '';

$logout = $_GET['logout'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['un'];
    $password = $_POST['pw'];
    $fail = true;
    if (isset($username, $password) && !empty($username) && !empty($password)) {
        $conn = new mysqli('localhost', 'root', 'root', 'gamescreen');
        $query = 'SELECT * FROM login;';
        $res = $conn->query($query);

        while ($row = $res->fetch_assoc()){
            if($row['username'] === $username && $row['password'] === $password){
                session_start();
                session_destroy();
                session_start();
                $_SESSION['name'] = ucfirst($username);
                $fail = false;
                header("Location: index.php");
            }
        }
        $conn->close();
        if ($fail) {
            header("Location: login.php?err=true");
        }
    }

} else if(isset($logout) && !empty($logout)){
    if($logout){
        session_start();
        session_destroy();
        header("Location: login.php");
    }
}