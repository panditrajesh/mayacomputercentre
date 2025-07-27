@extends('admin.layouts.master')
@section('title', 'Update Student Registration Fee')
@push('custom-css')
	<style type="text/css">
		.form-section-heading {
			background: linear-gradient(to right, #4e73df, #825ee4);
			padding: 12px;
			height: 44px;
		}
		.form-section-heading h5{
			color: #fff;
		}
		.card-body input{
			border-radius: 15px;
    		padding: 8px;
		}
	</style>
@endpush
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Update Student Registration Fee</h4>
		</div>
	</div>
</div>
<!-- end page title -->
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header form-section-heading">
				<h5>Update Student Registration Fee</h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-lg-12 mb-2">
							<div class="form-group">
								<label>Amount</label>
								<input required="" type="text" value="{{ $student_reg_fee->srf_amount }}" class="form-control" name="amount" placeholder="Amount">
							</div>
						</div>
						<div class="col-lg-3 "></div>
						<div class="col-lg-6 ">
							<button type="submit" class="btn w-100 btn-secondary custom-button btn-lg"> <i class="fa fa-save"></i> Save</button>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@push('custom-js')
	<script type="text/javascript">
		
	</script>
@endpush