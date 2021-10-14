<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Settings Page</title>
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
    <i class="fas fa-table"></i> Manage Settings
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

      <form method="post" action="{{url('admin/setting')}}" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tr>
                <th>Comment Auto Approve</th>
                <td><input @if($setting) value="{{$setting->comment_auto}}" @endif type="text" name="comment_auto" class="form-control" /></td>
            </tr>
            <tr>
                <th>User Auto Approve</th>
                <td><input @if($setting) value="{{$setting->user_auto}}" @endif type="text" name="user_auto" class="form-control" /></td>
            </tr>
            <tr>
                <th>Recent Post Limit</th>
                <td><input @if($setting) value="{{$setting->recent_limit}}" @endif type="text" name="recent_limit" class="form-control" /></td>
            </tr>
            <tr>
                <th>Popular Post Limit</th>
                <td><input @if($setting) value="{{$setting->popular_limit}}" @endif type="text" name="popular_limit" class="form-control" /></td>
            </tr>
            <tr>
                <th>Recent Comments Limit</th>
                <td><input @if($setting) value="{{$setting->recent_comment_limit}}" @endif type="text" name="recent_comment_limit" class="form-control" /></td>
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
</div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
</html>