<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Reporting</title>

    <?= $this->tag->javascriptInclude('js/jquery-1.12.2.min.js') ?>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('css/Styles.css') ?>


</head>
<body>
<div class="container-fluid">
    
     <div class="row">
        <div class="col-md-12">
            <h1> School Reporting</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-custom navbar-orange" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"
                                        data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="sr-only">Home</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        <?= $this->elements->getMenu() ?>
                        </nav>
                    </div>
                </div>



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

            </div>
        </div>
    </div>
</div>
 <?= $this->tag->javascriptInclude('js/jquery.form.min.js') ?>
<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
 <?= $this->tag->javascriptInclude('js/utils.js') ?>
</body>
</html>
