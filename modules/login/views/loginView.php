<div class="login-container">
          <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title">
                        <span id="login"><?= $config['prevod']['login']["{$lng}"] ?> </span> <br>
                        <div style="margin: auto; width: 40%"> 
                            <a data-lng="rs" id="sr" title="SR" href="<?=_WEB_PATH?>languages/loginLanguage/rs"><span class="flag-icon flag-icon-rs"></span></a> 
                            <a data-lng="gb" id="en" title="EN" href="<?=_WEB_PATH?>languages/loginLanguage/gb"><span class="flag-icon flag-icon-gb"></span></a>
                            <a data-lng="de" id="en" title="DE" href="<?=_WEB_PATH?>languages/loginLanguage/de"><span class="flag-icon flag-icon-de"></span></a>
                            <a data-lng="fr" id="en" title="FR" href="<?=_WEB_PATH?>languages/loginLanguage/fr"><span class="flag-icon flag-icon-fr"></span></a>
                        </div>
                    </div>
                    <form action="/repozaframework/dashboard/login" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="<?= $config['prevod']['email']["{$lng}"]?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="<?= $config['prevod']['password']["{$lng}"]?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block"><?= $config['prevod']['forgot_password']["{$lng}"] ?></a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block"><?= $config['prevod']['login_button']["{$lng}"] ?></button>
                        </div>
                    </div>
                    <div class="login-or"><?= $config['prevod']['or']["{$lng}"] ?></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        <?= $config['prevod']['dont_have_account']["{$lng}"] ?> <a href="#"><?= $config['prevod']['create_account']["{$lng}"] ?></a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?= date("Y"); ?> DrGym
                    </div>
                    <div class="pull-right">
                        <a href="#"><?= $config['prevod']['about']["{$lng}"] ?></a> |
                        <a href="#"><?= $config['prevod']['privacy']["{$lng}"] ?></a> |
                        <a href="#"><?= $config['prevod']['contact_us']["{$lng}"] ?></a>
                    </div>
                </div>
            </div>
        </div>
