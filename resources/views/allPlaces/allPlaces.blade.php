<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <div id="carouselExampleFade" class="carousel slide xheader" data-bs-ride="carousel" >
        <div class="carousel-inner position-relative">
          <div class="carousel-item active">
            <img src="../../assets/img/Aswan-Nilme.png" class="d-block w-100 ximg" alt="..." style="height: 85vh;  filter: grayscale(-100%);">
            <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle ">
                <h1>First slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
                <p>representative placeholder</p>
              </div>
            </div>
         
          <div class="carousel-item position-relative">
            <img src="../../assets/img/326296095_923158802206354_7678889729339895082_n.png" class="d-block w-100 ximg" alt="..." style="height: 85vh;">
            <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
                <h1>First slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
                <p>representative placeholder</p>
              </div>
            </div>
          
          <div class="carousel-item position-relative">
            <img src="../../assets/img/6.png" class="d-block w-100 ximg" alt="..." style="height: 85vh;">
            <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
                <h1>First slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
                <p>representative placeholder</p>
              </div>
            </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <div class="btn  p-1" >
          <span class="carousel-control-prev-icon p-4 rounded-1" aria-hidden="true"  style="background-color: rgba(250, 200, 51, 0.884);"></span>
          <span class="visually-hidden">Previous</span>
        </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <div class="btn  p-1" >
          <span class="carousel-control-next-icon p-4 rounded-1" aria-hidden="true"  style="background-color: rgba(250, 200, 51, 0.884);"></span>
          <span class="visually-hidden">Next</span>
            </div>
        </button>
    </div>


<app-placesview></app-placesview>
  


    <div class="demo">
        <h1 style="text-align: center;color: rgba(229, 143, 15, 0.813);margin-bottom:20px;">Places</h1>
        <nav class="pagination-outer" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
         
                <li class="page-item"><a class="page-link" href="#">nile</a></li>
                <li class="page-item"><a class="page-link" href="#">inDoor</a></li>
                <li class="page-item active"><a class="page-link" href="#">places</a></li>
                <li class="page-item"><a class="page-link" href="#">outDoor</a></li>
                <li class="page-item"><a class="page-link" href="#">safary</a></li>
                <li class="page-item">
                 
                </li>
            </ul>
        </nav>
    </div>


    <div class="container">
        <div class="row g-5" style="margin-top: 1rem;" >
          <div class="col-lg-3  col-sm-6 col-12 rounded"  *ngFor="let places of placesList ;" >  
                  <app-allplacescard [places]="places"></app-allplacescard>
        </div>
    
        </div>
      </div>

   

    
    
    

</body>
</html>





