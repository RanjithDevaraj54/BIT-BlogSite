<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Index</title>
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>


<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i> Add Category
    <a href="{{url('admin/category')}}" class="float-right btn btn-sm btn-dark">All Data</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      @if($errors)
        @foreach($errors->all() as $error)
          <p class="text-danger">{{$error}}</p>
        @endforeach
      @endif

      @if(Session::has('success'))
      <p class="text-success">{{session('success')}}</p>
      @endif

      <form method="post" action="{{url('admin/category')}}" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" class="form-control" /></td>
            </tr>
            <tr>
                <th>Detail</th>
                <td><input type="text" name="detail" class="form-control" /></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="file" name="cat_image" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn btn-primary" />
                </td>
            </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>
<!-- /.container-fluid -->
</body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{asset('backend')}}/js/scripts.js"></script>
    </body>
</html>