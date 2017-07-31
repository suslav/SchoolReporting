<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h2>Log In</h2>
        </div>
        <?= $this->tag->form(['users/start', 'role' => 'form']) ?>
            <fieldset>
                <div class="form-group">
                    <label for="email">Username/Email</label>
                    <div class="controls">
                        <?= $this->tag->textField(['UserName', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="controls">
                        <?= $this->tag->passwordField(['Password', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= $this->tag->submitButton(['Login', 'class' => 'btn btn-primary btn-large']) ?>
                </div>
            </fieldset>
        </form>
    </div> 
</div>
