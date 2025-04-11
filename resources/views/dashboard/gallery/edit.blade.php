<?php $title =' Edit a Post' ?>
@extends('layouts.apps')
    @section('content')

    <div class="col-lg-12 mb12">

		<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold" style="color:blue">
			<li class="nav-item">
				<a class="nav-link" href="{{route('home')}}" data-toggle="false">
					<i class="fe fe-home mr-1"></i>
					Dashboard
				</a>
			</li>
            <li class="nav-item">
				<a class="nav-link active" href="{{route('gallery.edit',$details->id)}}" data-toggle="false">
					<i class="fe fe-user mr-1"></i>
					Edit Post
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="{{route('gallery.index')}}" data-toggle="false">
					<i class="fe fe-user mr-1"></i>
					Gallery
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="javascript: void(0);" data-toggle="false">
					<i class="fe fe-galleries mr-1"></i>
					Gallery Post
				</a>
			</li>

		</ul>
    </div>
	<div class="air__layout__content">
		<div class="air__utils__content">
			<h6 class="mb-4">
				<strong>Please fill The below form to update a gallery post</strong>
			</h6>
			<div class="card">

				<div class="card-body">

                    @include('layouts.alert')

                    <form action="{{ route('gallery.update',$details->id) }}" id="form-validation" name="form-validation" method="POST" class="pt-3 width-710 mx-auto" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-6 col-lg-4">
                                <label class="form-label" for="validation-firstname">Heading</label>
                                <input
                               
                                class="form-control"
                                name="heading"
                                type="text"
                                placeholder="Enter Heading"
                                value="{{ $details->heading ?? old('heading') }}"
                                required
                                />
                                @if ($errors->has('heading'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('heading') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-lg-4">
                                <label for="blogTopic">Type</label>
                                <select class="form-control" data-live-search="true" name="type" id="type" required >
                                    <option value="{{ $details->type  }}"> {{ $details->type ??  '-- Select Type --' }}</option>
                                    <option value=""> </option>

                                    <option value="image"> Image </option>
                                    <option  value="video"> Video </option>
                                    
                                </select>
                                
                                @if ($errors->has('type'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('type') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-lg-4">
                                <label class="form-label" for="validation-file">File</label>
                                <input
                               
                                class="form-control"
                                name="file" 
                                type="file"
                                
                                placeholder="Select File"
                                
                                />
                                @if ($errors->has('file'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('file') }}
                                    </small>
                                @endif
                            </div>
                        </div>

                        <div class="form-actions" align="right">
                            <button type="submit" class="btn btn-primary mr-2 px-5">Update Post</button>

                        </div>
                    </form>

				</div>
            </div>
           
        </div>
    </div>


    @endsection
