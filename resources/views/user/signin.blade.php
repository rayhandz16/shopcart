@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Sign In</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
@endsection