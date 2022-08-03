<?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] != null) {
    unset($_SESSION['email']);
    echo "<SCRIPT> //not showing me this
            alert('Logout Success')
            window.location.replace('http://localhost/Recruitment-Manager/index.php');
            </SCRIPT>";
}
