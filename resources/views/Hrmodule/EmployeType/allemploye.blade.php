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
                    <a href="{{ route('addemployetype') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center">
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
    
                                <tr>
                                    <th scope="row">1</th>
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
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </td>
                                  
                                    <td></td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Shiftworkers</td>
                                    <td>Casual</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="employe_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="employe_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Shiftworkers</td>
                                    <td>Casual</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="employe_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="employe_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Shiftworkers</td>
                                    <td>Casual</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="employe_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="employe_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Shiftworkers</td>
                                    <td>Casual</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="employe_type_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="employe_type_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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
@endsection