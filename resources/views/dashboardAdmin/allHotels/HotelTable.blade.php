<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1 class="p-relative">Customer</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Customers</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                    <td>hotel_owner_id</td>
                    <td>hotel_owner_name</td>
                <td>cover_img</td>
                  <td>hotelName</td>
                  <td>address </td>
                  <td>type</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              @foreach ($allHotels as $Hotel)
           <tr>
           <td>{{$Hotel->id}}</td>
             <td>{{$Hotel->Hotel->hotel_owner_id->users['name']}}</td>
             <td><img src="{{ asset('img/'.$Hotel->cover_img) }}" alt="" width="75px">
           </td>
           <td>{{$Hotel->name}}</td>
             <td>{{$Hotel->address}}</td>
             <td>{{$Hotel->type}}</td>
          
          
             <td>
              
             <form method="POST" action="{{route('HotellDash.destroy'),['ID'=>$Hotel->id]}}" accept-charset="UTF-8" style="display:inline">
             @crsf
               @method('delete');
                 <button type="submit" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Confirm delete?')">
                 <i class="fa fa-trash-o" aria-hidden="true"></i>
                  Delete
                 </button>
             </form>
       
             </td>
           </tr>

           @endforeach
              </tbody>
             
            </table>
          </div>
        </div>

</body>
</html>