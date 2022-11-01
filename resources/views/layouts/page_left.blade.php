<?php
use App\Http\Controllers\NavigationController;

$parent = NavigationController::getParent();
$no_parent = NavigationController::getNoParent();
$name = NavigationController::getName();
$bisnis = NavigationController::getBisnis();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body onLoad="menu()">
<!-- start: PAGESLIDE LEFT -->
<a class="closedbar inner hidden-sm hidden-xs" href="#"></a>
<nav id="pageslide-left" class="pageslide inner">
    <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation left-wrapper transition-left ps-container" style="background-color: rgb(233, 32, 44); height: 242px;">
            <div class="navigation-toggler hidden-sm hidden-xs">
                <a href="#main-navbar" class="sb-toggle-left">
                </a>
            </div>
            <div class="user-profile border-top padding-horizontal-10 block">
                <div class="inline-block">
                    <!--img src="/assets/images/anonymous.jpg" alt="" width="50"-->
                </div>
                <div class="inline-block">
                    <h5 class="no-margin">Welcome </h5>
                    <h4 class="no-margin">{{strtoupper($name)}} {{strtoupper($bisnis)}}</h4>
                </div>
            </div>
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class="main-navigation-menu">
            	@foreach($parent as $row)
            		<?php $detail = NavigationController::getDetail($row['id']); ?>
            		<li>
            			<a href="javascript:void(0)"><i><img src="/assets/images/{{$row['icon']}}" style=" height: 12px;"></i> <span class="title">{{$row['display_name']}}</span><i class="icon-arrow"></i> </a>
            			<ul class="sub-menu">
              			@foreach($detail as $rows)
              			<li>
                        <a href="{{ URL::to($rows['url']) }}">
                            <span class="title"> {{$rows['display_name']}} </span>
                        </a>
                    </li>
              			@endforeach
                  </ul>
            		</li>
            	@endforeach

            	@foreach($no_parent as $rowss)
            		<li>
                    	<a href="{{ URL::to($rowss['url']) }}"><i><img src="/assets/images/{{$rowss['icon']}}" style=" height: 12px;"></i> <span class="title"> {{$rowss['display_name']}} </span></a>
                	</li>
            	@endforeach
            </ul>
            <!--ul class="main-navigation-menu">
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span class="title">Master</span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                         <li>
                            <a href="{{ URL::to('listVendor') }}">
                                <span class="title"> Vendor </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('listMenu') }}">
                                <span class="title"> Menu </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('listRole') }}">
                                <span class="title"> Role </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('listRegistrasi') }}">
                                <span class="title"> Registrasi </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('dataMwLink') }}"><i class="fa fa-signal"></i> <span class="title"> MWLink </span></a>
                </li>
                <li>
                    <a href="{{ URL::to('dataBTS') }}"><i class="fa fa-signal"></i> <span class="title"> BTS </span></a>
                </li>
                <li>
                    <a href="{{ URL::to('dataAntenna') }}"><i class="fa fa-home"></i> <span class="title"> Antenna </span></a>
                </li>
                <li>
                    <a href="{{ URL::to('dataEquipment') }}"><i class="fa fa-home"></i> <span class="title"> Equipment </span></a>
                </li>
                <!--li>
                    <a href="{{ URL::to('dataStationInformation') }}"><i class="fa fa-signal"></i> <span class="title"> Station Information </span></a>
                </li-->
                <!--li>
                    <a href="{{ URL::to('dataAddress') }}"><i class="fa fa-home"></i> <span class="title"> Address </span></a>
                </li>
                <li>
                    <a href="{{ URL::to('dataSpp') }}"><i class="fa fa-file-word-o"></i> <span class="title"> Informasi SPP/Invoice </span></a>
                </li>
                <li>
                    <a href="{{ URL::to('dataSppDoc') }}"><i class="fa fa-file-word-o"></i> <span class="title"> Informasi Document </span></a>
                </li>
                <!--li>
                    <a href="{{ URL::to('dataRadio') }}"><i class="fa fa-signal"></i> <span class="title"> Radio </span></a>
                </li-->
            <!--/ul-->
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class="slide-tools">
        <div class="col-xs-6 text-left no-padding">
            <!--<a class="btn btn-sm status" href="#">
                Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
            </a>-->
        </div>
        <div class="col-xs-6 text-right no-padding">
            <a class="btn btn-sm log-out text-right" href="{{ URL::to('logout') }}">
                <i class="fa fa-power-off"></i> Log Out
            </a>
        </div>
    </div>
</nav>
<!-- end: PAGESLIDE LEFT -->
</body>
<script type="text/javascript">
	function menu()
	{
		 //alert('keong2');
		$.ajax({
        	   	type : "GET",
        	   	url  : "{{ URL::to('ajaxNavigation') }}",
        	   	success: function(data){
                    var menu = data.menu;
                    $("#loadMenu").html(menu);
        	   	}
        })
	}
</script>
</html>
