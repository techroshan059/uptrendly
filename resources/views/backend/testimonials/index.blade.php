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
        <div class="card ui-app__page-content">
            <div class="card-content">


                <div class="card-body">
                    <table class="centered">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Description</th>
                            <th>Profession title</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alvin Care</td>
                            <td>Lorem ipsum dolor adipisicing elit.  </td>
                            <td>musician</td>
                            <th>pixel.jpg</th>
                            <td>y</td>
                            <td>
                                <a href="{{url('admin/testimonials/edit')}}">Edit</a> | <a href="{{url('admin/testimonials/delete/{id}')}}">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@stop()