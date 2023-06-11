@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Working Shift View
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{ route('add.workingshift') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('edit.workingshift') }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>Morning</td>
                            </tr>
                            <tr>
                                <th>Start Time </th>
                                <td>08:00:00</td>
                            </tr>
                            <tr>
                                <th>End Time</th>
                                <td>12:00:00</td>
                            </tr>
                            <tr>
                                <th>Green Limit</th>
                                <td>5</td>
                            </tr>

                            <tr>
                                <th>Orange Limit</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th>Red Limit</th>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <th>Create At</th>
                                <td>2020-08-13 07:16:45</td>
                            </tr>
                            <tr>
                                <th>Create By</th>
                                <td>tsit</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>2022-02-03 04:58:07</td>
                            </tr>
                            <tr>
                                <th>Modified By</th>
                                <td>Learning Campus</td>
                            </tr>

                        </tbody>
                    </table>

                    <!---- /session View table ----->
                </form>
            </div>

        </div>
    </section>

</div>
@endsection