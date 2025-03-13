@extends('admin.layouts.layout')

@section('content')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
                        <h4 class="header-title">Alumnis List</h4>
                    </div>

                    {{-- <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Alumani Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Admission Year</th>
                                <th>Passing Year</th>
                                <th style="text-align: end;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnis as $alumni)
                            <tr>
                                <td>{{$alumni->name}} {{$alumni->sname}}</td>
                                <td>{{$alumni->email}}</td>
                                <td>{{$alumni->phone}}</td>
                                <td>{{$alumni->admission_year}}</td>
                                <td>{{$alumni->passing_year}}</td>
                                <td>
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="{{ route('alumnis.show',  $alumni->id) }}"
                                            class="btn btn-soft-primary btn-icon btn-sm rounded-circle" title="Edit Role">
                                            <i class="ti ti-eye fs-16"></i>
                                         </a>
                                         <form action="{{ route('alumnis.destroy', $alumni->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this role?');">
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
                    </table> --}}

                    <div class="border-top border-light">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Alumani Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Admission Year</th>
                                        <th>Passing Year</th>
                                        <th style="text-align: end;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnis as $alumni)
                                    <tr>
                                        <td>{{$alumni->name}} {{$alumni->sname}}</td>
                                        <td>{{$alumni->email}}</td>
                                        <td>{{$alumni->phone}}</td>
                                        <td>{{$alumni->admission_year}}</td>
                                        <td>{{$alumni->passing_year}}</td>
                                        <td>
                                            <div class="hstack gap-1 justify-content-end">
                                                <a data-bs-toggle="offcanvas" href="#alumni-details-modal" aria-controls="alumni-details-modal"
                                                    class="btn btn-soft-primary btn-icon btn-sm rounded-circle" title="Edit Role">
                                                    <i class="ti ti-eye fs-16"></i>
                                                </a>
                                                <a data-bs-toggle="offcanvas" href="#alumni-details-modal"
                                                    data-id="{{ $alumni->id }}"
                                                    class="btn btn-soft-primary btn-icon btn-sm rounded-circle view-alumni-details"
                                                    title="View Details">
                                                    <i class="ti ti-eye fs-16"></i>
                                                    </a>

                                            </button>
                                                <form action="{{ route('alumnis.destroy', $alumni->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this role?');">
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
                        </div>
                    </div>

                    <div class="offcanvas offcanvas-end w-lg-50" tabindex="-1" id="alumni-details-modal">
                        <div class="offcanvas-header d-flex flex-wrap gap-2 align-items-start">
                            <img class="me-2 rounded-circle" id="modal-alumni-img" src="https://via.placeholder.com/40" alt="profile image" height="40">
                            <div class="flex-grow-1">
                                <h6 class="fs-16 mb-1" id="modal-alumni-name">Alumni Name</h6>
                                <p class="text-muted mb-0" id="modal-alumni-email">Email: </p>
                            </div>
                            <div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="offcanvas-body">
                            <p><strong>Phone:</strong> <span id="modal-alumni-phone"></span></p>
                            <p><strong>Admission Year:</strong> <span id="modal-alumni-admission"></span></p>
                            <p><strong>Passing Year:</strong> <span id="modal-alumni-passing"></span></p>
                        </div>
                    </div>


                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
</div>
@endsection

@section('footer-script')
<script>
    $(document).ready(function () {
        $('.view-alumni-details').on('click', function () {
            let alumniId = $(this).data('id');

            $.ajax({
                url: "{{ route('alumnis.show') }}",
                type: "GET",
                data: { id: alumniId },
                success: function (response) {
                    if (response.success) {
                        $('#modal-alumni-name').text(response.data.name);
                        $('#modal-alumni-email').text('Email: ' + response.data.email);
                        $('#modal-alumni-phone').text(response.data.phone);
                        $('#modal-alumni-admission').text(response.data.admission_year);
                        $('#modal-alumni-passing').text(response.data.passing_year);

                        // Optional: Profile Image
                        if (response.data.image_url) {
                            $('#modal-alumni-img').attr('src', response.data.image_url);
                        }

                        // Show Modal
                        let modal = new bootstrap.Offcanvas('#alumni-details-modal');
                        modal.show();
                    } else {
                        alert('Alumni data not found.');
                    }
                },
                error: function () {
                    alert('Something went wrong while fetching details.');
                }
            });
        });
    });
</script>



@endsection
