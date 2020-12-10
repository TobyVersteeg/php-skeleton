<div class="overlay">
    <div class="center-box login-form">
        <div class="alert alert-danger" id="login-message" role="alert"></div>

        <h3>Triple G</h3>
        <form method="POST" name="frmLogin" onsubmit="return false;">
            <div class="mb-3">
                <img src="images/lock.svg" width="5%" /> Please log in
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your email address</label>
                <input type="email" class="form-control" name="email" id="email" />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" />
            </div>

            <input type="hidden" value="login" name="token" />

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Login" />
            </div>
        </form>
    </div>
</div>

<script src="js/partials/login.js"></script>