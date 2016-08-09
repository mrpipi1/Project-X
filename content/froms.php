<form class="form_checkout" action="#" method="post">

    <div class="form-group login_name">
        <input id="login_name" type="text" name="_name" value="" required class="input">
        <span class="highlight"></span>
        <span class="form-bar"></span>
        <label class="label">E-Mail oder Username*</label>
        <span class="error error_login_name">
    </div>

    <div class="form-group" login_password>
        <input id="login_password" type="password" name="password" value="" required class="input">
        <span class="highlight"></span>
        <span class="form-bar"></span>
        <label class="label">Passwort*</label>
        <span class="error error_login_password">
    </div>

    <div class="btn_checkout btn_big-checkout">
        <input type="submit" name="login" value="Einloggen"   class="btn_big-checkout input login_submit">
    </div>
</form>



<style>
.form-group {
    position: relative;
    margin-bottom: 2.75em;
}
.input {
    font-size: 1em;
    display: block;
    width: 100%;
    padding: 10px 10px 10px 5px;
    border: none;
    border-bottom: 1px solid #5a8e7d;
    color: #333;
}
.input:focus {
    outline: none;
}

 .form-group .error {
    font-size: 14px;
    color: #8e0000;
 }

 .form-group .invalid {
     border-color: #8e0000;
 }

 .label {
     font-size: 0.8em;
     font-weight: 300;
     letter-spacing: 0.5px;
     position: absolute;
     top: 10px;
     left: 5px;
     transition: all 0.5s ease;
     pointer-events: none;
     color: #b3b3b3;
 }
</style>
