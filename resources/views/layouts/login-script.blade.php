<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
<!--<![endif]-->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
<script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/js/login.js"></script>
<script type="text/javascript">
$('#refresh').click(function(){
    $.ajax({
        type:'GET',
        url:"refreshcaptcha",
        success:function(data){
            $(".captcha span").html(data.captcha);
        }
    });
});
</script>

<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();

    });
</script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
