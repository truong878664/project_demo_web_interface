
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
 
    <div class="container">
    
        <form method="post" action="position/add">
            {{-- <input name="id"> --}}

            <input placeholder="Name Position" name="name_position">
            <input placeholder="X" name="position_x">
            <input placeholder="Y" name="position_y">
            <input placeholder="X" name="rotation_z">
            <input placeholder="Description" name="description">
            <input type="submit" value="submit">
            @csrf
        </form>
        <form method="post" action="position/delete/1">
            @method('delete')
            @csrf
            <input type="submit" value="xoa">
        </form>
        
        {{
          $data
        }}

    </div>

 
</body>
</html>
