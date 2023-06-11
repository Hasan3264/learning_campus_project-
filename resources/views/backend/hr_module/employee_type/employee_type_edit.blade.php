@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

                    <section class="es-form-area">
                        <div class="card">
                            <header
                                class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                                <h2 class="text-white mb-0">Update Employee Type</h2>
                            </header>
                            <div class="session_add">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for>Type <span>*</span></label>
                                        <select name id>
                                            <option value>Full-time</option>
                                            <option value>Part-time</option>
                                            <option value>Half-time</option>
                                            <option value>Contractual</option>
                                            <option value>Shiftworker</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for>Name <span>*</span></label>
                                        <input type="text" placeholder=" " name
                                            id>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for>Deduct Salary on Absent?
                                            <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio"
                                                placeholder="Education" name
                                                id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio"
                                                placeholder="Education" name
                                                id="check">
                                            <b>No</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for>Has Over Time?<span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio"
                                                placeholder="Education" name
                                                id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio"
                                                placeholder="Education" name
                                                id="check">
                                            <b>No</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for>Status <span>*</span></label>
                                        <select name id>
                                            <option value>Active</option>
                                            <option value>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <a href
                                                class="btn bg-gradient border-0 text-white">Create</a>
                                            <a href
                                                class="btn  cancel_btn border-0 text-white">Cancel</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                </div>
@endsection