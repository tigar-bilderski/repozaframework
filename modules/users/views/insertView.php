
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms Stuff</a></li>
                    <li><a href="#">Form Layout</a></li>
                    <li class="active">One Column</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="" id="users" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-users"></span> <strong>Unos korisnika</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>Ovde mozete ubaciti novog korisnika</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" name="name" class="validate[required] form-control" placeholder="Name"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Surname</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" name="surname" class="validate[required] form-control" placeholder="Suranme"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                                                <input type="email" name="email" class="validate[required,email] form-control" placeholder="Email"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="password" class="validate[required] form-control" placeholder="Password"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Telephone</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-mobile"></span></span>
                                                <input type="text" name="telephone" class="validate[required] form-control" placeholder="Phone"/>
                                            </div>   
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="panel-footer">
                                    <input type="button" onclick="$('#users')[0].reset();" value="Clear Form" class="btn btn-default">                                    
                                    <button class="btn btn-primary pull-right" id="btn_submit">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- Start scripts for this page -->
        <script type='text/javascript' src='<?=_WEB_PATH?>views/js/plugins/validationengine/languages/jquery.validationEngine-sr_Latn.js'></script>
        <script type='text/javascript' src='<?=_WEB_PATH?>views/js/plugins/validationengine/jquery.validationEngine.js'></script>  
        <!-- END scripts for this page -->
    
        <!-- Javascript for insert users -->
        <script>
           $(document).ready(function(){
                $('#users').on('click','#btn_submit',function(e){
                     e.preventDefault();
                     $("#users").validationEngine("updatePromptsPosition"); 
                   var validate = $("#users").validationEngine('validate',{promptPosition : "topRight", scroll: true});
                    if(validate !== false){
                    alertify.confirm("Da li ste sigurni?",
                    function(){
                        request = $.ajax({
                            url: "insertUsers",
                            type: "post",
                            dataType: 'json',
                            data: $('#users').serialize(),
                            success: function(response){
                            console.log(response);
                                if(response.error == false){
                                 $('#users')[0].reset();
                                    alertify.success("Uspestno ste ubacili korisnika.");
                                  }else{
                                    alertify.success("Doslo je do greske prilikom ubacivanja korisnika! Pokusajte ponovo.");
                                  }
                                }   
                            });
                            },
                        function(){
                            alertify.error('Cancel');
                        });
                    }
                });
            });                   
        </script>
    <!-- END OF Javascript for insert users -->  

