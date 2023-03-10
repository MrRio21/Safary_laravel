
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customize Budget</title>
</head>
<body>
<section>
      @auth
        <form action="{{ route("logout") }}" method="POST" style="    margin-top: 0px;
        margin-left: 0px;
        display:inline;
        margin-right: 0px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        padding-right: 0px;
        padding-left: 0px;
        padding-top: 0px;
        width: 30px;">
            @csrf
     <button type="submit" style="box-shadow: none;
     border: none;
     color: white;
     background: border-box;
     /* font-size: xx-large; */
     padding-left: 0px;
     padding-top: 0px;
     padding-bottom: 0px;
     padding-right: 0px;
     width: 124px;">Log out</button>
    </form>
    {{-- {{dd(Auth::user())}} --}}
    <div class="container m-5">

      <div class="booking-form">
        <form action="{{route('MUT.store')}}" method="POST">
         @csrf
            <div class="form-group">
            <span class="form-label">Your Budget</span>
            <input class="form-control" type="text" placeholder="Enter Your Budget" name="budget">
            <input class="form-control" type="text" placeholder="the Percentage of your budget you want to give to Book a room " name="budget">
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
    </div>

    </div>
  </section>

</body>
</html>
