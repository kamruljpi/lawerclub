@extends(config('lawsettings.admin_tmp'),[
	'title' => 'AdminLTE 3 | Court Page',
	'content_header' => 'Court Page',
	'breadcrumb' => [
			'items' => [
						"<a href='".Url('admin/')."'>Home</a>",
						"<a href='".Route('court_index')."'>Court</a>"
					],
			'active' => "Court Page",
		],
	])
@section('content')
	<div class="container-fluid">
	 	<div class="row">
	 		<div class="col-md-3"></div>
			<div class="col-md-6">
			  <div class="card card-primary">
		    	@if(isset($data->id_court) && !empty($data->id_court))
		    		<form role="form" action="{{Route('court_edit_action',$data->id_court)}}" method="post">
		    		<input type="hidden" name="id_court" value="{{ isset($data->id_court) ? $data->id_court : 0 }}" id="id_court">
		    	@else
		    		<form role="form" action="{{ Route('court_create_action') }}" method="post">
				@endif
				@csrf
			      <div class="card-body">
			        <div class="form-group{{ $errors->has('court_name') ? ' has-error' : '' }}">
			          	<label for="court_name">Court Name</label>
			          	<input type="text" class="form-control" name="court_name" id="court_name" placeholder="Court name" value="{{ (isset($data->court_name) && !empty($data->court_name)) ? $data->court_name : old('court_name') }}">
			          	@if($errors->has('court_name'))
	                    	<span class="help-block">
		          	            <strong>
		          	            	{{ $errors->first('court_name') }}
		          	            </strong>
	                    	</span>
	                  	@endif
			        </div>
			        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
			          	<label for="description">Court Description</label>
			          	<textarea name="description" id="description" placeholder="Court Description" cols="30" rows="10">
			          		{{ (isset($data->description) && !empty($data->description)) ? $data->description : old('description') }}
			          	</textarea>
			          	@if($errors->has('description'))
	                    	<span class="help-block">
		          	            <strong>
		          	            	{{ $errors->first('description') }}
		          	            </strong>
	                    	</span>
	                  	@endif
			        </div>
			        <div class="form-group">
			          <label for="is_active">Status</label>
			          <select name="is_active" class="form-control">
			          	<option value="1" {{ (isset($data->is_active) && ($data->is_active == 1)) ? 'selected' : '' }}>Active</option>
			          	<option value="0" {{ (isset($data->is_active) && ($data->is_active == 0)) ? 'selected' : '' }}>Inactive</option>
			          </select>
			        </div>
			      </div>
			      <div class="card-footer">
			        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
			      </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
@endsection
@section('script')	
@endsection