@extends('layouts.backendapp')
@section('admin-content')
    <div class="col m12 l12">
        <ol class="breadcrumbs">
            <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
            <li><a href="{{url('admin/testimonials')}}" style="color: black;">Testimonials List</a></li>
            <li style="color: #65cadb;">Add</li>
        </ol>
    </div>

    <div class="col m12 l12">
        <div class="card ui-app__page-content">
            <div class="card-content">
                <div class="card-title title">Add Testimonials</div>

                <div class="card-body" style="margin-bottom: 70px;">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-md-12 mb-12 focused">
                                <label for="fullname">Full Name</label>
                                <input type="text" autofocus="autofocus" name="fullname" id="fullname" placeholder="Fullname Here...." class="form-control">
                            </div>

                            <div class="col-md-12 mb-12">
                                <label for="description">Decription</label>
                                <textarea name="description" id="description" placeholder="Description Here...." cols="30" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mb-12">
                                <label>Profession Title</label>
                                <select class="form-control"></select>
                            </div>

                            <div class="col-md-12 mb-12">
                                <label>Photo (304 x 319 pixel only)</label><br/>
                                <input accept=".png, .jpg, .jpeg" type="file" class="form-control">
                            </div>

                            <div class="col-md-6 mb-6 focused">
                                <label for="sort_order">Sort Order</label>
                                <input type="number" name="sort_order" id="sort_order" class="form-control">
                            </div>

                            <div class="col-md-6 mb-6">
                                <label>Would you like to display this FAQ?</label>
                                <select id="status" class="form-control">
                                    <option value="Active">Yes</option>
                                    <option value="Inactive">No</option></select>
                            </div>

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