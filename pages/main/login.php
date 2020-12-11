<div class="login-overlay">
    <div class="center-box login-form">
        <div class="mb-3">
            <span class="guitar-icon">
                <img src="../images/electric-guitar.svg">
                <div><h3>Guitar(t)ists</h3></div>
            </span>
        </div>

        <form method="POST" name="frmLogin" onsubmit="return false;">
            <div class="mb-3">
                <label for="email" class="form-label">Your email address</label>
                <input type="email" class="form-control" name="email" id="email" required />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>

            <input type="hidden" value="login" name="token" />

            <div class="mb-3">
                <input type="submit" class="btn btn-dark" value="Login" />
            </div>
        </form>

        <div id="login-message"></div>
    </div>
</div>

<script src="js/partials/login.js"></script>