@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">    
    <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add Employees</h2>
                    </header>
                    
            <div class="academic_info">
            <h5>
            <i class="fa-solid fa-circle-info"></i> Professional Information
            </h5>

            <div class="container">

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Type <span class="text-danger">*</span></label>
                <input type="radio" name="a" id="rad_btn"><span class="rad_txt">Teacher</span>
                <input type="radio" name="a" id="rad_btn"><span class="rad_txt">Staffs</span> <br>
                <input type="radio" name="a" id="rad_btn"><span class="rad_txt">Board of Directors</span>
                <input type="radio" name="a" id="rad_btn"><span class="rad_txt">Academic Comitte</span>
            </div>

            <div class="col-6">
                <label for="">Device Serial / MAC</label>
                <input type="text" name="" id="">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Employee Type <span class="text-danger">*</span></label>
                <select name="" id="">
                    <option value="">Select Employee Type</option>
                    <option value="">All</option>
                    <option value="">Casual</option>
                    <option value="">Contractual</option>
                    <option value="">Full-time</option>
                    <option value="">Half-time</option>
                    <option value="">Part-time</option>
                </select>
            </div>

            <div class="col-6">
                <label for="">Tracking ID </label>
                <input type="text" name="" id="">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Desgination <span>*</span></label>
                <select name="" id="">
                    <option value="">Select Desgination</option>
                    <option value="">Director</option>
                    <option value="">Member</option>
                </select>
            </div>

            <div class="col-6">
                <label for="">RFID Card No</label>
                <input type="text">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Working Shift</label>
                <select name="" id="">
                    <option value="">Select Shift Name</option>
                    <option value="">Casual</option>
                    <option value="">Contractual</option>
                    <option value="">Full-time</option>
                    <option value="">Half-time</option>
                    <option value="">Part-time</option>
                </select>
            </div>

            <div class="col-6">
                <label for="">Joining Date </label>
                <input type="date">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Grade <span>*</span> </label>
                <select name="" id="">
                    <option value="">Select Grade</option>
                    <option value="">Grade.1(18000)</option>
                    <option value="">Grade.1(18000)</option>
                    <option value="">Grade.1(18000)</option>
                    <option value="">Grade.1(18000)</option>
                    <option value="">Grade.1(18000)</option>
                    <option value="">Grade.1(18000)</option>
                </select>
            </div>

            <div class="col-6 toggle-group">        
                <label for="">Bank Account No</label>
                <input type="text">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Rank <span>*</span> </label>
                <input type="text">
            </div>

            <div class="col-6 toggle-group">        
                <label for="">Previous Institute</label>
                <input type="text">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Employee ID <span>*</span> </label>
                <input type="text">
            </div>

            <div class="col-6 toggle-group">        
                <label for="">Previous Designation</label>
                <input type="text">
            </div>

            </div>

            </div>

            </div>

            <div class="academic_info">
            <h5>
            <i class="fa-solid fa-circle-info"></i> Personal Information
            </h5>

            <div class="container">

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" name="" id="">
            </div>

            <div class="col-6">
                <label for="">Father's Name <span class="text-danger">*</span></label>
                <input type="text" name="" id="">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Mobile <span class="text-danger">*</span></label>
                <input type="text" name="" id="">
            </div>

            <div class="col-6">
                <label for="">Mother's Name <span class="text-danger">*</span></label>
                <input type="text" name="" id="">
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Email</label>
                <input type="text">
            </div>

            <div class="col-6">
                <label for="">Matarial Status<span class="text-danger">*</span></label>
                <select name="" id="">
                    <option value="">Married</option>
                    <option value="">Unmarried</option>
                </select>
            </div>

            </div>



            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Date Of Birth</label>
                <input type="date">
            </div>

            <div class="col-6">
                <label for="">Religion <span class="text-danger">*</span></label>
                <select name="" id="">
                    <option value="">Islam</option>
                    <option value="">Hindu</option>
                </select>
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">National Id</label>
            <input type="text">
            </div>

            <div class="col-6 toggle-group">        
                <label for="">Blood Group</label>
            <select name="" id="">
                <option value="">A+</option>
                <option value="">O+</option>
                <option value="">A-</option>
                <option value="">B-</option>
                <option value="">AB</option>
            </select>
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Photos</label>
            <input type="file" id="file">
            <label for="file" id="fileCustom"  class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
            <span>Image Width = 262px and Height = 300px</span>
            </div>

            <div class="col-6 toggle-group">        
                <label for="">Gender</label>
            <select name="" id="">
                <option value="">Male</option>
                <option value="">Female</option>
            </select>
            </div>

            </div>

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Facebook Link</label>
            <input type="tetx">
            </div>

            </div>

            </div>

            </div>

            <div class="academic_info">
            <h5>
            <i class="fa-solid fa-circle-info"></i> Educational Qualification
            </h5>

            <div class="container">

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Name of the Institue</label>
                <input type="text" name="" id="">
            </div>

            <div class="col-6">
                <label for="">Name of the Degree</label>
                <input type="text" name="" id="">
            </div>

            <div class="col-6 mt-2">
                <label for="">Country Name</label>
                <input type="text" name="" id="">
            </div>

            <div class="col-6 mt-2">
                <a href="javascript:void(0)"  class="add_qualification_field">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>

            </div>


            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Major Subject </label>
                <input type="text">
            </div>

            <div class="col-6">
                <label for="">Extra Qualification</label>
                <input type="text">
            </div>

            </div>

            </div>

            </div>


            <div class="academic_info">
            <h5>
            <i class="fa-solid fa-circle-info"></i> Contact Information
            </h5>

            <div class="container">

            <div class="row mt-3 mb-4">

            <div class="col-6">
                <label for="">Present Address <span class="text-danger">*</span></label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="col-6">
                <label for="">Permanant Address <span class="text-danger">*</span></label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            </div>

            </div>

            </div>


            <p class="text-center">
            <a href="#" class="btn btn-primary px-5">Create</a>
            <a href="#" class="btn text-white px-5" style="background-color: red;">Cancel</a>
            </p>                 

            </div>    
    </section>

</div>
@endsection