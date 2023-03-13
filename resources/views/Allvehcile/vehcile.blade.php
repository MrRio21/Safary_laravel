

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>vechile</title>

<style>
    
.stage{
    height: 350px;
    width: 250px;
    margin-left: auto;
    margin-right: auto;
  }
  .p{
    font-size: 35px;
    text-align: center;
    margin-top: 0;
    cursor: pointer;
    width: 100%;
    background: #e8af29db;
    border-radius: 10px;
    font-family: Century Gothic;
    letter-spacing: 5px;
  }
  .div{
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    width: 200px;
    height: 40px;
    margin-top: 4%;
   transition-duration: 0.2s;
  
  }
  .p:hover{
    background: white;
    color: black;
  }
  .div:nth-child(odd){
    transform: perspective(300px) rotateY(45deg);
    box-shadow: -2px 2px 7px gray;
  }
  .div:nth-child(even){
    transform: perspective(300px) rotateY(-45deg);
      box-shadow: 2px 2px 7px gray;
  }
  .div:hover{
    transform: rotateY(0);
    background: white;
    color: black;
    box-shadow: 0px 0px 0px;
  }

</style>
<link href="{{asset('assets/CSS/Card/vehcile')}}" rel='stylesheet' >
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- fontawsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/asset/img/Aswan-Nilm.jpg" class="d-block w-100" alt="..." style="height: 80vh;">
                <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder">First slide label</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/asset/img/Rr.png" class="d-block w-100" alt="..." style="height: 80vh;">
                <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder">First slide label</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/asset/img/best-desert-safari-dubai-banner3.png" class="d-block w-100" alt="..."
                    style="height: 80vh;">
                <div class="carousel-caption d-none d-md-block    position-absolute top-50 start-50 translate-middle ">
                    <h1 class="fw-bolder">First slide label</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- -------------------------------------------------------------------- -->
    <div class="container m-5">
        <div class="row  g-5">
            <div class="col-md-6 col-sm-12">

                <section class="stage">
                    <div id="home" class="div">
                        <p id="homep" class="p">Hourse</p>
                    </div>
                    <div class="div" id="about">
                        <p class="p">boats</p>
                    </div>
                    <div class="div" id="contact">
                        <p class="p">cars</p>
                    </div>
                    <div class="div" id="gallery">
                        <p class="p">camels</p>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-sm-12  w-25">
                <h1>vehcile in Aswan </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, necessitatibus illo obcaecati sunt sapiente adipisci excepturi reprehenderit ipsam culpa, in itaque velit porro recusandae libero vitae nisi ab deserunt autem.</p>
            </div>
        </div>
    </div>


    <!-- ------------------------------------------------------------ -->


    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <div class="container">
        <div class="row  g-5">
            <div class="col-md-4 col-sm-6">




                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> 


                <div class="box">
                    <img src="../../assets/img/image2.png">
                    <div class="box-content">
                        <h3 class="title"> vehcile. ... </h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>






            </div>
        </div>
    </div>




</body>

</html>