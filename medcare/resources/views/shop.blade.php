<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>

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

                   <h4><a href="/" class="text-sm text-info  underline">HOME</a> </h4> 
            </div>

                
            </div>
        </div>
    </nav>

    <section style="padding-top: 60px">

        <div class="container"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" >
                          <div class="" style="text-align: center"  > 
                            <h2>All Post<span class="badge badge-secondary"> new</span></h2>
                              </div>
                               <br><a href="/add-post" class="btn btn-success">Add new post</a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>
                                
                            @endif
                       <table class="table table-hover">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Puchage Title</th>
                                   <th>Post description</th>
                                  
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($posts as $post )
                               <tr>
                                   <td>{{$post->id}}</td>
                                   <td>{{$post->Purchage item}}</td>
                                   <td>{{$post->body}}</td>
                                   <td>
                                       <a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit</a>
                                       <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
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

    </section>
    

</body>
</html>