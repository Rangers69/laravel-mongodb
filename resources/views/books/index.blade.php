@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
                    <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if ($message = Session::get('delete'))
                        <div class="alert alert-primary alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">Books</h3>

                            <a href="{{url('books/create')}}" class="btn btn-primary float-right">Add</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th style="width: 40px">Price</th>
                                        <th class="text-center" style="width: 150px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->category}}</td>
                                        <td>{{$book->price}}</td>
                                        <td> 
                                        <div class="row justify-content-center">    
                                        <a href="{{ url('books/'.$book->id.'/edit') }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                            &nbsp;
                                        <form action="{{ url('books', ['id' => $book->id]) }}" method="post">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"
                                                onclick="return confirm('Are you sure?')">
                                            @method('delete')
                                            @csrf
                                        </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                </div>


            </div>
        </div>
</div>
</div>
@endsection
