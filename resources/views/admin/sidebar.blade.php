<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="title">
            <h1 class="h5">Admin</h1>
          </div>
        </div>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class=""></i>Home</a></li>
                
                <li>
                  <a href="{{url('bookings')}}"> <i class=""></i>Bookings</a>
                </li>

                <li>
                    <a href="{{url('view_gallery')}}"> <i class=""></i>Photo</a>
                </li>

                <li>
                    <a href="{{url('user_message')}}"> <i class=""></i>User Message</a>
                </li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class=""></i>Pemancingan </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_mancing')}}">Add Pemancingan</a></li>
                    <li><a href="{{url('view_mancing')}}">View Pemancingan</a></li>

                  </ul>
                </li>  

          
        </ul>
      </nav>