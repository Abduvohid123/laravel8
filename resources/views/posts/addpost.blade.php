

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Posts</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    Posts
                </div>
                <div class="card-body">
                    @if (\Illuminate\Support\Facades\Session::has('post'))
                        <div class="alert alert-success" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('post')}}
                        </div>
                    @endif
                    <form  action="{{route('addSubmit')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Description">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
