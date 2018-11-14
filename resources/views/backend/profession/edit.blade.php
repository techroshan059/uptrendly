@extends('layouts.backendapp')
@section('admin-content')
    <div class="col m12 l12">
    <ol class="breadcrumbs">
        <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
        <li><a href="{{url('admin/profession')}}" style="color: black;">Profession List</a></li>
        <li style="color: #65cadb;">Edit</li>
    </ol>
    </div>

    <div class="col m12 l12">
        <div class="card ui-app__page-content">
            <div class="card-content">
                <div class="card-title title">Edit Profession</div>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12 mb-12 focused">
                                <label for="title">Title <span class="error">*</span></label>
                                <input type="text" autofocus="autofocus" name="title" id="title" placeholder="Profession Title Here...." class="form-control">
                            </div>

                            <div class="col-md-12 mb-12 focused">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" placeholder="Profession Description Here...." cols="30" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mb-12 focused">
                                <label for="status">Would you like to display this Profession?  <span class="error">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Active" selected="selected">Yes</option>
                                    <option value="Inactive">No</option></select>
                            </div>


                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action" style="background-color: #65cadb;">Update
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@stop()