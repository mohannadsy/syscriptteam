@extends('layouts.app')

@section('content')
    <!--HOME SECTION TAG LINE END-->
    <div class="body">
    <div class="opacity">

        <div id="features-sec" class="container " >

            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="font-weight-bolder text-white">{{__('services.our-services')}}</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s" >
                        {{__('services.look-services')}}
                    </p>
                </div>

            </div>

            <div class="row" >
                @foreach($services as $service)

                    <div class='col-lg-4  col-md-4 col-sm-4' data-scroll-reveal='enter from the bottom after 0.1s'>
                        <div style="background-color: black" class='about'>
                            <div style="background-color: {{$service->theme_color}} " class='about-div height'>
                                 <div class="to-left">

                                     <img class="icon-round-border" src="{{asset('assets/services_icons/' . $service->icon)}}">
            {{--                         <i class='fa fa-paper-plane-o fa-2x icon-round-border' ></i>--}}
                                     @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                         <h3 data-scroll-reveal="enter from the right after 0.4s">{{$service->name_en}}</h3>
                                     @else
                                         <h3 data-scroll-reveal="enter from the right after 0.4s">{{$service->name_ar}}</h3>
                                     @endif
                                 </div>
                                 <img  width="100%" src="{{asset('assets/services_images/' . $service->image)}}">
                                <hr />
                                <hr />
                                 <p data-scroll-reveal="enter from the right after 0.8s">
                                     @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                         {{$service->description_en}}
                                         @else
                                         {{$service->description_ar}}
                                         @endif
                                 </p>
                                <a href="{{route('contact.us.type' , $service->name_en)}}"><button type='button' value='' name='contact' class='btn btn-info btn-set'>{{__('services.contact-booking')}}</button></a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection

