@extends('admin.layouts.default')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <form action="{{route('sliders.update', $slider[0]->id)}}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
            {{-- header text--}}
                <div class="form-group">
                    <label for="header">Title</label>
                    <input id="header" name="title" type="text" class="form-control" placeholder="Title..." value="{{$slider[0]->title}}" required>
                    <div class="invalid-feedback">
                        Please input a valid title
                    </div>
                    @error('title')
                            {{ $message }}
                        @enderror
                </div>
            {{-- subheader text --}}
                <div class="form-group">
                    <label for="sub_title">Subtitle</label>
                    <input id="sub_title" name="sub_title" type="text" class="form-control" placeholder="Subtitle..." value="{{$slider[0]->sub_title}}" required>
                    <div class="invalid-feedback">
                        Please input a valid subtitle
                    </div>
                    @error('sub_title')
                            {{ $message }}
                        @enderror
                </div>
            {{-- content textarea--}}
                <div class="form-group">
                    <label for="content" id="content">Textarea</label>
                    <textarea name="content" id="content" cols="30" rows="5" class="form-control" required> {{$slider[0]->text}} </textarea>
                    @error('content')
                            {{ $message }}
                        @enderror
                </div>
            {{-- image fle --}}
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="image" id="image" class="custom-file-input" accept=".png, .jpg, .jpeg, .svg, .webp">
                    <label for="image" class="custom-file-label">{{$slider[0]->image}}</label>
                </div>
                @error('image')
                            {{ $message }}
                        @enderror
            </div>
            <div class="form-group">
                <label for="order">Order</label>
                <select name="order" id="order" class="custom-select" autocomplete="off" required>
                    <option selected>{{$slider[0]->order}}</option>
                    @for ($i = 1; $i <= 99; $i++)
                        {{$count=0}}
                        @for ($j = 0; $j < count($order); $j++)
                            @if ($i == $order[$j]->order)
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
                  @error('order')
                            {{ $message }}
                        @enderror
            </div>
            {{-- active checkbox--}}
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="active" class="custom-control-input" id="active" @if ($slider[0]->active) checked  @endif>
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
// File name to input
document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("image").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
});

    </script>
@endsection