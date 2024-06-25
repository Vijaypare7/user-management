@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
				    <form method="POST" action="{{ route('password.email') }}">
				        @csrf
				        <div class="form-group">
				            <label for="email">Email address</label>
				            <input type="email" class="form-control" id="email" name="email" required>
				        </div>
				        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
				    </form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
