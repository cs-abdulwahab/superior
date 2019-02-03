@extends('layouts.master') 
@section('main-content')
<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} :{{ old('name') }}
        </div>
        @endif @if (session('key'))
        <div class="alert alert-success">
            {!! session('key') !!}
        </div>

        @endif

    </div>
    <div class="row mb-2">
        <div class="col">
            <span class="h2">Department Details</span>
        </div>

        <div class="d-flex justify-content-end">
            <i class="fas fa-igloo">s</i> <a class="btn btn-success" href={{route( 'departments.create')}}>Create Department</a>
        </div>

    </div>

    <div class="row">

        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($departments as $department)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td scope="row"> {{$department->name}}</td>
                        <td>{!!$department->location!!}</td>
                        <td class="d-flex justify-content-end">

                            <form class="form-inline" action={{route( 'departments.destroy',[ 'id'=>$department->id])}} method="post"> @csrf @method('DELETE')
                                <a href={{route( 'departments.edit',[ 'id'=>$department->id])}} class="btn btn-primary mr-2">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach {{ $departments->links() }}
                </tbody>
            </table>

        </div>

    </div>

</div>
@endsection