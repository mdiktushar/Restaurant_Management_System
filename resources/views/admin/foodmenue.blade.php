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
    </div>


    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>