@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Leave Type</h2>
        </header>
        <div class="branch_edit">
            <div class="row">


                <div class="col-md-10 mb-3">
                    <label for="">Employee Type <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Employee Type</option>
                        <option value="">Casual</option>
                        <option value="">Contractual</option>
                        <option value="">Half-time</option>
                        <option value="">Full-time</option>
                        <option value="">Shift-worker</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Title  <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Short Title  <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Leave Days   <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                     <select name="" id="">
                         <option value="">Active</option>
                         <option value="">Inactive</option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <a href="" class="btn bg-gradient border-0 text-white">Create</a>
                     <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

            </div>
        </div>
    </div>
</section>

    </div>
</div>

@endsection
