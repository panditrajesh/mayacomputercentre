@extends('center.layouts.master')
@section('title', 'Set Fee')
@push('custom-css')
<style type="text/css">
	
</style>
@endpush
@section('content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Recharge History</h4>
			<div class="page-title-right">
				
			</div>
		</div>
	</div>
</div>
<!-- end page title -->
<div class="card mb-4">
	<div class='card-header bg-secondary text-white font-weight-bold'>
		{{-- Set Fee For {{ $course_name->c_full_name }} --}}
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="datatable-buttons" class="table table-bordered table-sm table-striped w-100">
				<thead>
					<tr class="table_main_row">
						<th>#ID</th>
						<th>Amount</th>
						<th>Deposit Through</th>
						<th>Status</th>
						<th>Payment Date</th>
					</tr>
				</thead>
				<tbody>
					@php
						$i=1;
					@endphp
					@foreach($wallet_statement as $data)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $data->cr_amount }} ₹</td>
							<td> 
							    @if($data->cr_deposit_by)
							        Admin
							    @else
							        Razorpay
							    @endif
							</td>
							<td>
								@if($data->cr_status == 0)
									PENDING
								@else
									COMPLETE
								@endif
							</td>
							<td>{{ $data->created_at }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		
	</div>
</div>
@endsection
@push('custom-js')

@endpush