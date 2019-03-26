
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
			<div id="captura-error">
			
			</div>
		
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="login" action="<?php echo base_url('login/ingresar'); ?>" method="POST" tag="<?php echo base_url(); ?>">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="clave" name="clave" class="form-control" placeholder="Password" required>
				
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
				
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste tu clave?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
	
	<script src="<?php echo base_url('assets/js/login.js');  ?>"></script>
	
	
	