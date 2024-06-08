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
    
    @include('admin.header')
 
    @include('admin.sidebar')
   
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            <table class="des_tbl">

                    <tr>
                        <th class="tbl_ds">Nama</th>
                        <th class="tbl_ds">Email</th>
                        <th class="tbl_ds">Phone</th>
                        <th class="tbl_ds">Message</th>
                        <th class="tbl_ds">Send To Email</th>   

                    </tr>
                    

                    @foreach($data as $data)

                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->message}}</td>
                        
                        <!-- <td>
                            <a class="btn btn-success" href="{{url('send_mail',$data->id)}}">Send Mail</a>
                        </td> -->

                    </tr>

                    @endforeach
              

                    </table>

            </div>
        </div>
    </div>
        

    @include('admin.footer')

  </body>
</html>