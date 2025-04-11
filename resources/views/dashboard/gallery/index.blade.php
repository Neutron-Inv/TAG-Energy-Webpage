<?php $title =' Galleries' ?>
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
				<a class="nav-link active" href="{{route('gallery.index')}}" data-toggle="false">
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
				<strong>Please fill The below form to create a new gallery post</strong>
			</h6>
			<div class="card">

				<div class="card-body">

                    @include('layouts.alert')

                    <form action="{{ route('gallery.store') }}" id="form-validation" name="form-validation" method="POST" class="pt-3 width-710 mx-auto" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-6 col-lg-4">
                                <label class="form-label" for="validation-firstname">Heading</label>
                                <input
                               
                                class="form-control"
                                name="heading"
                                type="text"
                                placeholder="Enter Heading"
                                value="{{ old('heading') }}"
                                required
                                />
                                @if ($errors->has('heading'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('heading') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-lg-4">
                                <label for="blogTopic">Type</label>
                                <select class="form-control" data-live-search="true" name="type" id="type" required >
                                    <option value="{{ old('type') }}"> {{  old('type') ??  '-- Select Type --' }}</option>
                                    <option value=""> </option>

                                    <option value="image"> Image </option>
                                    <option  value="video"> Video </option>
                                    {{-- <option  value="url"> URL </option> --}}
                                    
                                </select>
                                
                                @if ($errors->has('type'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('type') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-lg-4">
                                <label class="form-label" for="validation-file">File</label>
                                <input
                               
                                class="form-control"
                                name="file[]" required
                                type="file"
                                multiple
                                placeholder="Enter Last name"
                                
                                />
                                @if ($errors->has('file'))
                                    <small class="form-control-feedback" style="color:red">
                                        {{ $errors->first('file') }}
                                    </small>
                                @endif
                            </div>
                        </div>

                        <div class="form-actions" align="right">
                            <button type="submit" class="btn btn-primary mr-2 px-5">Create New</button>

                        </div>
                    </form>

				</div>
            </div>
            @if(count($gallery) > 0)
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="card" >
                            <div class="card-body" style="backgroud-color:gray">
        
                                <h6 class="mb-4">
                                    <strong>List of All Gallery Posts</strong>
                                </h6>
        
                                <table class="table table-hover table-bordered nowrap" id="example1">
                                    <small>
                                        <thead class="thead-default">
                                            <tr>
                                                <th> S/N </th>
                                                <th>Heading</th>
                                                <th>Type</th>
                                                <th> File</th>
                                                
                                            </tr>
                                        </thead><small>
                                        <tbody>
                                            <?php $number =1; ?>
                                            @foreach($gallery as $item)
                                                <tr><small>
                                                    <td> {{ $number}}
        
                                                        <a href="{{ route('gallery.edit',$item->id) }}" class="btn btn-primary">
                                                            <i class="fe fe-edit"></i>
                                                        </a>
                                                        <a href="{{ route('gallery.delete',$item->id) }}" class="btn btn-danger">
                                                            <i class="fe fe-trash"></i>
                                                        </a>

                                                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-{{ $number }}" class="btn btn-success">
                                                            <i class="fe fe-image"></i>
                                                        </a>
                                                    </td>
                                                    <td>{{  $item->heading  }}</td>
                                                    <td>{{  $item->type  }}</td>
                                                    
                                                    <td>
                                                        @if($item->type == 'image')
                                                            <img class="" src="{{ asset('post/'.$item->file) }}" style="width:50px; height:50px" alt="Card image cap">
                                                        @else 
                                                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-{{ $number }}" class="btn btn-info">
                                                            View Video
                                                        </a>
                                                        @endif
                                                    </td>

                                                    </small>
                                                    <div class="modal fade bd-example-modal-lg-{{ $number }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-{{ $number }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg-{{ $number }}">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel-{{ $number }}">View {{ $item->heading }}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @if($item->type == 'image')
                                                                        <img class="" src="{{ asset('post/'.$item->file) }}" style="width:480px; height:400px" alt="Card image cap">
                                                                    @else 
                                                                    <iframe width="480" height="315"
                                                                        src="{{ asset('post/'.$item->file) }}">
                                                                    </iframe>
                                                                    @endif
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
        
                                                </tr><?php $number++ ; ?>
                                                
                                            @endforeach
        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th> S/N </th>
                                                <th>Heading</th>
                                                <th>Type</th>
                                                <th> File</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </small>
                                </table>
        
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>


    @endsection
