<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create an Account</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-auto">
            <form action="/create/verify" method="post">
                <fieldset>
                    <input type="hidden" name="action" value="create"> <!-- Hidden input field for action -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required type="password" class="form-control" name="password">
                    </div>
                    <!-- Add more registration fields here if needed -->
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button>
                </fieldset>
            </form>
        </div>
    </div>


<?php require_once 'app/views/templates/footer.php' ?>
