@extends('layouts.master')

@section('title')
Edit Registered 

@endsection

@section('content')

<div class="contaner">
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
    <h1>User Approval </h1>
    

</div>

<div class="cardbody">
<form action="/role-register-update/{{$users->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
<div class="form-group">
    <label>Name</label>
    <input type="text" name="username" value="{{$users->name}}"class="form-control">
    <label>To Do List</label>
    <input type="text" name="to_do_list" value="{{$users->phone}}"class="form-control">
    
</div>

<div class="form-group">

    <label>Approval Status</label>
    <select name="approval"class="form-control">
        <option value = "Approve">Approve</option>
        <option value="Reject">Reject</option>
    </select>
</div>
<button type="submit" class="btn btn-success">Approve</button>
<a href="/role-register" class="btn btn-danger">Cancel</a>

</form>
</div>

</div>
</div>
</div>

</div>

@endsection

@section('scripts')

@endsection