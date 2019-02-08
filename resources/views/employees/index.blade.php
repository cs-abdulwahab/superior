@extends('layouts.master') 
@section('main-content')

<div class="container" id="app">
    <div class="row">

        <div class="col-2">
            Department
            <select name="department" id="department" class="form-control">
                    <option value="0" selected disabled>Choose department</option>
                @foreach($departments as $department)
                    <option value={{$department->id}}>{{$department->name}}</option>
                @endforeach

            </select>

        </div>

        <div class="col">

          <i class="fab fa-accessible-icon"></i>    Employees  
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
 @push('scripts')

<script type="text/javascript">
  new Vue({

        el:'#app',
        data:{
            
        },
        methods: {
            

          },

          created:function(){
console.log('this is the created function');

          }


    });


</script>






@endpush