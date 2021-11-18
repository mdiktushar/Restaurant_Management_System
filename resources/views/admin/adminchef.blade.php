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


    <!-- body -->
    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>