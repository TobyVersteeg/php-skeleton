<div class="center-box register-form">
    <div class="alert alert-danger" id="register-message" role="alert"></div>
    <h3>Register an account</h3>
    <form method="POST" onsubmit="return false;" name="frmRegister" class="row g-3">
        <div class="col-md-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
        </div>
        
        <div class="col-md-12 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
        </div>

        <div class="col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="password_2">Repeat password</label>
            <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
        </div>

        <input type="hidden" name="token" value="register">

        <div class="col-md-12 mb-3">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="button" class="btn btn-secondary" id="register-cancel" value="Cancel">
        </div>
    </form>
</div>

<script src="../js/partials/register.js"></script>