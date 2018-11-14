@extends('layouts.backendapp')
@section('admin-content')
    <style>

    </style>
    <ol class="breadcrumbs">
        <li><a href="{{url('/dashboard')}}" style="color: black;">Dashboard</a></li>
        <li><a href="{{url('admin/faqs')}}" style="color: black;">Faqs List</a></li>
        <li style="color: #65cadb;">Edit</li>
    </ol>

    <div class="col m12 l12">
        <div class="card ui-app__page-content">
            <div class="card-content">
                <div class="card-title title">Edit Faqs</div>

                <div class="card-body" style="    margin-bottom: 40px;">
                    <form method="post">
                        @csrf()
                        <div class="form-row">
                            <div class="col-md-12 mb-12 focused">
                                <label for="question">Question <span class="error">*</span></label>
                                <textarea autofocus="autofocus" name="question" id="question" placeholder="FAQs Question Here...." cols="30" rows="2" class="form-control"></textarea>
                                @if($errors->has('question'))
                                    <label id="name-error" class="error">{{$errors->first('question')}}</label>
                                @endif
                            </div>

                            <div class="col-md-12 mb-12">
                                <label for="answer">Answer <span class="error">*</span></label>
                                <textarea name="answer" id="answer" placeholder="FAQs Answer Here...." cols="30" rows="4" class="form-control"></textarea>
                                @if($errors->has('answer'))
                                    <label id="name-error" class="error">{{$errors->first('answer')}}</label>
                                @endif
                            </div>

                            <div class="col-md-12 mb-12 focused">
                                <label for="status">Type of FAQ <span class="error">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="general-faqs">General</option>
                                    <option value="influencer-faqs">Influencer</option>
                                    <option value="brand-faqs">Brand</option>
                                </select>
                                @if($errors->has('type'))
                                    <label id="name-error" class="error">{{$errors->first('type')}}</label>
                                @endif
                            </div>

                            <div class="col-md-6 mb-6 focused">
                                <label for="sort_order">Sort Order <span class="error">*</span></label>
                                <input type="number" name="sort_order" id="sort_order" class="form-control">
                                @if($errors->has('sort_order'))
                                    <label id="name-error" class="error">{{$errors->first('sort_order')}}</label>
                                @endif
                            </div>

                            <div class="col-md-6 mb-6 focused">
                                <label for="status">Would you like to display this FAQ? <span class="error">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Inactive" >Yes</option>
                                    <option value="Inactive">No</option>
                                </select>
                                @if($errors->has('status'))
                                    <label id="name-error" class="error">{{$errors->first('status')}}</label>
                                @endif
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