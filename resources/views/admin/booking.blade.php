<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        .des_tbl{
            border: 2px solid white;
            margin: auto;
            width: 100%;
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
    
    @include('admin.header')
    
    @include('admin.sidebar')
  
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                
          <table class="des_tbl">

                <tr>
                    <th class="tbl_ds">Id Pemancingan</th>
                    <th class="tbl_ds">Customer Name</th>
                    <th class="tbl_ds">Email</th>
                    <th class="tbl_ds">Phone</th>
                    <th class="tbl_ds">Check Date</th>
                    <th class="tbl_ds">Time In</th>
                    <th class="tbl_ds">Time Out</th>
                    <th class="tbl_ds">Status</th>
                    <th class="tbl_ds">Pemancingan Title</th>
                    <th class="tbl_ds">Price</th>
                    <th class="tbl_ds">Image</th>
                    <th class="tbl_ds">Delete</th>
                </tr>

                @foreach($data as $data)

                <tr>

                    <td>{{$data->mancing_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->time_in}}</td> 
                    <td>{{$data->time_out}}</td>    
                    <td>{{$data->status}}</td>
                    <td>{{$data->mancing->mancing_title}}</td>
                    <td>{{$data->mancing->price}}</td> 
                    <td>
                        <img style="width: 200!important;" src="/mancing/{{$data->mancing->image}}">
                    </td>    
                    <td>
                        <a onclick="return confirm('Hapus Data ini?')" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a>
                    </td>

                </tr>

                @endforeach
               

                </table>



            </div>
        </div>
    </div>



  
    @include('admin.footer')
    

  </body>
</html>