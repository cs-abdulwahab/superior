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

            <label for="v-department" class="control-label">v-department</label>

            {{--  <select v-model="departments" name="department" id="department" class="form-control" tabindex="12">
                <option v-bind:value="department.id">@{{ department.name }}</option>
            </select>  --}}
{{--  
            <select  v-model="departments" id="deptList">
                <option v-for="dept in departments" v-bind:value="dept.id">
                    @{{dept.name}}
                </option>
            </select>    --}}
{{--  
            <button>@{{ selectedDepartment }}</button>  --}}


        </div>

        <div class="col">

          ss<i class="fab fa-accessible-icon"></i>    Employees  
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
var vue =     new Vue({

        el:'#app',
        data:{
            departments :[{'id':1,'name':'asd'}],
            
            selectedDepartment :'',

            employees :[],
        },
        methods: {
            
            onChangeCountry: function (event) {
                axios.get('http://jan.mc/api/getEmployeesBy/' + this.selectedDepartment)
                .then(function(){
                    this.employees = response.data;

                }).catch(function(error) {
                    console.log('an error occured ' + error);
                });
              }






          },

    });


</script>






@endpush