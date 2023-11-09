<html>

<head>
    <title> Please Sign In or Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mastyle.css">


</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://www.instagram.com/" class="social"><img src="img1/instagram.svg"><i class="fab fa-instagram-f"></i></a>
				<a href="https://accounts.google.com/v3/signin/identifier?ifkv=AVQVeyz3uJdZ7tz7JuyiyodWYcYoddcJNj3l69e086ermVkROgFEWxd-3fVJ38gzlNBoJv5uF-YL&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1593971898%3A1697850350997763&theme=glif" class="social"><img src="img1/google.svg"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.linkedin.com/" class="social"><img src="img1/linkedin.svg"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://www.instagram.com/" class="social"><img src="img1/instagram.svg"><i class="fab fa-instagram-f"></i></a>
				<a href="https://accounts.google.com/v3/signin/identifier?ifkv=AVQVeyz3uJdZ7tz7JuyiyodWYcYoddcJNj3l69e086ermVkROgFEWxd-3fVJ38gzlNBoJv5uF-YL&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1593971898%3A1697850350997763&theme=glif" class="social"><img src="img1/google.svg"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.linkedin.com/" class="social"><img src="img1/linkedin.svg"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
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
</div>
  <script  src="./scriptt.js"></script>

</body>

</html>
