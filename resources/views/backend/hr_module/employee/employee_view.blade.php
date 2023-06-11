@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Employee Details
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('add.employee') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{ route('edit.employee') }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <a href="javascript:void(0)" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>

                    <div class="studentDetTable">

                        <div class="student_details">

                            <img src="Logo _ Icon/preload2.png" class="copyright_em_view" alt="">

                            <div class="stuDetTop">
                                <div>
                                    <h3>Mahim</h3>
                                    <p>Address : Dhaka</p>
                                    <p> Mobile : 00000000000</p>
                                </div>
                                <div>
                                    <img src="assets/img/student.png" alt="">
                                </div>
                            </div>

                            <div class="stuDetMid">
                                <div class="table-responsive">
                                    <h2>Professional Information</h2>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Learning Campus (Main Branch)</th>
                                                <th scope="col">Employee Type</th>
                                                <th scope="col">Full Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Designation</th>
                                                <td>Bangla Lecturer</td>
                                                <td>Working Shift</td>
                                                <td>Full Time</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td>Grade 2</td>
                                                <td>Joining Date</td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Basic Salary</th>
                                                <td>16000</td>
                                                <td>Device ID</td>
                                                <td>A8LN192260201</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Finger ID</th>
                                                <td>1</td>
                                                <td>Card No</td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bank Account</th>
                                                <td>N/A</td>
                                                <td>Srl. No </td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Prev. Institute </th>
                                                <td>N/A</td>
                                                <td>Pre. Designation</td>
                                                <td>N/A</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <h2>Contact Information</h2>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">00000000000</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">N/A</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Present Address</th>
                                                <td>Dhaka</td>
                                                <td>Permanant Address</td>
                                                <td>Dhaka</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">FB URL</th>
                                                <td>......</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <h2>Personal Information</h2>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>Afzal</td>
                                                <td>ID</td>
                                                <td>20200001</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Father's Name</th>
                                                <td>Bari</td>
                                                <td>Mother's Name</td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date of Birth</th>
                                                <td>01-Jan-2000</td>
                                                <td>Blood Group</td>
                                                <td>A+</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Maritial Status</th>
                                                <td>Married</td>
                                                <td>Religion</td>
                                                <td>Islam</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Spouse Name</th>
                                                <td>Hafsa</td>
                                                <td>No of Child</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">National ID</th>
                                                <td>NA</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="table-responsive">
                                    <h2>Educational Qualification</h2>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Sl. No.</th>
                                                <td>Institute Name</td>
                                                <td>Name of The Degree</td>
                                                <td>Country</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Dhaka University</td>
                                                <td>Masters Of Bachelor Science</td>
                                                <td>Bangladesh</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection