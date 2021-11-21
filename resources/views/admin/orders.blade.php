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
        .td {
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

    
    <div class="container">
        <br><br>
        <form action="{{url('/serach')}}" methord="get">
            <input type="text" name="search" id="" style="color:blue;" placeholder="Search Name">
            <input type="submit" value="Search" class="btn btn-success">
        </form>
        <br><br>

        <table align="center" syle="padding : 10px">
            <tr>
                <th class="th">Name</th>
                <th class="th">Phone Number</th>
                <th class="th">Food Item</th>
                <th class="th">Quantity</th>
                <th class="th">Price</th>
                <th class="th">Address</th>
                <th class="th">Total Price</th>
            </tr>

            @foreach ($data as $data)
            <tr align='center'>
                <td class="td">{{$data->name}}</td>
                <td class="td">{{$data->phone}}</td>
                <td class="td">{{$data->foodname}}</td>
                <td class="td">{{$data->quantity}}</td>
                <td class="td">{{$data->price}}$</td>
                <td class="td">{{$data->address}}</td>
                <td class="td">{{($data->price)*($data->quantity)}}$</td>
            </tr>
            @endforeach
        </table>
        <br><br><br>
    </div>
    


    <!-- body -->

    </div>
    <!-- js -->
    @include('admin.adminjs')

  </body>
</html>