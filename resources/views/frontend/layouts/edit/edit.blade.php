@extends('frontend.welcome')
@section('content')
          
    <h2>Nhap thong tin can sua</h2> 
    <form role="form" action="{{URL::to('/save-text')}}" method="get" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap mo ta">
            <label for="exampleInputEmail1">Id</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap id">
            <label for="exampleInputEmail1">Name_position</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap ten vi tri">
            <label for="exampleInputEmail1">Position_x</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap vi tri x">
            <label for="exampleInputEmail1">Position_y</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap vi tri y">
            <label for="exampleInputEmail1">Rotation_z</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhap vi tri z">
        </div>
        <button type="submit" class="btn btn-primary btn-sua">Sua</button>
    </form>


@endsection