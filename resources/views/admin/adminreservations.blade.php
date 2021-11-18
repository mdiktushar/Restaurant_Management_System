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
                <th style="padding: 30px; border: 1px solid black;">Phone</th>
                <th style="padding: 30px; border: 1px solid black;">Guests</th>
                <th style="padding: 30px; border: 1px solid black;">Date</th>
                <th style="padding: 30px; border: 1px solid black;">time</th>
                <th style="padding: 30px; border: 1px solid black;">Message</th>

            </tr>

            @foreach($data as $data)
            
            <tr align="center">

                <td style = 'border: 1px solid black;'>{{$data->name}}</td>
                <td style = 'border: 1px solid black;'>{{$data->email}}</td>
                <td style = 'border: 1px solid black;'>{{$data->phone}}</td>
                <td style = 'border: 1px solid black;'>{{$data->guest}}</td>
                <td style = 'border: 1px solid black;'>{{$data->date}}</td>
                <td style = 'border: 1px solid black;'>{{$data->time}}</td>
                <td style = 'border: 1px solid black;'>{{$data->message}}</td>
            </tr>
            @endforeach
            

        </table>
    </div>

    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>