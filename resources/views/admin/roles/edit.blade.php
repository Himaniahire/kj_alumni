@extends('admin.layouts.layout')

@section('content')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Edit Role</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Role</label>
                                    <input type="text" id="name" name="name" value="{{$role->name}}" class="form-control">
                                </div>
                                <select class="form-control" data-choices data-choices-removeItem name="permissions[]" id="permissions" multiple="multiple">
                                    <option value="">Select Permission</option>
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}"
                                            @if($role->hasPermissionTo($permission->name)) selected @endif>
                                            {{ ucwords(str_replace('_', ' ', $permission->name)) }}
                                        </option>
                                    @endforeach
                                </select>
                                <div>
                                    <button type="submit" class="btn btn-primary">Update Role</button>
                                </div>
                            </form>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</div> <!-- container -->

@endsection
