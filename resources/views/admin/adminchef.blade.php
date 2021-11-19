<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.admincss')

    <style>
        .th {
            padding: 30px; 
            border: 1px solid black;
        }
        .tb {
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <x-app-layout/>
    <div class="container-scroller">
    @include('admin.navbar')

    <!-- body -->
    <div style="position: relative; top: 60px; right: -100px;">
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style="padding: 5px">
                <label for="name">Name:</label>
                <input style='color: black' type="text" name="name" id="name" require>
            </div>
            <div style="padding: 5px">
                <label for="speciality">Speciality:</label>
                <input style='color: black' type="text" name="speciality" id="speciality" require>
            </div>
            <div style="padding: 5px">
                <input type="file" name="image" id="image">
            </div>

            <div style="padding: 5px">
                <label for="facebook">Facebook:</label>
                <input style='color: black' type="text" name="facebook" id="facebook" require>
            </div>

            <div style="padding: 5px">
                <label for="twitter">Twitter:</label>
                <input style='color: black' type="text" name="twitter" id="twitter" require>
            </div>

            <div style="padding: 5px">
                <label for="instagram">Instagram:</label>
                <input style='color: black' type="text" name="instagram" id="instagram" require>
            </div>

            <div>
                <input type="submit" value="Save" style = "color: black; padding: 5px;">
            </div>

        </form>

        <br><br>

        <table bgcolor="gray">
            <tr>
                <th class="th">Image</th>
                <th class="th">Name</th>
                <th class="th">Speciality</th>
                <th class="th">Facebook</th>
                <th class="th">Twitter</th>
                <th class="th">Instagram</th>
                <th class="th">Action-1</th>
                <th class="th">Action-2</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td class="tb"><img src="" alt="" srcset="/chefimage/{{$data->image}}" 
                alt="{{$data->name}}" width="50" height="50"></td>
                <td class="tb">{{$data->name}}</td>
                <td class="tb">{{$data->speciality}}</td>
                <td class="tb">{{$data->facebook}}</td>
                <td class="tb">{{$data->twitter}}</td>
                <td class="tb">{{$data->instagram}}</td>
                <td class="tb"><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
                <td class="tb"><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        <br><br><br><br>


    <!-- body -->
    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>