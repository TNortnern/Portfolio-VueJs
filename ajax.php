 <?php
 include "./database/database.php";
    $email = "";
    $name = "";
    $number = "";
    $message = "";
    if (isset($_POST['sendmessage'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $message = $_POST['message'];
    }

    echo "
    Info: <br>
    email: $email<br>
    name: $name<br>
    number: $number<br>
    message = $message
    ";
    receieveMessage();
    ?>