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
                <a href="{{route('add_leave_type')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-plus"></i></a>
                <!---- session table  ----->
                    <table id="myTable" class="table table-bordered mt-3 text-center">
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
                                <td>2</td>
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
                                <td>3</td>
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
                                <td>4</td>
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
                                <td>5</td>
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

@section('fotter_js')
<script>
    $(document).ready(function(){
          $('#myTable').DataTable({
              columnDefs: [
            {
                targets: [0],
                orderData: [0, 1],
            },
            {
                targets: [1],
                orderData: [1, 0],
            },
            {
                targets: [4],
                orderData: [4, 0],
            },
        ],
          });
    });
</script>
@endsection
