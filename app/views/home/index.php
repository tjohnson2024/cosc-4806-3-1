<?php
// Retrieve the username from the URL parameter
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';

require_once '/home/runner/cosc-4806-3/app/views/templates/header.php';
?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                 <?php if (!empty($username)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Welcome, <?= $username; ?>!</p>
                        </div>
                    </div>
                    <?php endif; ?>
                <ul>
                    <li><a href="/app/views/login/index.php">Login</a></li>
                    <li><a href="/app/views/create/index.php">Register</a></li>
                </ul>
                <p class="lead"><?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>
    <!-- Display the username if it's set -->
</div>
<?php require_once '/home/runner/cosc-4806-3/app/views/templates/footer.php'; ?>
