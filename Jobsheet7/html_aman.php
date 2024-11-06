<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="html_aman.php" method="post">
        <label for="keyword">Nama : </label><br>
        <input type="text" name="keyword"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email">
        <input type="submit" value="Search">
    </form>
    <?php
        if (isset($_POST['keyword'])) {
            $input = $_POST['keyword'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Input yang aman : " .$input . "<br>";
        } else {
            echo "Tidak ada data yang aman. <br>";
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email Valid " . $email;
            } else {
                echo " Email Tidak Valid " . $email;
            }
        } else {
           echo "Email belum diisi";
        }
    ?>
</body>
</html>