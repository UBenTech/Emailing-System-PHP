<?php
require_once '../includes/auth.php';

if (logout_user()) {
    redirect('../public/index.php');
} else {
    echo "Logout failed";
}
?>
