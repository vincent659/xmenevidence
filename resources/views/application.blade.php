
{{-- Mutant Application page --}}

{{-- Name --}}
{{-- Email --}}
{{-- Chicken or Beef --}}
{{-- My Power (Short Descrip with 150 word limits) --}}
{{-- Before Photo --}}
{{-- After Photo --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">
        <h1 id="title" class="text-center">MARVEL REGISTER FORM</h1>
    </h1>

    <form id="application-form" action="submission" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" id="name-label">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Full Name" class="form-control @error('name') is-danger @enderror" value="{{ old('name')}}" required>
            <label for="email" id="email-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control @error('email') is-danger @enderror" value="{{ old('email')}}" required>
        </div>

        <div class="form-group">
            <label for="meat" id="meat-label">Chicken or Beef?</label>
            <select id="dropdown" name="meat" class="form-control" required>
                <option disabled selected value>Which one are you?</option>
                <option value="chicken">Chicken</option>
                <option value="beef">Beef</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description" id="description-label">Your Power Description</label>
            <textarea name="description" id="feedback" class="input-textarea @error('description') is-danger @enderror" placeholder="Minimum 150 words..." required>{{ old('description')}}</textarea>
        </div>

        <div class="form-group">
            <label for="beforePicture">Before Picture</label>
            <input type="file" class="form-control-file" id="beforePicture" name="beforePicture">
            @if ($errors->has('beforePicture'))
              <span class="text-danger">{{ $errors->first('beforePicture') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="afterPicture">After Picture</label>
            <input type="file" class="form-control-file" id="afterPicture" name="afterPicture">
            @if ($errors->has('afterPicture'))
              <span class="text-danger">{{ $errors->first('afterPicture') }}</span>
            @endif
          </div>

          @csrf

        <div class="form-group">
            <button id="submit" type="submit" class="submit-button">Submit</button>
        </div>
    </form>
</div>

@endsection
