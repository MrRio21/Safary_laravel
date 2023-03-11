<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
        <form method="POST" action="{{route('PlaceeDash.store',['places'=>$places->id])}}"   enctype="multipart/form-data">
            @csrf
            @method("PUT")
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img src="imgs/avatar.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative"> Your Place</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Add PLace </h2>
            <form>
                <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6"  type="text" placeholder="Place Name" name='name' value="{{$places->name}}"/>
                <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6"  type="text" placeholder="price" name='price' value="{{$places->price}}"/>
              
             <select class="form-select bg-eee mb-20 " name='type' Type aria-label="Default select example">
              <option   value="{{$places->type == 'indoor'}}? <?php echo 'selected' ?> : '' " >indoor</option>
              <option   value="{{$places->type == 'Outdoor'}}? <?php echo 'selected' ?>  : '' ">Outdoor</option>
              <option   value="{{$places->type == '3'}}? <?php echo 'selected' ?> : '' ">Triple</option>
            </select>
           
              <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" id="desc" placeholder="Description"  name='description' value="{{$places->description}}"></textarea>

           
           
              <label for="cover_img">Enter Your Cover img </label>
              <input class=" mb-20 p-10  bg-eee rad-6" type="file" id='cover_img' placeholder="Address" name='cover_img' value="Storage/img/{{$places->cover_img}}">

              <label for="image">Enter Your Places Images </label>
              <input class=" mb-20 p-10  bg-eee rad-6" type="file"  id='image' placeholder="Address" multiple 
              accept="image/png, image/jpeg"  name="image" value="Storage/img/{{$places->PlaceImg->image}}">
           

           
             
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
            </form>
          </div>
        </div>
      </div>

      <form>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
