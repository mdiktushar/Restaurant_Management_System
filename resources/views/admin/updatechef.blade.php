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
        <form action="{{url('/chefdataupdate', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input style='color: black' type="text" name="name" id=""
                value="{{$data->name}}"  require>
            </div>
            <div>
                <label for="speciality">Speciality</label>
                <input style='color: black' type="text" name="speciality" id=""
                value="{{$data->speciality}}"  require>
            </div>
            <div>
                <label for="facebook">Facebook</label>
                <input style='color: black' type="text" name="facebook" id=""
                value="{{$data->facebook}}"  require>
            </div>
            <div>
                <label for="twitter">Twitter</label>
                <input style='color: black' type="text" name="twitter" id=""
                value="{{$data->twitter}}"  require>
            </div>
            <div>
                <label for="instagram">instagram</label>
                <input style='color: black' type="text" name="instagram" id=""
                value="{{$data->instagram}}"  require>
            </div>
            
            <div>
                <label for="image">Present Image</label>
                <img src="/chefimage/{{$data->image}}" 
                alt="{{$data->name}}" width="100" height="100">
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
    <!-- body -->



    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>