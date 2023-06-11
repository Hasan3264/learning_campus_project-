@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage User
                </h2>
            </header>
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{route('user.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                    <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- slide show table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Branch</th>
                                <th scope="col">User Type</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" style="display: none;">
                                        <option value="">Select Branch</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">Select Branch</span>
                                        <ul class="list">
                                            @foreach  ($studentlists as $key => $list)
                                            <li data-value="" class="option selected">{{ $list->relation_branch->branch_name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <select name="" style="display: none;">
                                        <option value="">Select User Type</option>
                                        <option value="">Admin</option>
                                        <option value="">Student</option>
                                        <option value="">Accountent</option>
                                        <option value="">Teacher</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">Select User Type</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected">Select User Type</li>
                                            <li data-value="" class="option">Admin</li>
                                            <li data-value="" class="option">Student</li>
                                            <li data-value="" class="option">Accountent</li>
                                            <li data-value="" class="option">Teacher</li>
                                        </ul>
                                    </div>
                                </td>
                                <td> <input type="text" name="" id=""> </td>
                                <td> <input type="text" name="" id=""> </td>
                                <td> <input type="text" name="" id=""> </td>
                                <td></td>
                            </tr>
                            @foreach ($studentlists as $key => $list)

                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>
                                    @if ($list->relation_branch)
                                    <p>{{ $list->relation_branch->branch_name }}</p>
                                    @else
                                    <p>No branch details available</p>
                                    @endif
                                </td>
                                <td>{{$list->user_type}}</td>
                                <td>@if ($list->relation_user)
                                    <p>{{ $list->relation_user->name }}</p>
                                    @else
                                    <p>No details available</p>
                                    @endif</td>
                                <td>
                                    {{$list->relation_user->email}}
                                </td>
                                <td>
                                    <a href="{{route('user.show', $list->id)}}"><i
                                            class="fa-solid fa-eye"></i></a>&nbsp; &nbsp;
                                    <a href="{{route('user.edit', $list->id)}}"><i
                                            class="fa-solid fa-pencil"></i></a>&nbsp; &nbsp;
                                    <a class="deleteRecord cursor-pointer" data-id="{{ $list->id }}"><i
                                            class="fa-solid fa-trash"></i></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    <!---- /slide show table ----->

                </form>
            </div>
        </div>
    </section>

</div>
@endsection
