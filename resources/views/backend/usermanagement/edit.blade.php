@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Edit User</h2>
            </header>
            <div class="card-body">
                <form name="InsertSubForm" id="InsertSubForm" class="es-form es-add-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">User Type <span>*</span></label>
                            <select id="subject" name="subject" class="es-add-select">
                                <option value="">Select User Type</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Admin">Admin</option>
                                <option value="Data_Entry_Operator">Data Entry Operator</option>
                                <option value="Human_Resource">Human Resource</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                            </select>
                            @error('subject')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror

                            <label for="branch">Branch <span>*</span></label>
                            <select id="branch" name="branch" class="es-add-select">
                                <option value="">Select Branch</option>
                                @foreach ($branchs as $branch)
                                <option value="{{$branch->id}}">{{$branch->branch_name}}</option>
                                @endforeach
                            </select>
                            @error('branch')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror

                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Username <span>*</span> </label>
                            <input type="text" name="username" id="username">
                            @error('username')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Email</label>
                            <input type="email" name="email" id="email">
                            @error('email')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Password <span>*</span></label>
                            <input type="password" name="password" id="password">
                            <span class="btn  bg-gradient border-0 text-white mt-2" id="togglePassword">Show
                                Password</span>
                            @error('email')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Repeat Password <span>*</span></label>
                            <input type="password" name="confirmpassword" id="confirmpassword">
                            @error('confirmpassword')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                    </div>
                    <p>
                        <button type="button" class="btn bg-gradient border-0 text-white">Create</button>
                        <button type="reset" class="btn  border-0 bg-danger text-white">Cancel</button>
                    </p>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
