@extends('master')


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    @include('error')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Update Contact</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success py-2">{{Session::get('message')}}</p>
                            <form action="{{route('update-contact', ['id' => $contact->id])}}" method="POST" class="form-group">
                                @csrf
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{$contact->name}}">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3">Contact</label>
                                    <div class="col-md-9">
                                        <input type="number" name="contact" class="form-control" value="{{$contact->contact}}">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="submit" class="form-control btn btn-success" value="Update Contact">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
