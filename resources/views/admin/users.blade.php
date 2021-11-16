<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.admincss')
  </head>
  <body>
    <!-- Navbar -->
    <x-app-layout/>
    <div class="container-scroller">
    @include('admin.navbar')

    <!-- body -->
    <div style="position: relative; top: 60px; right: -150px;">
        <table bgcolor="gray" border=3px>
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>

            @foreach($data as $data)
            
            <tr align="center">
                
                @if ($data->usertype == '0') 
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>


    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>