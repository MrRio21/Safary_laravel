<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("./assets/css/userSignning.css")}}">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	<div class="container right-panel-active">
		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form action="{{route('tourguide.store')}}" class="form" id="form1" method="post" enctype="multipart/form-data">
				@csrf
                <h2 class="form__title">Sign Up</h2>
				<!-- IMG -->
				<div class="profImg"> <label for="files">
						<img src="./assets/imgs/profImg.png" alt="">
						<input type="file" id="files" style="visibility:hidden;"
							accept="image/png, image/gif, image/jpeg" />
					</label>
				</div>
                <!-- <input type="file" name="image"> -->
				<!-- NAME -->
				<div>
					<input type="text" placeholder="Your Name" name="name" class="input"/>
					@error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                    @enderror
				</div>
				<!-- GENDER -->
				<div>
                    Gender :
					<span>Male<input class="specifyColor" type="radio" name="gender" id="male" value="male"
							checked></span>
					<span>Female<input class="specifyColor" type="radio" name="gender" id="female"
							value="female"></span>
				</div>
				<!-- EMAIL -->
				<div>
					<input type="email" placeholder="Email" name="email" class="input"/>
					@error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
				</div>
				<!-- PHONE -->
				<div>
					<input type="phone" placeholder="Phone" name="phone" class="input"/>
					@error('phone')
                        <span class="text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
				</div>
				<!-- PASSWORD -->
				<div>
					<input type="password" placeholder="Password" name="password" class="input"/>
					@error('Password')
                        <span class="text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
				</div>
				<!-- syndicate_No -->
				<div>
					<input type="text" placeholder="syndicate_No" name="syndicate_No" class="input"/>
					@error('syndicate_No')
                        <span class="text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
				</div>
				<!-- LANGUAGE -->
				<div class="lang">
					<p>Languages :</p>
                    <span>
                        Arabic
                        <input class="specifyColor" type="checkbox" name="arabic" id="arabic" value="Arabic"
                            TourgideRegForm="language">
                    </span>
                    <span>
                        English
                        <input class="specifyColor" type="checkbox" name="eng" id="eng" value="English"
                            TourgideRegForm="language">
                    </span>
                    <span>
                        Spanish
                        <input class="specifyColor" type="checkbox" name="spanish" id="spanish" value="spanish"
                            TourgideRegForm="language">
                    </span>
                    <span>
                        Italian
                        <input class="specifyColor" type="checkbox" name="italien" id="italien" value="Italian"
                            TourgideRegForm="language">
                    </span>
					<span>
						French
                        <input class="specifyColor" type="checkbox" name="italien" id="italien" value="Italian"
                            TourgideRegForm="language">
                    </span>
					<span>
						German
                        <input class="specifyColor" type="checkbox" name="italien" id="italien" value="Italian"
                            TourgideRegForm="language">
                    </span>
                </div>
				<!-- PAY -->
				<div>
					<input type="text" placeholder="the price you want for a day " name="price_per_day" class="input"/>
					@error('syndicate_No')
                        <span class="text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
				</div>
				<input type="text" class="input" name="role" value="tourguide" hidden>

				<button type="submit" class="btn">Sign Up</button>
                <a href="#login" class="link" id="signIn">Already a user </a>
                </form>
		</div>

		<!-- Sign In -->
		<div class="container__form container--signin" id="login">
			<form action="{{route('login.store')}}" class="form" id="form2" method="POST">
                @csrf
				<h2 class="form__title">Sign In</h2>
				<input type="email" placeholder="Email" name="email" class="input" required />
				<input type="password" placeholder="Password" name="password" class="input" required />
				<a href="#" class="link">Forgot your password?</a>
				<button type="submit" class="btn">Sign In</button>
				<a href="#" class="link" id="signUp">Don't have an account Yet?</a>
			</form>
		</div>

		<!-- Overlay -->
		<!-- <div class="container__overlay">

			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<img src="{{asset("./assets/imgs/tourG.jpg")}}" alt="">
				</div>
				<div class="overlay__panel overlay--right">
				<img src="{{asset("./assets/imgs/MrstourG.jpg")}}" alt="">
				</div>
			</div>
		</div> -->
	</div>
</body>
<script src="{{asset("./assets/js/signning.js")}}"></script>

</html>
