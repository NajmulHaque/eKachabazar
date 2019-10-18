@extends('layout.kachabazar')

@section('content')
    {{-- <h1>{{$title}}</h1>
    @if (count('services')>0)
       <ul class="list-group">
           @foreach ($services as $service)
               <li class="list-group-item">{{$service}}</li>
           @endforeach
       </ul>        
    @endif --}}
     <form action="{{route('image.add')}}" id="formImgInp" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="file" name="image" id="image">
        <button type="submit">submit</button>
    </form> 
    {{-- <form method="POST" action="{{route('video.add')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="file" name="Upload_video">
        <button type="submit">submit</button>
    </form> --}}
@endsection