<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
    <script type="text/javascript" href="{{ asset('JS/login.js') }}" defer></script>
    
</head>
<body>
    <header></header>
    <section class="container" id="container">
		<div class="form-container sign-up-container" id="Sign-Up">
			<form action="#" id="signup">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fa-brands fa-youtube"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" placeholder="Email"/>
				<input type="password" placeholder="Password" />
				<span><i class="fa-solid fa-eye-slash"></i></span>
				<input type="password" placeholder="Re-Password" />
				<span><i class="fa-solid fa-eye-slash"></i></span>
				<ul class="checklist hiden">
					<li><i class="fa-solid fa-x"></i> Uppercase Letter</li>
					<li><i class="fa-solid fa-x"></i> Numbers</li>
					<li><i class="fa-solid fa-x"></i> 8 - 20 Characters</li>
					<li>incorrect Re-Password</li>
				</ul>
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container" id="Sign-In">
			<form action="#" id="signin">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fa-brands fa-youtube"></i></a>
				</div>
				<span>or use your account</span>
				<input type="text" placeholder="Email"/>
				<input type="password" placeholder="Password"/>
				<span ><i class="fa-solid fa-eye-slash"></i></span>
				<input type="checkbox" name="checkbox" id="checkbox" value="lsRememberMe">
				<label for="checkbox">Remember Me</label>
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
    </section>
    <footer></footer>
</body>
</html>