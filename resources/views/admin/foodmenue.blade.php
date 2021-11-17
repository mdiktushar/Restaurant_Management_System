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
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input style='color: black' type="text" name="title" id=""
                placeholder="Dish Name"  require>
            </div>
            <div>
                <label for="price">Price</label>
                <input style='color: black' type="number" name="price" id=""
                placeholder="Price"  require>
            </div>
            <div>
                <label for="image">Image</label>
                <input  type="file" name="image" id=""
                require>
            </div>
            <div>
                <label for="description">Description</label>
                <input style='color: black' type="text" name="description" id=""
                placeholder="Description"  require>
            </div>
            <div>
                <input style="color:black" type="submit" value="Save">
            </div>
        </form>
        <br><br>
        <table bgcolor="#767575" style="border: 1px solid black;">
            <tr align="center" style="color: black">
                <th style="padding: 30px; border: 1px solid black;">Image</th>
                <th style="padding: 30px; border: 1px solid black;">Food Name</th>
                <th style="padding: 30px; border: 1px solid black;">Price</th>
                <th style="padding: 30px; border: 1px solid black;">Data of Adding</th>
                <th style="padding: 30px; border: 1px solid black;">Description</th>
                <th style="padding: 30px; border: 1px solid black;">Action</th>

            </tr>


            @foreach($data as $data)
            <tr align="center">
                <td style="border: 1px solid black;"><img src="/foodimage/{{$data->image}}" 
                alt="{{$data->title}}" width="50" height="50"></td>
                <td style="border: 1px solid black;">{{$data->title}}</td>
                <td style="border: 1px solid black;">{{$data->price}}</td>
                <td style="border: 1px solid black;">{{$data->created_at}}</td>
                <td style="border: 1px solid black;">{{$data->description}}</td>
                <td style="border: 1px solid black;"><a href="{{url('/deletemenue', $data->id)}}">Delete</a></td>
            </tr>

            @endforeach
        </table>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>