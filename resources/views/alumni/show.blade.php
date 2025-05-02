@extends('admin.layouts.layout')
@section('subtitle', 'Alumni')
@section('content')
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="bg-picture card-body">
                        <div class="d-flex align-items-top">
                            <img src="{{ asset( $alumni->profile ?? 'assets/images/testimonial/author-1.png' )  }}"
                                class="flex-shrink-0 rounded-circle avatar-xl img-thumbnail float-start me-3"
                                alt="profile-image">

                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="m-0 lh-base">{{ $alumni->name .' ' . $alumni->mname .' ' . $alumni->sname  }}</h4>
                                <p class="text-muted"><i>Alumni</i></p>
                                <p>Email: {{ $alumni->email  }}</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Phone:</strong> {{ $alumni->phone  }}</p>
                                        <p><strong>Admission Year:</strong> {{ $alumni->admission_year  }}</p>
                                        <p><strong>Passing Year:</strong> {{ $alumni->passing_year  }}</p>
                                        <p><strong>Date of Birth:</strong> {{ $alumni->dob  }}</p>
                                        <p><strong>Gender:</strong> {{ $alumni->gender  }}</p>
                                        <p><strong>Address:</strong>{{ $alumni->address }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Branch:</strong> {{ $alumni->branch  }}</p>
                                        <p><strong>Other Institute:</strong> {{ $alumni->other_isntitute  }}</p>
                                        <p><strong>Organization:</strong>{{ $alumni->name_organization  }}</p>
                                        <p><strong>Job:</strong> {{ $alumni->job  }}</p>
                                        <p><strong>Started Career:</strong> {{ $alumni->year  }}</p>
                                        <p><strong>Other Achievements:</strong> {{ $alumni->other_achivements  }}</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col-->
        </div> <!-- end row-->
    </div>


    @endsection

    @section('footer-script')


@endsection
