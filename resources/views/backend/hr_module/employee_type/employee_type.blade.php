@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Employee Type
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('add.employeetype') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                    <table id="myTable" class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Type</th>
                                <th scope="col">Name</th>
                                <th scope="col">Deduct Salary on Absent?</th>
                                <th scope="col">Has Over Time?</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($emptypes as $emptype)
                            <tr>
                                <td>1</td>
                                <td>Shiftworkers</td>
                                <td>Casual</td>
                                <td>No</td>
                                <td>Yes</td>
                                <td>Active</td>
                                <td>
                                    <a href="{{ route('show.employeetype') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit.employeetype') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <!---- /session table ----->

                </form>
            </div>

        </div>
    </section>
</div>
@endsection

@section('fotter_js')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            //       columnDefs: [
            //     {
            //         targets: [0],
            //         orderData: [0, 1],
            //     },
            //     {
            //         targets: [1],
            //         orderData: [1, 0],
            //     },
            //     {
            //         targets: [4],
            //         orderData: [4, 0],
            //     },
            // ],
        });
    });
</script>
@endsection