@extends('welcome')
@section('content')
          
    <h2>Demo noi dung</h2> 
    <h5>Mô tả tiêu đề</h5>
    <form role="form" action="{{URL::to('/save-text')}}" method="get" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Write Something</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
               
@stop