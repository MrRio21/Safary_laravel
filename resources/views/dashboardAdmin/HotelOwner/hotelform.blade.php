@extends('dashboardAdmin.dashboardViewAdmin')

@section('dashbourdAdmon')
    

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel="stylesheet" href="./assets/css/userSignning.css">
	<script src="./assets/js/jquery-3.6.1.min.js"></script>

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
			<form action="{{route('hotelOwner.store')}}" class="form" id="form1" method="post" enctype="multipart/form-data">
				@csrf
                <h2 class="form__title">Sign Up</h2>
				{{-- <div class="profImg"> <label for="files">
						<img src="./assets/imgs/profImg.png" alt="">


						<input type="file" id="files" style="visibility:hidden;"
							accept="image/png, image/gif, image/jpeg" name ="image"/>
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
				<input type="text" placeholder="Commercial Registration Number" name="commercial_reg_No" class="input" required />
				<button type="submit" class="btn">Explore Aswan with US</button>
				<a href="#" class="link" id="signIn">Already a user </a>
			</form>
		</div>

	</div>
</body>
<script src="./assets/js/signning.js"></script>

</html>

@endsection