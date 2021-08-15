@extends('layouts.app')

@section('content')
    <div class="home-sec" id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row text-center " >

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section" >
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>{{__('index.big-header')}}</h3>
                                    <h1>SyScript Team</h1>
                                    <p>{{__('index.site-symbol')}}</p>

                                </li>
                            </ul>
                        </div>




                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION END-->
    <div  class="tag-line" >
        <div class="container">
            <div class="row  text-center" >

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i>{{__('index.welcome')}}<i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="choose_class-sec" class="container set-pad" >
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">

            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row" >

            <form name="class">
                <div class='col-lg-4  col-md-4 col-sm-4' data-scroll-reveal='enter from the bottom after 0.1s'>
                    <div class='about-div'>
                        <i class='fa fa-paper-plane-o fa-4x icon-round-border' ></i>
                        <h3 >{{__('index.show-services')}}</h3>
                        <hr />
                        <hr />
                        <p>
                            {{__('index.show-services-text')}}
                        </p>
                        <a href="{{route('services')}}"><button type='button' class='btn btn-info btn-set' >{{__('index.go-to-services')}}</button></a>
                    </div>
                </div>

                <div class='col-lg-4  col-md-4 col-sm-4' data-scroll-reveal='enter from the bottom after 0.1s'>
                    <div class='about-div'>
                        <i class='fa fa-paper-plane-o fa-4x icon-round-border' ></i>
                        <h3 >{{__('index.about-us')}}</h3>
                        <hr />
                        <hr />
                        <p >
                            {{__('index.about-us-text')}}
                        </p>
                        <a href="{{route('about.us')}}"><button type='button'  class='btn btn-info btn-set' >{{__('index.go-to-about-us')}}</button></a>
                    </div>
                </div>

                <div class='col-lg-4  col-md-4 col-sm-4' data-scroll-reveal='enter from the bottom after 0.1s'>
                    <div class='about-div'>
                        <i class='fa fa-paper-plane-o fa-4x icon-round-border' ></i>
                        <h3 >{{__('index.join-us')}}</h3>
                        <hr />
                        <hr />
                        <p >
                            {{__('index.join-us-text')}}
                        </p>

                            @if(\Illuminate\Support\Facades\Auth::user())
                                <a href="{{route('contact.us.type' , 'join-us')}}"><button type='button'  class='btn btn-info btn-set' >
                                        {{__('index.go-to-join-us')}}</button></a>
                            @else
                                <a href="{{route('register')}}"><button type='button'  class='btn btn-info btn-set' >
                                        {{__('index.go-to-register')}}</button></a>
                            @endif

                    </div>
                </div>
            </form>
        </div>

    </div>

    <div id="contact-sec"   >
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >{{__('index.contact-us')}}</h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            {{__('index.contact-message-first')}} <br> {{__('index.contact-message-second')}}
                        </p>
                    </div>

                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >


                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" name="name" value="" class="form-control "  required="required" placeholder="{{__('index.name-placeholder')}}" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" class="form-control " required="required"  placeholder="{{__('index.email-placeholder')}}" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="type" id="">
                                    <option value="free-message">{{__('index.free-message')}}</option>
                                    <option value="join-us" @if(@$_GET['type'] == "join-us") selected @endif >{{__("index.join-us")}}</option>
                                    @foreach($services as $service)

                                        @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                            <option @if(@$_GET['type'] == $service->name_en) selected @endif value="{{$service->name_en}}" @if($type == $service->name_en) selected @endif >{{$service->name_en}}</option>
                                        @else
                                            <option @if(@$_GET['type'] == $service->name_en) selected @endif value="{{$service->name_ar}}">{{$service->name_ar}}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="message_content" required="required" class="form-control" style="min-height: 150px;" placeholder="{{__('index.message-placeholder')}}"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="send" class="btn btn-info btn-block btn-lg">{{__('index.send')}}</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad"  >
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                <h2 ><strong>{{__('index.our-location')}}</strong></h2>
                <hr />
                <div>
                    <h4>{{__('index.lattakia')}}</h4>

                    <h4><strong>{{__('index.email')}} : </strong>syscriptteam@gmail.com</h4>
                </div>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                <h2 ><strong>{{__('index.visit-facebook')}}</strong></h2>
                <hr />
                <div >
                    <a href="#">  <img src="{{asset('assets/img/Social/facebook.png')}}" alt="" /> </a>
{{--                    <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>--}}
{{--                    <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>--}}
                </div>
            </div>


        </div>
    </div>
    <!--      CONTACT SECTION END -->
@endsection
