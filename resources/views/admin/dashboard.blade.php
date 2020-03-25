@extends('layouts.app')

{{-- Xmen's admin dashboard --}}

{{-- Name   Email   Chicken or Beef     Before Photo    After Photo       My Powers(Short Description)--}}

@section('content')
<div class="container">
    <h1 class="header">
        <h1 id="title" class="text-center">Future Prospect Applications</h1>
    </h1>

    <table class="content-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Meat</th>
                <th>Email</th>
                <th>Before Photo</th>
                <th>After Photo</th>
                <th>Power Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $hi)
                <tr>
                    <th>{{$hi->name}}</th>
                    <th>{{$hi->meat}}</th>
                    <th>{{$hi->email}}</th>
                    <th><a href='{{ asset('uploads/beforePictures/' . $hi->beforePicture) }}'><img src="{{ asset('uploads/beforePictures/' . $hi->beforePicture) }}" width="250px" height="200px" alt="Before Picture"></a></th>
                    <th><a href='{{ asset('uploads/afterPictures/' . $hi->afterPicture) }}'><img src="{{ asset('uploads/afterPictures/' . $hi->afterPicture) }}" width="250px" height="200px" alt="After Picture"></th>
                    <th>{{$hi->description}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
