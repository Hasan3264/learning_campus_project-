@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Working Shift
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addworkingshift') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center branch_table ">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Green Limit</th>
                                    <th scope="col">Orange Limit</th>
                                    <th scope="col">Red Limit</th>
                                    <th scope="col" width="35px">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <input type="text" name="" id="">
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
                                    <td>
                                        <input type="text" name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" name="" id="">
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
                                    <td>Morning</td>
                                    <td>08:00:00</td>
                                    <td>12:00:00</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="working_shift_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_shift_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Morning</td>
                                    <td>08:00:00</td>
                                    <td>12:00:00</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="working_shift_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_shift_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
    
                                <tr>
                                    <td>1</td>
                                    <td>Morning</td>
                                    <td>08:00:00</td>
                                    <td>12:00:00</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="working_shift_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_shift_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
    
                                <tr>
                                    <td>1</td>
                                    <td>Morning</td>
                                    <td>08:00:00</td>
                                    <td>12:00:00</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="working_shift_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_shift_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Morning</td>
                                    <td>08:00:00</td>
                                    <td>12:00:00</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="working_shift_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_shift_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
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