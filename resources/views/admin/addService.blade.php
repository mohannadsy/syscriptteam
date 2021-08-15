@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">

@section('content')
    <div class="signup-form">
        <form action="{{route('add.service')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-header">
                <h2>Add Service</h2>
                <p></p>
            </div>
            <div class="form-group">
                <label>Service Name</label>
                <input type="text" class="form-control" name="name_en" placeholder="Type Service Name in English"
                       autocomplete="off" autofocus required>

                <input type="text" class="form-control" name="name_ar" placeholder="اكتب الاسم باللغة العربية"
                       autocomplete="off" autofocus required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <br>
                <textarea name="description_en" class="form-control"
                       autocomplete="off" required placeholder="Type Description for your service"></textarea>
                <textarea name="description_ar" class="form-control"
                       autocomplete="off" required placeholder="اكتب وصف الخدمة"></textarea>
            </div>

            <div class="form-group">
                <label>Basic Icon</label>
                <br>
                <input type="file" class="form-control" name="icon"
                       autocomplete="off">
            </div>


            <div class="form-group">
                <label>Image</label>
                <br>
                <input type="file" class="form-control" name="image"
                       autocomplete="off">
            </div>


            <div class="form-group">
                <label>Theme Color</label>
                <br>
                <input type="color" class="form-control" name="theme_color"
                       autocomplete="off">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Add Service</button>
            </div>
        </form>
    </div>

    @endsection
