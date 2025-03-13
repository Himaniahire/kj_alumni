@extends('admin.layouts.layout')

@section('content')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Add Role</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <form action="{{route('roles.store')}}" method="POST">
                            @csrf
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Role</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="permission_id">Permission</label>
                                    <select class="form-control" id="permission_id" data-choices data-choices-removeItem  name="permissions[]" id="permission_id" multiple>
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ ucwords(str_replace('-', ' ', $permission->name)) }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error" id="role_id_error"></span>
                                </div>
                            </div> <!-- end col -->

                            <div>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div> <!-- container -->

@endsection

@section('footer-script')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#permission_id').select2({
            placeholder: "Select Permissions"
        });
    });
</script>
@endsection

