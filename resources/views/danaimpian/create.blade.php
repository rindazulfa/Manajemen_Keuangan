@extends('master')
@section('content')
<section class="feature_area section_gap_top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Register Member Linux User Group</h4>
                <form action="{{ URL('register') }}" class="mt-5" method="POST" enctype="multipart/form-data" id="registration_form">
                    {{csrf_field()}}
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first()}}
                    </div>
                    @endif
                    <div class="form-row mt-2">
                        <!-- Name -->
                        <div class="form-group col-sm-6">
                            <label class="font-weight-bold text-dark" for="name"> Name <span class="text-danger">*</span> </label>
                            <input id="name" type="text" class="form-control" name="name" placeholder="ex: Linux User Group" required>
                        </div>

                        <!-- Nickname -->
                        <div class="form-group col-sm-6">
                            <label class="font-weight-bold text-dark" for="nickname">Nickname <span class="text-danger">*</span></label>
                            <input id="nickname" type="text" class="form-control" name="nickname" placeholder="ex: LUG" required >
                            <span class="nickname-validation text-danger" id="nickname_error_message"></span>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <!-- Student Id Number -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="nim">NIM/KTP <span class="text-danger">*</span></label>
                            <input id="nim" type="text" class="form-control" name="student_id_number" placeholder="ex: 123456789" required>
                        </div>

                        <!-- Study Program -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="study_program">Program Study <span class="text-danger">*</span></label>
                            <select id="study_program" name="study_program" required class="form-control pt-0">
                                <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                <option value="S1 Teknik Komputer">S1 Teknik Komputer</option>
                                <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <!-- Email -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="email">Email <span class="text-danger">*</span></label>
                            <input id="email" type="email" class="form-con  trol" name="email" placeholder="ex: SobatLUG@dinamika.edu" required>

                        </div>
                        <!-- Telephone -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="phone_number">Phone Number <span class="text-danger">*</span></label>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            <input  id="phone_number" type="text" class="form-control" name="phone_number" placeholder="0123456789"  required aria-describedby="basic-addon1">
                            </div>
                            <span class="phone_number-validation text-danger" id="phone_number_error_message"></span>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <!-- Instagram -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="instagram">Instagram
                                <span class="font-italic font-weight-light">(Optional)</span></label>
                            <input id="instagram" type="text" class="form-control" name="instagram" placeholder="ex: LUG Dinamika or -" >
                            <span class="instagram-validation text-danger" id="instagram_error_message"></span>
                        </div>
                        <!-- Github -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="github">Github
                                <span class="font-italic font-weight-light sub-label">(Optional)</span>
                            </label>
                            <input id="github" type="text" class="form-control" name="github" placeholder="ex: Sobat LUG or -">
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <!-- Dribbble -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="dribble">Dribbble
                                <span class="font-italic font-weight-light sub-label">(Optional)</span>
                            </label>
                            <input id="dribble" type="text" class="form-control" name="dribbble" placeholder="ex: Sobat LUG or -">
                        </div>
                        <!-- Desc -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="desc">Description
                                <span class="font-italic font-weight-light sub-label">(Optional)</span>
                            </label>
                            <textarea id="desc" name="desc" id="" class="form-control" rows="3" placeholder="ex: Lorem Ipsum Dolor Sit or -"></textarea>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <!-- Photo -->
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark" for="">Photo
                                <span class="text-danger">*</span>
                            </label>
                            <div class="row pl-3">
                                <div class="col-sm-4 rectangle-bg d-flex">
                                    <input type="file" id="photo" name="photo" onchange="ValidateFileUpload(this);">
                                    <label for="photo" class="m-auto" id="photo-label">
                                        <i class="fas fa-camera fa-2x align-self-center" style="color: #e7e7e7"></i>
                                    </label><br>
                                </div>
                                <div class="col-sm-8 d-flex">
                                    <label for="" class="sub-label w-75 align-self-end">
                                        <b class="text-dark">File Size 2mb Allowed file extension: .JPG .JPEG .PNG</b>
                                    </label>
                                </div>
                            </div>
                            <span id="filename" class="sub-label"></span>
                        </div>
                        <div class="col-md-6 d-flex">
                            <button type="submit" class="btn primary-btn align-self-end text-white" id="myBtn">Sign Up</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-md-6 align-self-center p-5">
                <img src="{{ asset('img/elements/remote-team.svg') }}" alt="" width="100%">
            </div>

        </div>
</section>

@endsection