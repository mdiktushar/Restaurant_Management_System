<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <!-- css -->
    @include('admin.admincss')
  </head>
  <body>
    <!-- Navbar -->
    <x-app-layout/>
    <div class="container-scroller">
    @include('admin.navbar')

    <!-- body -->
    <div style="position: relative; top: 60px; right: -100px;">
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input style='color: black' type="text" name="title" id=""
                value="{{$data->title}}"  require>
            </div>
            <div>
                <label for="price">Price</label>
                <input style='color: black' type="number" name="price" id=""
                value="{{$data->price}}"  require>
            </div>
            <div>
                <label for="description">Description</label>
                <input style='color: black' type="text" name="description" id=""
                value="{{$data->description}}"  require>
            </div>

            <div>
                <label for="image">Present Image</label>
                <img src="/foodimage/{{$data->image}}" 
                alt="{{$data->title}}" width="100" height="100">
            </div>
            <br>
            <div>
                <label for="image">New Image</label>
                <input  type="file" name="image" id=""
                require>
            </div>
            <div>
                <input style="color:black" type="submit" value="Save">
            </div>
        </form>


    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>