@extends('layouts.backendapp')
@section('admin-content')
<div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add New Profession</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('admin/profession') }}">Profession Lists</a>
                    <li class="breadcrumb-item active"><a>Add Profession</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
       
      </div>


    <div class="col m12 l12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form method="post">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12 mb-12 focused">
                                <label for="title">Title <span class="error">*</span></label>
                                <input type="text" value="{{old('title')}}" autofocus="autofocus" name="title" id="title" placeholder="Profession Title Here...." class="form-control">
                                @if($errors->has('title'))
                                    <label id="name-error" class="error">{{$errors->first('title')}}</label>
                                @endif
                            </div>

                            <div class="col-md-12 mb-12 focused">
                                <label for="description">Description</label>
                                <textarea name="description" value="{{old('description')}}"  placeholder="Profession Description Here...." cols="30" rows="3" class="form-control"></textarea>
                                @if($errors->has('description'))
                                    <label id="name-error" class="error">{{$errors->first('description')}}</label>
                                @endif
                            </div>

                            <div class="col-md-12 mb-12 focused">
                                <label for="status">Would you like to display this Profession?  <span class="error">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Active" selected="selected">Yes</option>
                                    <option value="Inactive">No</option>
                                </select>

                            </div>
                            @if($errors->has('status'))
                                <label id="name-error" class="error">{{$errors->first('status')}}</label>
                            @endif


                            <div class="input-field col s12" style="margin-top:10px">
                                <button class="btn btn-info float-right" type="submit" name="action" style="background-color: #65cadb;"><i class="ft-save mr-1"></i> Save
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@stop()