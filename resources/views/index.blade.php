<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<!-- start: BODY -->
<body>
<div class="main-wrapper">
	<!-- start: MAIN CONTAINER -->
	<!-- start: PAGE -->
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- start: BASIC TABLE PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of Employee</h4>
                        </div>
                        <div class="panel-body">
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            @if ($message = Session::get('warning'))
                                <div class="alert alert-warning" role="alert">
                                    {{ Session::get('warning') }}
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12 space20">
                                    <a class="btn btn-primary" href="{{ URL::to('/') }}"><i class="fa fa-user"></i> Add Employee</a>
                                </div>
                            </div>
                                <table class="display" style="width:100%" id="table_regist">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="center" style="white-space:nowrap">Job Title</th>
                                            <th class="center" style="white-space:nowrap">Full Name</th>
                                            <th class="center">Email</th>
                                            <th class="center">Phone</th>
                                            <th class="center">Country</th>
                                            <th class="center">City</th>
                                            <th class="center">Address</th>
                                            <th class="center" style="white-space:nowrap">Postal Code</th>
                                            <th class="center" style="white-space:nowrap">Driving License</th>
                                            <th class="center">Nationality</th>
                                            <th class="center" style="white-space:nowrap">Place of Birth</th>
                                            <th class="center" style="white-space:nowrap">Date of Birth</th>
                                            <th class="center" style="white-space:nowrap">Photo Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--  @foreach($list as $row)
                                        <tr>
                                            <td class="center" value="{{$row->id}}">{{$no++}}</td>
                                            <td nowrap>{{$row->name}}</td>
                                            <td>{{$row->username}}</td>
                                            <td>{{$row->phone}}</td>
                                            <td>{{$row->email}}</td>
                                            <td class="center">{{$activation[$row->is_active]}}</td>
                                            <td class="center" nowrap="nowrap">{{date('Y-m-d H:i:s',strtotime($row->created_at))}}</td>
                                            <td class="center">
                                                <a href="{{URL::to('/registrasi/'.$row->id)}}" class="btn btn-xs btn-primary" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                @if ($row->is_active == '1')
                                                <a href="{{URL::to('/resetPassword/'.$row->id)}}" class="btn btn-xs btn-primary" title="Reset Password" onclick="return confirm('Are you sure to reset this password account ?')">
                                                    <i class="fa fa-key"></i>
                                                </a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach  --}}
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- end: BASIC TABLE PANEL -->
                </div>
            </div>
        </div>
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
    </div>
    <!-- end: PAGE -->
	<!-- end: MAIN CONTAINER -->
	@include('layouts.footer')
</div>
@include('layouts.scripts')
</body>
<!-- end: BODY -->
<script type="text/javascript">
	jQuery(document).ready(function() {
	    $('#table_regist').dataTable({
	        scrollX: true
	    });
 	});
</script>
</html>
