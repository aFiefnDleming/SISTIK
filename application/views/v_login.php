<h3>Login SISTIK</h3>

<?php if(!empty($this->session->flashdata('error'))) { ?>
<div class="alert alert-danger mdl-shadow--2dp">
    <?= $this->session->flashdata('error') ?>
</div>
<?php } ?>

<form action="<?php echo base_url();?>C_login/auth" method="post">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" id="login" name="username"/>
                <label class="mdl-textfield__label" for="login">Username</label>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="password" name="password"/>
                <label class="mdl-textfield__label" for="password">Password</label>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--2-col">
            <button type="submit" name="submit" class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white">Login</button>
        </div>
    </div>
</form>
