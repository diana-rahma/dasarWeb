<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usn = $_POST["usn"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // validasi usn
    if (empty($usn)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (empty($errors)) {
        foreach ($errors as $error){
            echo $error . "<br>";
        }
    } else { 
        header("Location: index.php");
        exit();
    }
}

?>