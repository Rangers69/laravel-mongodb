@extends('layouts.admin')

@section('content')
<div class="content">

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit  Book</h3>
                    </div>


                    <form method="POST" action="{{url('books/'.$books->id)}}">
                        @csrf
                         {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$books->name}}"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category</label>
                                <input type="text" class="form-control" name="category" value="{{$books->category}}"
                                    placeholder="category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label> 
                                <input type="text" class="form-control" name="price" value="{{$books->price}}"
                                    placeholder="price">
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
