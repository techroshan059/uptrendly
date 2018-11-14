@extends('layouts.backendapp')
@section('admin-content')
    <style>

    </style>
    <ol class="breadcrumbs">
        <li><a href="#">Dashboard</a></li>
        <li style="color: #65cadb">Faqs</li>
        <div style="float:right;">
            <a class="waves-effect waves-light btn btn-rounded" href="{{url('admin/faqs/addnew')}}" style="background-color: #65cadb" >Add faqs</a>
        </div>
    </ol>




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
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Category</th>
                            <th>Sort Order</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($faqsData as $key => $faqsData)
                        <tr>
                            <td>{{$faqsData->question}}</td>
                            <td>{{$faqsData->answer}}</td>
                            <td>{{$faqsData->type}}</td>
                            <td>{{$faqsData->sort_order}}</td>
                            <td>{{$faqsData->status}}</td>
                            <td>
                                <a href="{{url('admin/faqs/edit'.'/'.$faqsData->id )}}">Edit</a> | <a href="{{url('admin/faqs/delete'.'/'.$faqsData->id)}}">Delete</a>
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