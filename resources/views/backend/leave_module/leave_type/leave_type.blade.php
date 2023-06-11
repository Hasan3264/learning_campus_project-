@extends('layouts.AdminPanal')
@section('content')


    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Leave Type
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{route('add_leave_type')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Employee Type</th>
                                <th scope="col">Title</th>
                                <th scope="col">Short Title</th>
                                <th scope="col">Leave Days</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Casual</option>
                                        <option value="">Parmanant</option>
                                        <option value="">Fixed-term</option>
                                        <option value="">Shift-worker</option>
                                        <option value="">Outworkers</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>MPL</td>
                                <td>15</td>
                                <td>
                                    <a href="leave_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="leave_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>MPL</td>
                                <td>15</td>
                                <td>
                                    <a href="leave_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="leave_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>MPL</td>
                                <td>15</td>
                                <td>
                                    <a href="leave_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="leave_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>MPL</td>
                                <td>15</td>
                                <td>
                                    <a href="leave_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="leave_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>MPL</td>
                                <td>15</td>
                                <td>
                                    <a href="{{ route('view_leave_type') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit_leave_type') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('delete_leave_type') }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>


                        </tbody>
                    </table>

                <!---- /session table ----->

            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
