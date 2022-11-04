@extends('frontend.welcome')
@section('content')
<br>
    <h2>Nhap thong tin robot</h2> 
    <form role="form" action="{{URL::to('/position/add')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Nhap mo ta">
            <label for="exampleInputEmail1">Name_position</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_position" placeholder="Nhap ten vi tri">
            <label for="exampleInputEmail1">Position_x</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="position_x" placeholder="Nhap vi tri x">
            <label for="exampleInputEmail1">Position_y</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="position_y" placeholder="Nhap vi tri y">
            <label for="exampleInputEmail1">Rotation_z</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="rotation_z" placeholder="Nhap vi tri z">
        </div>
        <button type="submit" class="btn btn-primary btn-sua">Them</button>
    </form>
    <br>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Description</th>
            <th>Name_position</th>
            <th>Position_x</th>
            <th>Position_y</th>
            <th>Rotation_z</th> 
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $takeRobot)
        <tr>
          
            <td>{{$takeRobot->description}}</td>
            <td>{{$takeRobot->name_position}}</td>
            <td>{{$takeRobot->position_x}}</td>
            <td>{{$takeRobot->position_y}}</td>
            <td>{{$takeRobot->rotation_z}}</td>
            <td><button type="button" class="btn btn-primary">Chinh</button></td>

            <td>
                <form method="post" action="position/delete/{{$takeRobot->id}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-primary">Xoa</button>
                </form>
            </td> 
        </tr>
        @endforeach
        </tbody>
    </table>  
  
 
@endsection