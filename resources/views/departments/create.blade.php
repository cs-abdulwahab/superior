@extends('layouts.master')

<div class="container" style="background-color: whitesmoke;">

    <form action={{route( 'departments.store')}} method="POST">
        @csrf 

        <div class="form-group row">
                <label for="deptname" class="col"> Department Name </label>        
                    <input type="text" id="deptname" class="form-control" name="name"
                      placeholder="Department Name"/>
        
            </div>
            <div class="form-group row">
                    <label for="deptloc" class="col"> Department Location </label>        
                        <input type="text" id="deptloc" class="form-control" name="location"
                          placeholder="Department Location"/>
            
                </div>
                    
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Create Department</button>
            </div>
        </div>
    </form>
</div>