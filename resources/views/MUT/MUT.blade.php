
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customize Budget</title>
     <link rel="stylesheet" href="./assets/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/framework.css" />
    <link rel="stylesheet" href="./assets/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>
<body>
<section>

    {{-- {{dd(Auth::user())}} --}}
    <div class="container m-5">

      <div class="booking-form">
        <form action="{{route('MUT.store')}}" method="POST">
         @csrf
            <div class="form-group">
            <span class="form-label">Your Budget</span>
            <input class="form-control" type="text" placeholder="Enter Your Budget" name="budget"><?php
             $percent=0?>
            <input class="form-control" id="budget" type="text" placeholder="the Percentage of your budget you want to give to Book a room " onkeyup="

                console.log(budget.value);

                console.log( progress.style.width);
                progress.style.width=budget.value /100;
            " name="budget" value={{$percent}}>
            <div class="progress">
  <div id="progress" class="progress-bar" role="progressbar" style="width: {{$percent}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$percent}}%</div>
</div>
          </div>
          <!-- Check In/Out  -->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <span class="form-label">Check In</span>
                <input class="form-control" type="date" name="check_in" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <span class="form-label">Check out</span>
                <input class="form-control" type="date" name="check_out" required>
              </div>
            </div>
          </div>
          <!-- Rooms & n.People -->
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <span class="form-label">Rooms</span>
                <select class="form-control" name="n_of_room[]">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>

                </select>
                <select class="form-control" name="room_type[]">
                  <option value="single">single</option>
                  <option value="double">double</option>
                  <option>triple</option>


                </select>
                <select class="form-control" name="n_of_room[]">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>

                </select>
                <select class="form-control" name="room_type[]">
                  <option value="single">single</option>
                  <option value="double">double</option>
                  <option>triple</option>


                </select>

                <!-- <span class="select-arrow"></span> -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <span class="form-label">Adults</span>
                <select class="form-control" name="n_of_adults">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <!-- <span class="select-arrow"></span> -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <span class="form-label">Children</span>
                <select class="form-control" name="n_of_childeren">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <!-- <span class="select-arrow"></span> -->
              </div>
            </div>
          </div>
          <!-- submit -->
          <!-- <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="submit-btn m-3" routerLink="/custo_hotel">Confirm</button>
          </div> -->


          <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- <button class=" m-3" routerLink="/custo_hotel">Confirm</button> -->
          <button class="btn submit-btn m-3" type="submit" >Confirm</button>

        </div>
        <!-- <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="button"> <a  class="submit-btn m-3" routerLink="/custo_hotel">Confirm</a>
        </div> -->
      </div>
        </form>
             @auth
        <form action="{{ route("logout") }}" method="POST" >
            @csrf
     <button type="submit" >Log out</button>
    </form>
    @endauth
    </div>

    </div>
  </section>
  <script>


        var budget = document.getElementById('budget');
        var pogress = document.getElementById('progress');
        budget.onkeyup = function(){
            {

console.log(budget.value);
console.log(e);
console.log( progress.style.width);
progress.style.width=budget.value /100;
}
        }
        console.log(budget.value);
        console.log(e);
        console.log( progress.style.width);
        progress.style.width=budget.value /100;

  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
