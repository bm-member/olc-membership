<?php

require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();
    $_SESSION['success_message'] = 'Logout Success';
    redirect('login');
} else {
    redirect('home');
}
