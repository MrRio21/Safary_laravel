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
                  <td>Name</td>
                  <td>image</td>
                  <td>type</td>
                  <td>license</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              @foreach ($allVehicle as $Vehicle)
           <tr>
             <td>{{$Vehicle->driver_id->users['name']}}</td>
             <td><img src="{{ asset('img/'.$Vehicle->image) }}" alt="" width="75px">
           </td>
             <td>{{$Vehicle->type}}</td>
             <td>{{$Vehicle->license}}</td>
          
          
             <td>
              
             <form method="POST" action="{{route('VehiclleDash.destroy'),['Id'=>$order->id]}}" accept-charset="UTF-8" style="display:inline">
             @crsf
               @method('delete');
                 <button type="submit" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Confirm delete?')">
                 <i class="fa fa-trash-o" aria-hidden="true"></i>
                  Delete
                 </button>
             </form>
       
             </td>
           </tr>

           @endfor
              </tbody>
             
            </table>
          </div>
        </div>


</body>
</html>