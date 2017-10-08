@extends('layouts.master')

@section('content')
    <div id="signUp">
        <form>
            <div class="form-group">
                <label for="usename">Username:</label>
                <input type="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Retype password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection