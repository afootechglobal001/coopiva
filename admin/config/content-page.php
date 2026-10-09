<?php if($page=='login'){?>
    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
		<h1> Welcome <span>Back!</span></h1>
		<p>Sign in to access the <?php echo $appName ?> Admin Portal and manage your projects, operations, and company resources.</p>

		<div class="inner-form" id="viewLogin">
			<div class="text_field_container" id="userName_container">
				<script>
					textField({
						id: 'userName',
						title: 'Email Address'
					});
				</script>
			</div>

			<div class="text_field_container" id="password_container">
				<script>
					textField({
						id: 'password',
						title: 'Password',
						type: 'password'
					});
				</script>
			</div>

			<div class="forgot-pass-container">
				<div class="checkbox-container">
					<input type="checkbox" id="rememberMe">
					<label for="rememberMe">Remember Me</label>
				</div>

				<div class="forgot-container">
					<span onclick="_nextAdminLoginPage({page: 'forgetPassword'});">Forgot Password?</span>
				</div>
			</div>

			<div class="btn-div">
				<button class="btn" id="submitBtn" title="Log In" onclick="_confirmLogin();">Log In <i class="bi-arrow-right"></i></button>
			</div>
		</div>
    </div>
<?php }?>