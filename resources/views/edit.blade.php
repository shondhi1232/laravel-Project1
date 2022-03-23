<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <nav  class="navbar navbar-expand-sm bg-info border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

            <div class=" fixed top-0 right-0 py-0 links">

                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">HOME</a>
            </div>

                
            </div>
        </div>
    </nav>

    <section style="padding-top: 60px">

        <div class="container"> 
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header" style="text-align: center ">
                            Edit Post
                        </div>
                        <div class="card-body">
                            @if (Session::has('post-created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                                
                            @endif
                            <form method="POST" action="{{route('post-create')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter post title"value="{{$post->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Post description</label>
                                    <textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

</body>
</html>

