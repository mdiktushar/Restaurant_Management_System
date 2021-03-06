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
                <th style="padding: 30px; border: 1px solid black;">Name</th>
                <th style="padding: 30px; border: 1px solid black;">Email</th>
                <th style="padding: 30px; border: 1px solid black;">Action</th>
            </tr>

            @foreach($data as $data)
            
            <tr align="center">
                
                @if ($data->usertype == '0') 
                <td style = 'border: 1px solid black;'>{{$data->name}}</td>
                <td style = 'border: 1px solid black;'>{{$data->email}}</td>
                <td style = 'border: 1px solid black;'><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
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