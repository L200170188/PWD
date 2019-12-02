<?php
    session_start();
    echo "Anda berhasil login sebagai ".$_SESSION['username']." dan terdaftar sebagai ".$_SESSION['status'];
?>
<br>
<h1>Hai Member</h1>
Silahkan logout dengan menekan link <a href="Logout.php"> logout </a>