
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('./assets/CSS/Cards/BudgetCustom.css')}}" rel="stylesheet" >
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title> Customize Budget</title>
</head>
<body>
<section>
    <div class="comtainer m-5">
 
      <div class="booking-form">
        <form>
          <div class="form-group">
            <span class="form-label">Your Budget</span>
            <input class="form-control" type="text" placeholder="Enter Your Budget">
          </div>
          <!-- Check In/Out  -->
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <span class="form-label">Check In</span>
                <input class="form-control" type="date" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <span class="form-label">Check out</span>
                <input class="form-control" type="date" required>
              </div>
            </div>
          </div>
          <!-- Rooms & n.People -->
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <span class="form-label">Rooms</span>
                <select class="form-control">
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
                <span class="form-label">Adults</span>
                <select class="form-control">
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
                <select class="form-control">
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
          
        </form>

        <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- <button class=" m-3" routerLink="/custo_hotel">Confirm</button> -->
          <button class="btn submit-btn m-3" [routerLink]="['/customize/hotel']">Confirm</button>
          
        </div>
        <!-- <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
         <input type="button"> <a  class="submit-btn m-3" routerLink="/custo_hotel">Confirm</a>
        </div> -->
      </div>
    </div>
  </section>

</body>
</html>