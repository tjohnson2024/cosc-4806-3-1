<?php
// Retrieve the username from the URL parameter
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';

require_once '/home/runner/cosc-4806-3/app/views/templates/header.php';
?>
<div class="container" style="position:relative; top:50px;">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8"> <!-- Adjusted column width to accommodate content on the left -->
                <?php if (!empty($username)): ?>
                    <div class="row">
                        <div class="col-lg-12" style="text-decoration:underline;">
                            <p>Welcome, <?= $username; ?>!</p>
                        </div>
                    </div>
                <?php endif; ?>
                <div>
                    <h1>Welcome to the home page</h1>
                    <img src="https://t3.ftcdn.net/jpg/02/41/32/08/360_F_241320835_Z2fuURdWsRgtTnkARGQqiorzH8p4fnE5.jpg" width="100" height="100">
                </div>
                <p class="lead"><?= date("F jS, Y"); ?></p>
            </div>
            <div class="col-lg-4"> <!-- Added column for login and register links -->
                <?php if (!empty($username)): ?>
                    <p> <a href="/logout">Click here to logout</a></p>
                <?php else: ?>
                    <ul class="list-inline text-end"> <!-- Positioning login and register links to the right -->
                        <li class="list-inline-item"><a href="/app/views/login/index.php">Login</a></li>
                        <li class="list-inline-item"><a href="/app/views/create/index.php">Register</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once '/home/runner/cosc-4806-3/app/views/templates/footer.php'; ?>
