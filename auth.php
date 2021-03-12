<?php
$login = isset($_GET['login']) ? true: false;
require_once './includes/view/header.php';
print_header('login');


if($login)
{
    $action = 'login.php';
    $head = 'Welcome';
    $button = 'Login';
    $extra = 'New to the website?';
    $re_pwd = false;
} else {
    $action = 'signup.php';
    $head = 'Create an Account';
    $button = 'Signup';
    $extra = 'Have an account?';
    $re_pwd = true;
}
?>

<section class="d-flex h-75 my-auto">
<form method="POST" action="<?= $action?>"class="w-md-5 m-auto p-2">
    <h3 class="text-center text-uppercase mb-5"><?= $head?></h3>
    <input type="email" name="" id="" class="form-control mb-5 py-2 bg-light border-start-0 border-end-0 border-top-0 rounded-0 border-bottom" placeholder="Email" required>
    <input
        type="password" name="" id="" placeholder="Password"
        class="form-control mb-5 py-2 bg-light border-start-0 border-end-0 border-top-0 rounded-0 border-bottom" required>
        
    <?php
    if($re_pwd) {
        echo <<<_REPWD
        <input
        type="password" name="" id="" placeholder="Password"
        class="form-control mb-5 py-2 bg-light border-start-0 border-end-0 border-top-0 rounded-0 border-bottom" required>
_REPWD;
    }
    ?>
        <div class="d-flex justify-content-between align-items-baseline">
        <button type="submit"
        class="btn btn-primary w-50 py-2"><?= $button?></button>
        <a href="signup.php" class="form-text"><?= $extra?></a>
        </div>
    </form>
    </section>
</body>
</html>