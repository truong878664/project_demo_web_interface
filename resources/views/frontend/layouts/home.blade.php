@extends('frontend.welcome')
@section('content')
<br>
    <h2>Nhap thong tin robot</h2> 
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
        <button type="submit" class="btn btn-primary btn-sua">Them</button>
    </form>
    <br>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Description</th>
            <th>Id</th>
            <th>Name_position</th>
            <th>Position_x</th>
            <th>Position_y</th>
            <th>Rotation_z</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>John</td>
            <td>John</td>
            <td>John</td>
            <td>John</td>
            <td>John</td>
            <td><button type="button" class="btn btn-primary">Chinh</button></td>
            <td><button type="button" class="btn btn-primary">Xoa</button></td>
            
        </tr>
        </tbody>
    </table>  
 
@endsection