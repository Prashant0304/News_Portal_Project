<?php
session_start();
unset($_SESSION["customer"]);
?>
<script>
alert("Logout..");
window.location="index.php"
</script>
