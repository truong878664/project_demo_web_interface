@extends('frontend.welcome')
@section('content')
          
    <h2>Demo noi dung</h2> 
    <h5>Mô tả tiêu đề</h5>
    <form role="form" action="{{URL::to('/save-text')}}" method="get" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
            <label for="exampleInputEmail1">Id</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
            <label for="exampleInputEmail1">Name_position</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
            <label for="exampleInputEmail1">Position_x</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
            <label for="exampleInputEmail1">Position_y</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
            <label for="exampleInputEmail1">Rotation_z</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
        </tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>  
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>    
@stop