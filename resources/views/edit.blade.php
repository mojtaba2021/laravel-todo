@extends('master')
@section('form')
    @if($task->title)
<form class="d-flex justify-content-center align-items-center mb-3"
      action="{{route('update',$task->id)}}"
      method="post">
    {{method_field('PATCH')}}
    @csrf
    <div class="form-outline flex-fill form-group">

        <input type="text" name="title" class="form-control" value="{{$task->title}}"
               placeholder="بروزرسانی تسک "/>
    </div>
    <div class="form-group p-sm-1">
        <button type="submit" class="btn btn-info form-control">بروزرسانی</button>
    </div>

</form>
@endif
@endsection
