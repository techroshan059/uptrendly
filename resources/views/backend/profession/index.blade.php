@extends('layouts.backendapp')
@section('admin-content')
  

    <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Profession Lists</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Profession Lists</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-4 col-12">
          <div class="btn-group float-md-right">
            <a href="{{ url('/admin/profession/addnew') }}" class="btn btn-info" type="button" ><i class="icon-plus mr-1"></i>Add Profession</a>
          </div>
        </div>
      </div>
      <div class="content-body">
        <div class="row">
                <div class="col s12">
                        @if(session()->has('successMessage'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! session('successMessage') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                   
                        @endif
                </div>
            <div class="col-12">
                <div class="card">
                
                    <div class="card-content">
                    
                        <div class="table-responsive">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(count($professionData)>0)
                                @foreach($professionData as $key => $professionData)
                                <tr>
                                    <td>1</td>
                                <td>{{$professionData->title}}</td>
                                <td>{{$professionData->description}}</td>
                                <td>{{$professionData->status}}</td>
                                <td>
                                <a href="{{url('admin/profession/edit'.'/'.$professionData->id )}}"><i style="font-size:20px" class="ft-edit"></i></a>
                                <a href="{{url('admin/profession/delete'.'/'.$professionData->id )}}"><i   onclick="if(!confirm('Are you sure to delete this record?'))" style="font-size:20px;color:red" class="ft-trash"></i></a>
                                
                            </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td  colspan="5" class="text-center">No record found <br> <a href="{{ url('/admin/profession/addnew') }}" >Add Profession</a></td>
                                </tr>
                                
                                @endif
                              </tbody>
                            </table>
                        </div>
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop()