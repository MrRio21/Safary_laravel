<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4" >

                
                <div class="user_icon">
  
                    {{-- <img [src]=" 'http://localhost:8000/' + Tourguide?.touguide?.image" style="width: 70px;height: 70px; border-radius: 10px;" > --}}
                </div>
                
                <div class="text-center mt-3">

                    <span class="bg-secondary p-1 px-4 rounded text-white">{{ auth()->user()->name }}</span>
                    <h5 class="mt-2 mb-0">{{ auth()->user()->email }}</h5>
                    <span>{{ auth()->user()->gender }}</span>
                    <span>{{ auth()->user()->phone }}</span>
                    <div class="px-4 mt-1">
                        <p class="fonts">{{auth()->user()->TourGuide->price_per_day}}</p>
                    </div>
                    <div class="px-4 mt-1">
                        <p class="fonts">{{auth()->user()->TourGuide->syndicate_No}}</p>
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    <div class="px-4 mt-1">
                        <p class="fonts">{{auth()->user()->TourGuide->bio}}</p>
                    </div>

                <div   *ngFor="let lang of TourguideDashboard ;">
                    <button class="btn btn-primary px-4 ms-3">{{auth()->user()->TourGuide()->TourguideLanguage->language}}</button>
                </div>
                          
                </div>
                
               <!-- Tourguide?.touguide?.id' -->
                <div class="buttons"> 
                    <button >  <a href="{{ route('TourguideProfile.edit', [auth()->user()->TourGuide->id]) }}" class="ms-auto fs-4 me-4 text-dark"> Update</a>
                   </button>
                 
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>


{{-- ====================================================================================================================== --}}
{{-- _______________________________________________   (order request)  ___________________________________________________ --}}



<div class="container">
    <div class="card" *ngFor="let User of UsersList ;" >
    
        <div class="card-content">
            <div class="image">
                {{-- <img [src]=" 'http://localhost:8000/' + User.image " style="width: 70px;height: 70px; border-radius: 10px;" > --}}

            </div>   
            @foreach ($places as $place ) 
              <div class="text-center">
                <h2>{{$place->name}}</h2>
                @endforeach
              </div>
              @endforeach
              <div class="stats">
                @foreach ($orders as $order ) 
                  <div class="stat1">
                      <span>{{$order->user_id->User->name}}</span>
                      <span>{{$order->check_in}}</span>
                      <span>{{$order->check_out}}</span>
                      <span>{{$order->n_of_days}}</span>
                  </div>
                  @endforeach

                  <form action="{{route('TourguideProfile.store')}}" method="Post">
                    @csrf
                  <div class="stat1">
                    <button class="btn btn-outline-primary px-4" >
                        <input type="radio" name="book_tourguide" value="accept">
                         Accept
                         </button>
                  </div>
                  
                  <div class="stat1">
                    <button class="btn btn-outline-primary px-4" >
                        <input type="radio" name="book_tourguide" value="regect">
                         Regect
                         </button>
                  </div>
                  <button type="submit" class="btn btn-primary px-4 ms-3" >Send</button>
                  </form>
                  
              </div>
            
        </div>
         
        
    </div>
</div>

