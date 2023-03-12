@extends('dashboardTourguide.tourguideprofile')

@section("dashboardTourguide")


<form action="{{route('TourguideProfile.update',Auth::user()->TourGuide->id)}}" class="form" id="form1" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
                    <h2 class="form__title"> Edit Profile </h2>
                    <div class="profImg"> <label for="files">
                            <img src="./assets/imgs/profImg.png" alt="">
     <img src="Storage/img/{{Auth::user()->image}}">
    
                            <input type="file" id="files" style="visibility:hidden;"
                                accept="image/png, image/gif, image/jpeg"  />
                        </label>
                    </div>
                    {{-- <input type="file" name="image" > --}}
                    <input type="text" placeholder="Your Name" name="name" class="input" required value="{{ Auth::user()->name }}"/>
                    <div>
                        Gender :
                        <span>Male<input class="specifyColor" type="radio" name="gender" id="male"
                             value="{{ Auth::user()->gender == 'male' ? 'checked' : ''}}" 
                            ></span>  {{-- selected --}}
                        <span>Female<input class="specifyColor" type="radio" name="gender" id="female" 
                            value="{{ Auth::user()->gender == 'female' ? 'checked' : ''}}" 
                              ></span>
                    </div>
    
                    <input type="phone" placeholder="Phone" name="phone" class="input" required value="{{ Auth::user()->phone }}"  />
    
                    <input type="email" placeholder="Email" name="email" class="input" value="{{ Auth::user()->email }}"   required />
                    <input type="password" placeholder="Password" name="password" class="input" value="{{ Auth::user()->password }}"  required />
                    <input type="text" placeholder="syndicate_No" name="syndicate_No" class="input" value="{{ Auth::user()->TourGuide->syndicate_No }}"  required  />
                    <input type="textarea" placeholder="bio about you" name="desc" class="input" value="{{ Auth::user()->TourGuide->bio }}" />
                    <textarea name="bio" class="form-control"  cols="30" rows="10" value="{{ Auth::user()->TourGuide->bio }}"></textarea>


    <select name="language[]"  multiple>Language
        {{--  --}}
        <option
         value="{{ in_array("arabic", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?>  : '' }}">
         arabic</option>
        <option
         value="{{ in_array("english", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?>  : ''}}">
         english</option>
        <option 
        value="{{ in_array("spanish", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?>  : ''}}">
        spanish</option>
        <option 
        value="{{ in_array("italien", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?>  : ''}}">
        italien</option>
        <option
         value="{{ in_array("french", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?>  : ''}}">
         french</option>
        <option
         value="{{ in_array("german", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?> : ''}}">
         german</option>
        <option
         value="{{ in_array("chinese", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?> : ''}}">
         chinese</option>
        <option
        value="{{ in_array("japanese", {{Auth::user()->TourGuide()->TourguideLanguage->language[]}}) ? <?php echo 'selected' ?> : ''}}">
        japanese</option>
        <option
         value="{{ in_array("korean", {{Auth::user()->TourGuide()->TourguideLanguage->language[] }}) ? <?php echo 'selected' ?> : ''}}">
         korean</option>
    </select>

    <input type="text" class="input" name="role" value="driver" hidden>


    <input type="number" placeholder="the price you want for a day " name="price_per_day"  required value="{{ Auth::user()->TourGuide->price_per_day }}"  />
    
                    <button type="submit" class="btn">Sign Up</button>
    
    
                        <a href="#login" class="link" id="signIn">Already a user </a>
    
                    </form>
    
            </div>
    
    
        </div>
    </body>
    <script src="./assets/js/signning.js"></script>
    
    </html>
    
    @endsection