<?php
session_start();

session_unset();

session_destroy();

echo  "<script>
alert('session deleted successfully.');
window.location.href = 'auth.php'; // Redirect back to login page
</script>";
?>