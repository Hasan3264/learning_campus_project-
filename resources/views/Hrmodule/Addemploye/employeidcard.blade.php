@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Employee ID Card</h2>
        </header>
        
<div class="academic_info student_search">


<div class="container">

<div class="row mt-3 mb-4">

<div class="col-12 col-md-6 col-lg-4">
    <label for="">Type <span class="text-danger">*</span></label>
    <select name="" id="">
        <option value="">All</option>
        <option value="">Casual</option>
        <option value="">Contractual</option>
        <option value="">Full-time</option>
        <option value="">Half-time</option>
        <option value="">Part-time</option>
    </select>
</div><br><br>

<div class="col-12 col-md-6 col-lg-4">
    <label for=""> Shift <span class="text-danger">*</span></label>
    <select name="" id="">
        <option value="">Casual</option>
        <option value="">Contractual</option>
        <option value="">Full-time</option>
        <option value="">Half-time</option>
        <option value="">Part-time</option>
    </select>
</div><br><br>

<div class="col-12 col-md-6 col-lg-4">
    <label for="">Employee<span class="text-danger">*</span></label>
    <select name="" id="">
        <option value="">Select Employee</option>
        <option value="">Afzal</option>
        <option value="">Rana</option>
        <option value="">Rina</option>
        <option value="">Kamal</option>
        <option value="">Risi</option>
    </select>
</div><br><br>

</div>


</div>

</div>


<p class="text-center">
<a href="#" class="btn btn-primary px-5">Search</a>
</p>                 


</div>    
</section>
</div>
@endsection