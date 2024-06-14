<?php
// Retrieve the username from the URL parameter
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';

require_once '/home/runner/cosc-4806-3/app/views/templates/header.php';
?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Me</h1>
                <p>My name is Troy Johnson.</p>
                <p>Student ID: 219-632-800</p>
            </div>
        </div>
    </div>
</div>

<?php require_once '/home/runner/cosc-4806-3/app/views/templates/footer.php'; ?>
