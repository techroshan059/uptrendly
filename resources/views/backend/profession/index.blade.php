@extends('layouts.backendapp')
@section('admin-content')
    <style>

    </style>
    <div class="col s12">
    <ol class="breadcrumbs">
        <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
        <li style="color: #65cadb">Profession List</li>
        <div style="float:right;">
            +<a class="" href="{{url('admin/profession/addnew')}}">Add profession</a>
        </div>
    </ol>
    </div>




    <div class="col s12">
        @if(Session::has('successMessage'))
            <p class="alert alert-info">{{ Session::get('successMessage') }}</p>
        @endif
        <div class="card ui-app__page-content">
            <div class="card-content">


                <div class="card-body">
                     <table class="centered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($professionData as $key => $professionData)
                        <tr>
                            <td>{{$professionData->title}}</td>
                            <td>{{$professionData->description}}</td>
                            <td>{{$professionData->status}}</td>
                            <td>
                                <a href="{{url('admin/profession/edit')}}">Edit</a> | <a href="{{url('admin/profession/delete/{id}')}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@stop()