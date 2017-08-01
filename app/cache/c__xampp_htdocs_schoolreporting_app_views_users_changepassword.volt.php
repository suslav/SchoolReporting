<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?= $this->getContent() ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
    <div class="col-md-2"></div>
<div class="col-md-6">
                        <div class="panel panel-primary">
                        <div class="panel-heading">Change Password</div>
                        <div class="panel-body">
                            <?= $this->tag->form(['users/ChangePassword', 'id' => 'ChangePasswordForm', 'onbeforesubmit' => 'return false']) ?>
                                    <div class="clearfix">
                                        <label for="NewPassword">NewPassword</label>
                                        <div class="input">
                                            <?= $this->tag->passwordField(['NewPassword', 'size' => '30', 'class' => 'span6']) ?>
                                            <div class="alert" id="NewPassword_alert">
                                                <strong>Warning!</strong> Please enter New Password
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <label for="ConfirmPassword">Confirm Password</label>
                                        <div class="input">
                                            <?= $this->tag->passwordField(['ConfirmPassword', 'size' => '30', 'class' => 'span6']) ?>
                                            <div class="alert" id="ConfirmPassword_alert">
                                                <strong>Warning!</strong> The password does not match
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    &nbsp;
                                    </div>
                                    <div class="clearfix">
                                        <input type="button" value="ChangePassword" class="btn btn-primary btn-large btn-primary" onclick="ChangePassword.validate()">
                                    </div>
                                </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>