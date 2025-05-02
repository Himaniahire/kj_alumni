@extends('admin.layouts.layout')

@section('content')
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
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
                                                <td>{{ $alumni->name }} {{ $alumni->sname }}</td>
                                                <td>{{ $alumni->email }}</td>
                                                <td>{{ $alumni->phone }}</td>
                                                <td>{{ $alumni->admission_year }}</td>
                                                <td>{{ $alumni->passing_year }}</td>
                                                <td>
                                                    <div class="hstack gap-1 justify-content-end">

                                                        <a data-bs-toggle="offcanvas" href="#alumni-details-modal"
                                                            data-id="{{ $alumni->id }}"
                                                            data-name="{{ $alumni->name }} {{ $alumni->sname }}"
                                                            data-email="{{ $alumni->email }}"
                                                            data-phone="{{ $alumni->phone }}"
                                                            data-admission-year="{{ $alumni->admission_year }}"
                                                            data-passing-year="{{ $alumni->passing_year }}"
                                                            data-profile="{{ $alumni->profile }}"
                                                            data-dob="{{ $alumni->dob }}"
                                                            data-branch="{{ $alumni->branch }}"
                                                            data-other-institute="{{ $alumni->other_isntitute }}"
                                                            data-job="{{ $alumni->job }}"
                                                            data-profile="{{ $alumni->profile }}"
                                                            data-other-achievements="{{ $alumni->other_achivements }}"
                                                            class="btn btn-soft-primary btn-icon btn-sm rounded-circle view-alumni-details"
                                                            title="View Details">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </a>



                                                        </button>
                                                        <form action="{{ route('alumnis.destroy', $alumni->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this Alumni?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle"
                                                                title="Delete Role">
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



                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div>
    <div class="offcanvas offcanvas-end w-lg-50" tabindex="-1" id="alumni-details-modal">
        <div class="offcanvas-header d-flex flex-wrap gap-2 align-items-start">
            <img class="me-2 rounded-circle" id="modal-alumni-img" src=""
                alt="profile image" height="40">
            <div class="flex-grow-1">
                <h6 class="fs-16 mb-1" id="modal-alumni-name">Alumni Name</h6>
                <p class="text-muted mb-0" id="modal-alumni-email">Email: </p>
            </div>
            <div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>

        <div class="offcanvas-body">
            <p><strong>Phone:</strong> <span id="modal-alumni-phone"></span></p>
            <p><strong>Admission Year:</strong> <span id="modal-alumni-admission"></span></p>
            <p><strong>Passing Year:</strong> <span id="modal-alumni-passing"></span></p>
            <p><strong>Date of Birth:</strong> <span id="modal-alumni-dob"></span></p>
            <p><strong>Branch:</strong> <span id="modal-alumni-branch"></span></p>
            <p><strong>Other Institute:</strong> <span id="modal-alumni-other-institute"></span></p>
            <p><strong>Job:</strong> <span id="modal-alumni-job"></span></p>
            <p><strong>Other Achievements:</strong> <span id="modal-alumni-other-achievements"></span>
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        $(document).ready(function() {
            var alumniProfilePath = '{{ asset('') }}';

            // Manually initialize the offcanvas if necessary
            var myOffcanvas = new bootstrap.Offcanvas(document.getElementById('alumni-details-modal'));

            $(".view-alumni-details").click(function() {
                // Fetch data from the clicked button's data attributes
                var name = $(this).data('name');
                var email = $(this).data('email');
                var phone = $(this).data('phone');
                var admissionYear = $(this).data('admission-year');
                var passingYear = $(this).data('passing-year');
                var profile = $(this).data('profile');
                var dob = $(this).data('dob');
                var branch = $(this).data('branch');
                var otherInstitute = $(this).data('other-institute');
                var job = $(this).data('job');
                var otherAchievements = $(this).data('other-achievements');
                var profile = $(this).data('profile');

                // Set the data in the modal
                $('#modal-alumni-name').text(name);
                $('#modal-alumni-email').text('Email: ' + email);
                $('#modal-alumni-phone').text(phone);
                $('#modal-alumni-admission').text(admissionYear);
                $('#modal-alumni-passing').text(passingYear);
                $('#modal-alumni-dob').text('Date of Birth: ' + dob);
                $('#modal-alumni-branch').text('Branch: ' + branch);
                $('#modal-alumni-other-institute').text('Other Institute: ' + otherInstitute);
                $('#modal-alumni-job').text('Job: ' + job);
                $('#modal-alumni-other-achievements').text('Other Achievements: ' + otherAchievements);

                // Set the profile image if available
                if (profile) {
                    $('#modal-alumni-img').attr('src', alumniProfilePath + '' +
                    profile); // Adjust this path accordingly
                } else {
                    $('#modal-alumni-img').attr('src', 'https://via.placeholder.com/40'); // Fallback image
                }

                // Open the modal manually
                myOffcanvas.show();
            });
        });
    </script>

    @endsection

    @section('footer-script')


@endsection
