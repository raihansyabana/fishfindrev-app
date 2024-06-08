<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        
        label{
            display: inline-block;
            width: 200px;
        }

        .des{
            padding-top: 30px;
        }

        .des_center{
            
            padding-top: 40px;
        }

    </style>

  </head>
  <body>
    
    <!-- Navbar -->
    @include('admin.header')
    <!--  -->

    <!-- Admin Sidebar -->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
      
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="des_center">

                <h1 style="font-size: 35px; font-weight: bold;">Update Pemancingan</h1>

                <form action="{{url('edit_mancing',$data->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="des">
                        <label>Pemancingan Title</label>
                        <input type="text" name="title" value="{{$data->mancing_title}}">
                    </div>

                    <div class="des">
                        <label>Description</label>
                        
                        <textarea name="description">{{$data->description}}</textarea>
                        
                    </div>
                    
                    <div class="des">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>

                    <div class="des">
                        <label>Pemancingan Type</label>
                        
                        <select name="type">

                            <option selected value="{{$data->mancing_type}}">{{$data->mancing_type}}</option>

                            <option value="harian">harian</option>
                            <option value="galatama">galatama</option>
                            <option value="lomba">lomba</option>

                        </select>
                    </div>
                
                    <div class="des">
                        <label>Wifi</label>
                        
                        <select name="wifi">
                            
                            <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>

                            <option value="yes">yes</option>
                            <option value="no">no</option>
                           

                        </select>
                    </div>

                    <div class="des">
                        <label for="">Current Images</label>
                        <img style="display: inline-block;" width="100" src="/mancing/{{($data->image)}}" >
                    </div>

                    <div class="des">
                        <label for="">Upload Images</label>
                        <input type="file" name="image">
                    </div>


                    <div class="des">
                        <input class="btn btn-primary" type="submit" value="Update Pemancing">
                    </div>

                </form>

            </div>

          </div>
        </div>
    </div>
        
    <!-- Footer -->
    @include('admin.footer')
    <!--  -->

  </body>
</html>