@extends('layouts.admin')

@section('content')
<div class="content">

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit  User</h3>
                    </div>


                    <form method="POST" action="{{url('users/'.$users->id)}}">
                        @csrf
                         {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$users->name}}"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category</label>
                                <input type="email" class="form-control" name="email" value="{{$users->email}}"
                                    placeholder="category">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                </div>
    </section>
</div>
@endsection
