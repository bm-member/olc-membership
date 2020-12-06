<?php 

require_once 'init.php';

if(isset($_SESSION['auth'])) {
    redirect('home');
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'Mg Mg' && $password === '123') {
        $_SESSION['auth'] = [ 'username' => $username ];
        $_SESSION['success_message'] = 'Login Success';
        redirect('home');
        $_SESSION['test'] = 'This is testing message.';
    } else {
        $_SESSION['error_message'] = "Username or password is incorrect.";
    }
} 

?>

<p><?php flashMessage('error_message'); ?></p>
<p><?php flashMessage('success_message'); ?></p>

<form method="POST">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password">
    <button type="submit">Login</button>
</form>
