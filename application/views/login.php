<div class="container" style="margin-left: auto;margin-right: auto;width: 750px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="padding:8px;">
                        <h3 class="panel-title"><?php echo $info;?></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo site_url('main/login');?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="user_login" id="user_login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password">
                                </div>
                               <!-- Change this to a button or input when using this as a form -->

                                <input type="submit" style="text-align:center"class="btn btn-default" value="Login">
                            </fieldset>
                            <div class="danger"><?php echo @$danger;?></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-mo-2"></div>
        </div>
    </div>
