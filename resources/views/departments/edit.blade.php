@extends('layouts.master')

<div class="container" style="background-color: whitesmoke;">

    <form action={{route( 'departments.update',['id'=>$department->id])}} method="POST">
        @csrf @method('PUT')
        <div class="form-group row">
            <label for="deptname" class="col"> Department Name </label>
            <input type="text" id="deptname" class="form-control" name="name" placeholder="Department Name" 
            
            value={{$department->name}}
            />

        </div>
        <div class="form-group row">
            <label for="deptloc" class="col"> Department Location </label>
            <input type="text" id="deptloc" class="form-control" name="location" placeholder="Department Location"
            
            value={{$department->location}}
            />

        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update Department</button>
            </div>
        </div>
    </form>
</div>