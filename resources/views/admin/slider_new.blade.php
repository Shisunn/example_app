@extends('admin.layouts.default')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('sliders.store') }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
            {{-- header text--}}
                <div class="form-group">
                    <label for="header">Title</label>
                    <input id="header" name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="Title..." required>
                    <div class="invalid-feedback">
                        Please input a valid title
                    </div>
                    <div class="text-danger">
                        @error('title')
                    {{ $message }}
                @enderror
                    </div>
                </div>
            {{-- subheader text --}}
                <div class="form-group">
                    <label for="sub_title">Subtitle</label>
                    <input id="sub_title" name="sub_title" type="text" class="form-control" placeholder="Subtitle..." value="{{old('sub_title')}}" required>
                    <div class="invalid-feedback">
                        Please input a valid subtitle
                    </div>
                    <div class="text-danger">
                        @error('sub_title')
                    {{ $message }}
                @enderror
                    </div>
                </div>
            {{-- content textarea--}}
                <div class="form-group">
                    <label for="content" id="content">Textarea</label>
                    <textarea name="content" id="content" cols="30" rows="5" class="form-control" required> {{old('content')}} </textarea>
                    <div class="text-danger">
                    @error('content')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            {{-- image fle --}}
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="image" id="image" class="custom-file-input" accept=".png, .jpg, .jpeg, .svg, .webp" required>
                    <label for="image" class="custom-file-label">Choose file...</label>
                </div>
                <div class="text-danger">
                @error('image')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label for="order">Order</label>
                <select name="order" id="order" class="custom-select" autocomplete="off" required>
                    <option selected disabled>Open this select menu</option>
                    @for ($i = 1; $i <= 99; $i++)
                        {{$count=0}}
                        @for ($j = 0; $j < count($sliders); $j++)
                            @if ($i == $sliders[$j]->order)
                                {{$count++}}
                                @break
                            @endif
                        @endfor
                        @if (!$count>0)
                            <option value="{{$i}}">{{ $i }}</option>
                        @endif
                    @endfor
                </select>
                <div class="invalid-feedback">
                    Please select a valid order.
                  </div>
                  <div class="text-danger">
                  @error('order')
                  {{ $message }}
              @enderror
            </div>
            </div>
            {{-- active checkbox--}}
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="active" class="custom-control-input" id="active">
                    <label class="custom-control-label" for="active">Active</label>
                  </div>
            </div>
            {{-- submit --}}
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
// File name to input
document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("image").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
});

    </script>
@endsection