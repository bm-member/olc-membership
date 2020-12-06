<?php 

require_once 'init.php';

if(!isset($_SESSION['auth'])) {
    redirect('login');
}

?>

<p><?php flashMessage('success_message'); ?></p>

<h1>Welcome  <?php echo $_SESSION['auth']['username'] ?? ''; ?> </h1>

<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
