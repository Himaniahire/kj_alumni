@extends('admin.layouts.layout')

@section('content')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
                        <h4 class="header-title">Role List</h4>
                        <a href="{{route('roles.create')}}" class="btn btn-primary"><i
                        class="ti ti-plus me-1"></i>Add Role</a>
                    </div>

                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th style="text-align: end;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->name}}</td>
                                <td>
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="{{ route('roles.edit', ['role' => $role->id]) }}"
                                            class="btn btn-soft-success btn-icon btn-sm rounded-circle" title="Edit Role">
                                            <i class="ti ti-edit fs-16"></i>
                                         </a>
                                         <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this role?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-soft-danger btn-icon btn-sm rounded-circle" title="Delete Role">
                                                <i class="ti ti-trash fs-16"></i>
                                            </button>
                                        </form>


                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
</div>
@endsection
