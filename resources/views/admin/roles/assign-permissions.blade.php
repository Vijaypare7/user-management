@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Assign Permissions to Role: {{ $role->name }}</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('admin.roles.permissions.assign', $role->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="permissions">Permissions</label>
            <select name="permissions[]" id="permissions" class="form-control" multiple>
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}" @if($role->permissions->contains($permission->id)) selected @endif>
                        {{ $permission->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Assign Permissions</button>
    </form>
</div>
@endsection
