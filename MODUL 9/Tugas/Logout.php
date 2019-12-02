<?php
    session_start();
    session_destroy();
?>
<script>
    alert('Berhasil Logout');
    document.location = 'Login.php';
</script>