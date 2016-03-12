<!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?=_WEB_PATH?>views/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?=_WEB_PATH?>views/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
       
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=_WEB_PATH?>views/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
<!--        <script type="text/javascript" src="views/js/settings.js"></script>-->
        
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/plugins.js"></script>        
        <script type="text/javascript" src="<?=_WEB_PATH?>views/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>