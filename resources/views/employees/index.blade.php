@extends('layouts.master') 
@section('main-content')

<div class="container">
    <div class="row">

        <div class="col-2">
            Department
            <select name="departments" id="departments">
                    <option >Choose department</option>
                @foreach($departments as $department)
                    <option value={{$department->id}}>{{$department->name}}</option>
                @endforeach

            </select>

        </div>

        <div class="col">

            Employees
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($employees as $employee)

                    <tr>
                        <td scope="row">{{$loop->index}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->phone}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>

</div>
@endsection