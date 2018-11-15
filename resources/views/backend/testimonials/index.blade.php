@extends('layouts.backendapp')
@section('admin-content')
    <style>

    </style>
    <div class="col s12">
        <ol class="breadcrumbs">
            <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
            <li style="color: #65cadb">Tetimonials List</li>
            <div style="float:right;">
                +<a class="" href="{{url('admin/testimonials/addnew')}}">Add Testimonials</a>
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
                            <th>Full Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Photo</th>
                            <th>Sort_order</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($testimonialData as $testimonialData)
                        <tr>
                            <td>{{$testimonialData->fullname}}</td>
                            <td>{{$testimonialData->description}} </td>
                            <td>{{$testimonialData->status}}</td>
                            <th>{{$testimonialData->photo_path}}</th>
                            <td>{{$testimonialData->sort_order}}</td>
                            <td>
                                <a href="{{url('admin/testimonials/edit'.'/'.$testimonialData->id)}}">Edit</a> | <a href="{{url('admin/testimonials/delete'.'/'.$testimonialData->id)}}">Delete</a>
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