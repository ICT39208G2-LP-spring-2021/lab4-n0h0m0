<?php
$passwordErr = "";
$emailErr = "";
$Err = "";



    require_once 'valid.php';


?>

<div id="loginForm" class="container w-75 m-auto visually-hidden" style="text-align: center">
    <form class="container w-25 mt-5 border rounded border-3 border-dark bg-secondary" method="post">
        <div class="mb-3" style="text-align: center">
            <?php echo "<b><p class='text-danger'>$emailErr</p></b>"?>
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3" style="text-align: center">
            <?php echo "<b><p class='text-danger'>$passwordErr</p> </b>" ?>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div style="text-align: center">
            <p>
                <button id="loginSubmit" type="submit" class="btn btn-primary">Login</button>
            </p>
        </div>
    </form>
</div>