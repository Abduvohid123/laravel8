<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col">
            @if (\Illuminate\Support\Facades\Session::has('delete'))
                <div class="alert alert-success" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('delete')}}
                </div>
            @endif
                @if (\Illuminate\Support\Facades\Session::has('update'))
                    <div class="alert alert-success" role="alert">
                        {{\Illuminate\Support\Facades\Session::get('update')}}
                    </div>
                @endif

            <div class="card">
                <div class="card-header">
                    POSTS
                </div>
                <div class="card-body">
                    <a class="btn btn-info" href="/addPost">Add post</a>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Post Title</th>
                            <th>Post Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>
                                <a class="btn btn-primary" href="postview/{{$post->id}}">View</a>
                                <a class="btn btn-success" href="edit/{{$post->id}}">Edit</a>
                                <a data-confirm="salom" class="btn btn-danger del" href="delete/{{$post->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
