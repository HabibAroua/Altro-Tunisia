<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-3 col-sm-xs-12">
                <form class="form-signin" method="POST" action="">
                    <center>
                        <img class="mb-4" src="http://localhost/SiteWebCommercial/Public/picture/AltroTunisia.png" alt="" width="72" height="72">
                    </center>
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_login">
                         Sign in
                    </button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-xs-12">
                <img src="picture/login.png" />
            </div>
        </div>
    </div>
</div>
</div>
<?php
    if(isset($_POST['bt_login']))
	{
		
	}
?>