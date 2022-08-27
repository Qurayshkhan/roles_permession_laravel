@extends("layouts.admin")

@section("content")   
 
  <div class="page-wrapper">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Categories</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                            <tr>
                                                <td>No.#</td>
                                                <td>Names</td>
                                                <td>No of Item available in stock</td>
                                                <td>Discription</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Category as $Category)
                                            <tr>
                                                <td>{{ $Category->id }}</td>
                                                <td>{{ $Category->name }}</td>
                                                <td>{{ $Category->available_stock }}</td>
                                                <td>{{ $Category->description }}</td>
                                                <td> 
                                                    <div>
                                                        <a href="{{ route('categoryedit.show', $Category->id) }}" class="btn btn-success">Edit</a>
                                                        <a href="{{ route('categorydestroy.show', $Category->id) }}" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
  
@stop