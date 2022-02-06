@extends('master')
@section('form')
    @if($tasks)
        <form class="d-flex justify-content-center align-items-center mb-3"
              action="{{route('store')}}"
              method="post">
            @csrf
            <div class="form-outline flex-fill form-group">

                <input type="text" name="title" class="form-control" value=""
                       placeholder="افزودن تسک جدید"/>
            </div>
            <div class="form-group p-sm-1">
                <button type="submit" class="btn btn-info form-control">افزودن</button>
            </div>

        </form>
    @endif

@endsection
