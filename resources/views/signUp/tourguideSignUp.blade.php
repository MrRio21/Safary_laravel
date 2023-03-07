<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel="stylesheet" href="./assets/css/tourGuideSignning.css">
	<script src="./assets/js/jquery-3.6.1.min.js"></script>

</head>

<body>
	<div class="container right-panel-active">
		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form action="#" class="form" id="form1" method="post" enctype="multipart/form-data">
				<h2 class="form__title">Sign Up</h2>
				<div class="profImg"> <label for="files">
						<img src="./assets/imgs/profImg.png" alt="">


						<input type="file" id="files" style="visibility:hidden;"
							accept="image/png, image/gif, image/jpeg" />
					</label>
				</div>
				<input type="text" placeholder="Your Name" name="userName" class="input" required />
				<div>
                    Gender :
					<span>Male<input class="specifyColor" type="radio" name="gender" id="male" value="male"
							checked></span>
					<span>Female<input class="specifyColor" type="radio" name="gender" id="female"
							value="female"></span>
				</div>


				<input type="email" placeholder="Email" name="email" class="input" required />
				<input type="password" placeholder="Password" name="pass" class="input" required />
				<input type="password" placeholder="License" name="txt" class="input" required />
                <div class="lang">
                    Languages :
                    <span>Arabic<input class="specifyColor" type="checkbox" name="arabic" id="arabic" value="arabic"
                      ></span>
                      <span>English<input class="specifyColor" type="checkbox" name="eng" id="eng" value="eng"
                              ></span>
                      <span>Spanish<input class="specifyColor" type="checkbox" name="spanish" id="spanish"
                              value="spanish"></span>
                              <span>Italian<input class="specifyColor" type="checkbox" name="italien" id="italien" value="italien"
                                  ></span>
                  </div>
				<button type="submit" class="btn">Sign Up</button>
				<a href="#" class="link" id="signIn">Already a user </a>
			</form>
		</div>

		<!-- Sign In -->
		<div class="container__form container--signin">
			<form action="#" class="form" id="form2">
				<h2 class="form__title">Sign In</h2>
				<input type="email" placeholder="Email" name="email" class="input" required />
				<input type="password" placeholder="Password" name="pass" class="input" required />
				<a href="#" class="link">Forgot your password?</a>
				<button class="btn">Sign In</button>
				<a href="#" class="link" id="signUp">Don't have an account Yet?</a>
			</form>
		</div>

		<!-- Overlay -->
		<div class="container__overlay">

			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<img src="./assets/imgs/tourG.jpg" alt="">


				</div>

				<div class="overlay__panel overlay--right">

					<img src="./assets/imgs/MrstourG.jpg" alt="">

				</div>
			</div>
		</div>
	</div>
</body>
<script src="./assets/js/signning.js"></script>

</html>
