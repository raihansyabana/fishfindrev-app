<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

    .des_tbl{
        border: 2px solid white;
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 40px;
    }

    .tbl_ds{
        background-color: white;
        padding: 20px;
    }

    tr{
        border: 3px solid white;
    }

    td{
        padding: 15px;
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

                <table class="des_tbl">

                <tr>
                    <th class="tbl_ds">Pemancingan Title</th>
                    <th class="tbl_ds">description</th>
                    <th class="tbl_ds">Price</th>
                    <th class="tbl_ds">Wifi</th>
                    <th class="tbl_ds">Mancing Type</th>
                    <th class="tbl_ds">Images</th>
                    <th class="tbl_ds">Delete</th>
                    <th class="tbl_ds">Update</th>
                </tr>
                
                @foreach($data as $data)
                <tr>
                    <td>{{$data->mancing_title}}</td>
                    <td>{!! Str::limit($data->description,150) !!}</td>
                    <td>Rp.{{$data->price}}</td>
                    <td>{{$data->wifi}}</td>
                    <td>{{$data->mancing_type}}</td>
                    <td>
                        <img width="100" src="mancing/{{$data->image}}">
                    </td>

                    <td>
                        <a onclick="return confirm ('Hapus data ini?'); " class="btn btn-danger" href="{{url('mancing_delete',$data->id)}}">Delete</a>
                    </td>

                    <td>
                        <a class="btn btn-warning" href="{{url('mancing_update',$data->id)}}">Update</a>
                    </td>

                </tr>

                @endforeach

                </table>

            </div>
        </div>
    </div>
        
    <!-- Footer -->
    @include('admin.footer')
    <!--  -->

  </body>
</html>