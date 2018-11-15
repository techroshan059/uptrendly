@extends('layouts.backendapp')
@section('admin-content')
    <style>
        .chips.focus, input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
            border-bottom: 1px solid #65cadb;

            box-shadow: 0 1px 0 0 #65cadb;
        }
    </style>
    <div class="col m12 l21">
    <ol class="breadcrumbs">
        <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
        <li><a href="{{url('admin/profession')}}" style="color: black;">Profession List</a></li>
        <li style="color: #65cadb;">Add</li>
    </ol>
    </div>

    <div class="col m12 l12">
        <div class="card ui-app__page-content">
            <div class="card-content">
                <div class="card-title title">Add Profession</div>

                <div class="card-body">
                    <form action="" method="post">
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
                                <textarea name="description" id="description" placeholder="Profession Description Here...." cols="30" rows="3" class="form-control"></textarea>
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


                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action" style="background-color: #65cadb;">Add
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@stop()