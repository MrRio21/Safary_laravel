<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel="stylesheet" href="{{asset('./assets/css/userSignning.css')}}">
	<script src="./assets/js/jquery-3.6.1.min.js"></script>

</head>

<body>
    @auth
    <form action="{{ route('logout') }}" method="POST" >
        @csrf
 <button type="submit" >Log out</button>
</form>
@endauth

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
			<form action="{{route('driver.store')}}" class="form" id="form1" method="post" enctype="multipart/form-data">
				@csrf
                <h2 class="form__title">Sign Up</h2>
				{{-- <div class="profImg"> <label for="files">
                    <img src="./assets/imgs/profImg.png" alt="">

                    
						<input type="file" id="files" style="visibility:hidden;"
							accept="image/png, image/gif, image/jpeg" />
                        </label>
				</div> --}}
                <input type="file" accept="image/png, image/gif, image/jpeg" name ="image" >

				<input type="text" placeholder="Your Name" name="name" class="input" required />
				<div>
					<span>Male<input class="specifyColor" type="radio" name="gender" id="male" value="male"
							checked></span>
                            <span>Female<input class="specifyColor" type="radio" name="gender" id="female"
                                value="female"></span>
                            </div>
                            <input type="email" placeholder="Email" name="email" class="input" required />
                            <input type="phone" placeholder="Phone" name="phone" class="input" required />
                            
                            <input type="password" placeholder="Password" name="password" class="input" required />
                            <input type="text" placeholder="License" name="license" class="input" required />
                            <input type="text" class="input" name="role" value="driver" hidden>
				<button type="submit" class="btn">Sign Up</button>
				<a href="#" class="link" id="signIn">Already a user </a>
			</form>
		</div>

		<!-- Sign In -->
		<div class="container__form container--signin">
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
		<div class="container__overlay">

			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<img src="{{asset("./assets/imgs/driver.jpg")}}" alt="">


				</div>

				<div class="overlay__panel overlay--right">

					<img src="{{asset("./assets/imgs/driver.jpg")}}" alt="">

				</div>
			</div>
		</div>
	</div>
</body>
<script src="{{asset("./assets/js/signning.js")}}"></script>

</html>
