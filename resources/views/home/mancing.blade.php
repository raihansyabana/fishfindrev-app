<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Pemancingan</h2>
                     <p>Pilihan beberapa tempat mancing</p>
                  </div>
               </div>
            </div>

            
         <div class="row">

            @foreach($mancing as $mancings)
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <img style="height: 200px; width:360px;" src="mancing/{{$mancings->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$mancings->mancing_title}}</h3>
                        <p style="padding: 15px;">{!! Str::limit($mancings->description,120) !!}</p>

                        <a class="btn btn-dark" href="{{url('mancing_details',$mancings->id)}}">Details</a>

                     </div>
                  </div>
               </div> 
            @endforeach


      
         </div>
      </div>
   </div>