@extends(config('lawsettings.admin_tmp'),[
	'title' => 'AdminLTE 3 | Law Case Page',
	'content_header' => 'Law Case Page',
	'breadcrumb' => [
			'items' => [
						"<a href='".Url('admin/')."'>Home</a>",
						"<a href='".Route('lawcase_index')."'>Law Case</a>"
					],
			'active' => "Law Case Page",
		],
	])
@section('content')
	<div class="container-fluid">
	 	<div class="row">
	 		<div class="col-md-3"></div>
			<div class="col-md-6">
			  <div class="card card-primary">
		    	@if(isset($data->id_lawcase) && !empty($data->id_lawcase))
		    		<form role="form" action="{{Route('lawcase_edit_action',$data->id_lawcase)}}" method="post">
		    		<input type="hidden" name="id_lawcase" value="{{ isset($data->id_lawcase) ? $data->id_lawcase : 0 }}" id="id_lawcase">
		    	@else
		    		<form role="form" action="{{ Route('lawcase_create_action') }}" method="post">
				@endif
				@csrf
			      <div class="card-body">
			        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			          	<label for="name">Case Name</label>
			          	<input type="text" class="form-control" name="name" id="name" placeholder="Case name" value="{{ (isset($data->name) && !empty($data->name)) ? $data->name : old('name') }}">
			          	@if($errors->has('name'))
	                    	<span class="help-block">
		          	            <strong>
		          	            	{{ $errors->first('name') }}
		          	            </strong>
	                    	</span>
	                  	@endif
			        </div>
			        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
			          	<label for="description">Case Description</label>
			          	<textarea name="description" id="description" placeholder="Case Description" cols="30" rows="10">
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