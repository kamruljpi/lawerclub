@extends(config('lawsettings.admin_tmp'),[
	'title' => 'AdminLTE 3 | Case Page',
	'content_header' => 'Case Page',
	'breadcrumb' => [
			'items' => [
						"<a href='".Url('admin/')."'>Home</a>",
						"<a href='".Route('case_index')."'>Case</a>"
					],
			'active' => "Case Page",
		],
	])
@section('content')
	<div class="container-fluid">
	 	<div class="row">
	 		<div class="col-md-3"></div>
			<div class="col-md-6">
			  <div class="card card-primary">
		    	@if(isset($data->id_case) && !empty($data->id_case))
		    		<form role="form" action="{{Route('case_edit_action',$data->id_case)}}" method="post">
		    		<input type="hidden" name="id_case" value="{{ isset($data->id_case) ? $data->id_case : 0 }}" id="id_case">
		    	@else
		    		<form role="form" action="{{ Route('case_create_action') }}" method="post">
				@endif
				@csrf
			      <div class="card-body">
			        <div class="form-group{{ $errors->has('case_name') ? ' has-error' : '' }}">
			          	<label for="case_name">Case Name</label>
			          	<input type="text" class="form-control" name="case_name" id="case_name" placeholder="Case name" value="{{ (isset($data->case_name) && !empty($data->case_name)) ? $data->case_name : old('case_name') }}">
			          	@if($errors->has('case_name'))
	                    	<span class="help-block">
		          	            <strong>
		          	            	{{ $errors->first('case_name') }}
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