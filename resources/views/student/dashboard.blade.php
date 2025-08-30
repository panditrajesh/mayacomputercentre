@extends('student.layouts.master')
@section('title', 'Student Dashboard')
@push('custom-css')
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body{
background-color: #eee;
}
#student_view img{
height: 150px;
width: 150px;
border: 8px solid #eee;
position: absolute;
left: 50%;
top: 0;
transform: translate(-50%,-50%);
}
.card{
position:relative;
width: 100%;
border-radius: 5px;
border: none;

}
.name{
font-size: 20px;
margin-bottom: 6px;
padding-top: 90px;
}
.job{
color: #25fa25;
font-size: 12px;
font-weight: 700;
margin-bottom: 8px;
}
.container .card .icons .icon {
font-size: 14px;
width: 30px;
height: 30px;
color: white;
background-color: #fa2525;
border-radius: 50%;
display: flex;
justify-content: center;
align-items: center;
cursor: pointer;
}
.dis{
color: #7e7c7c;
line-height: 2;
}
.container .card:hover .icons .icon {
background-color: #f06d6d;
}
.container .card:hover .text-center{
background-color:#fa2525;
color: white;
}
.container .card:hover .job,.container .card:hover .name{
color: white;
}
.container .card:hover .dis{
color: #c4c4c4;
}
.container .card .icons .icon:hover{
background-color: rgb(235, 123, 103);
}
.mt-80{
margin-top: 80px;
}
td{
padding:4px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
@endpush
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Dashboard</h4>
		</div>
	</div>
</div>
<!-- end page title -->
<div class="container-fluid">
	<h3 align='center'> Welcome to Maya Computer Center</h3>
	
	
</div>
<!-- end row -->
</div> <!-- container-fluid -->
<!-- end row -->
@endsection