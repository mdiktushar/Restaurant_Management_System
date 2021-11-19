<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
            @foreach ($data2 as $data)
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="{{url('$data->facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{url('$data->twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{url('$data->instagram')}}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="/chefimage/{{$data->image}}" alt=""
                            hight = 200 width=200>
                        </div>
                        <div class="down-content">
                            <h4>{{$data->name}}</h4>
                            <span>{{$data->speciality}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>