<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-10">
                @include('error')
               <div class="card">
                   <div class="card-header">
                       <h3 class="text-center">Add Contact</h3>
                   </div>
                   <div class="card-body">
                       <p class="text-center text-success py-2">{{Session::get('message')}}</p>
                       <form action="{{route('create-contact')}}" method="POST" class="form-group">
                           @csrf
                           <div class="row pb-3">
                               <label for="" class="col-md-3">Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="name" class="form-control">
                               </div>
                           </div>
                           <div class="row pb-3">
                               <label for="" class="col-md-3">Email</label>
                               <div class="col-md-9">
                                   <input type="email" name="email" class="form-control">
                               </div>
                           </div>
                           <div class="row pb-3">
                               <label for="" class="col-md-3">Contact</label>
                               <div class="col-md-9">
                                   <input type="number" name="contact" class="form-control">
                               </div>
                           </div>
                           <div class="row pb-3">
                               <label for="" class="col-md-3"></label>
                               <div class="col-md-9">
                                   <input type="submit" name="submit" class="form-control btn btn-success" value="Add Contact">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <h3 class="text-center pt-5 pb-3">All Information</h3>
            <div class="col-md-10">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allContact as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->contact}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-success px-4 me-2">Edit</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
