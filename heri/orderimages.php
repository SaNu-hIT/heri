
<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<style type="text/css">
    
.imgdiv{
    width: 350px;
    height: 300px;
    position: relative;
    overflow: hidden;
    text-align: center;
    align-items: center;
    display: FLEX;
    justify-content: center;
}

.imgdiv.img{
  position:absolute; 
  top:0; 
  bottom:0; 
  margin: auto;
  width:100%;
}


body {
    background: #FFFFFF;
    margin: 0px;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    color: #4f5252;
    font-weight: 400;
}
.container{
    margin-top:50px;
    padding: 10px;
}
ul, ol, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.reorder_link {
    color: #3675B4;
    border: solid 2px #3675B4;
    border-radius: 3px;
    text-transform: uppercase;
    background: #fff;
    font-size: 18px;
    padding: 10px 20px;
    margin: 15px 15px 15px 0px;
    font-weight: bold;
    text-decoration: none;
    transition: all 0.35s;
    -moz-transition: all 0.35s;
    -webkit-transition: all 0.35s;
    -o-transition: all 0.35s;
    white-space: nowrap;
}
.reorder_link:hover {
    color: #fff;
    border: solid 2px #3675B4;
    background: #3675B4;
    box-shadow: none;
}
#reorder-helper{
    margin: 18px 10px;
    padding: 10px;
}
.light_box {
    background: #efefef;
    padding: 20px;
    margin: 15px 0;
    text-align: center;
    font-size: 1.2em;
}
 
/* image gallery */
.gallery{ width:100%;padding: 1em; float:left; margin-top:100px;}
.gallery ul{ margin:0; padding:0; list-style-type:none;}
.gallery ul li{  border:2px solid #ccc; float:left; margin:10px 7px; background:none; width:auto; height:auto;}
/* .gallery imgs{ width:250px;} */

/* notice box */
.notice, .notice a{ color: #fff !important; }
.notice { z-index: 8888;padding: 10px;margin-top: 20px; }
.notice a { font-weight: bold; }
.notice_error { background: #E46360; }
.notice_success { background: #657E3F; }
 
</style>

<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
    </script>
    
<title>Ayurveda Gallery</title>
<link href="https://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



<link href="css/elements.css" rel="stylesheet">

   <!-- PACE-->
    <!-- <link rel="stylesheet" type="text/css" href="./plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="./plugins/PACE/pace.min.js"></script> -->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="./plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="./plugins/themify-icons/themify-icons.css">
 

  
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-keytable-bs/css/keyTable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-select-bs/css/select.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-fixedcolumns-bs/css/fixedColumns.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./plugins/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css">
 
	<!--booststrap-->
	<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css?INLA_21032018_3" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' />
	<!-- For-gallery-CSS -->
	<link href="css/popuo-box.css?INLA_21032018_3" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">


</head>



<body>
<div class="header-outs-admin">
		<div class="header-w3layouts">
			<!-- Navigation -->
			
			<div class="header-bar">
			<h1 style="text-align: center; padding-top: 1em;" class="hidden-xs"><a style="padding: 0.5em;" href="index"><img style="width: 23%" src="images/logo_w.png"></a></h1>
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<h1 class="hidden-sm hidden-md hidden-lg col-xs-8"><a class="navbar-brand" href="index">
							<img width="100%" src="images/logo_w.png"></a>
				   </h1>

					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
				
										<div class="row text-center">
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
											<nav>
                                                    <ul class="nav navbar-nav">
												
											
                                                            <li><a href="fileuploadmultipple">Gallery</a></li>
                                <li  class="active"><a href="orderimages.php">Order Images</a></li>
                                <li><a href="previewgalary">Preview</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                                    </ul>
											</nav>
										</div>
									</div>
				</nav>
			</div>

			<div class="clearfix"> </div>

		</div>
		
	</div>

	<div class="container titless">
	    <h1>RE-ORDER IMAGES</h1>
    </div>


    <div class="portfolio" id="gallery row">
	        <div class="col-md-12 text-center">
                    <a href="javascript:void(0);" class="reorder_link" id="saveReorder">reorder Images</a>
                    <div id="reorderHelper" class="light_box" style="display:none;">1. Drag photos to reorder.<br>2. Click 'Save Reordering' when finished.</div>
             </div>

			<div  class="col-md-12 text-center">
                
                <div class="gallery">
        <ul class="reorder_ul reorder-photos-list">
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
             include_once("Classes/dbclasses/ImageDetails.php");
            $imagedetails=new ImageDetails();
            $images=$imagedetails->SelectAllProductAsc();
            // Fetch all images from database
            if(!empty($images)){
             foreach($images as $row){
            ?>
            <li id="image_li_<?php echo $row['imageId']; ?>" class="ui-sortable-handle">
                <a href="javascript:void(0);" style="float:none;" class="image_link">
                    <div class="imgdiv">
                      <img  height="100%"  src="<?php echo $row['imagrUrl']; ?>" alt="">
                    </div>
                </a>
            </li>
        <?php } }

        }
        else
        {
header("Location: login");


            }
             ?>
        </ul>
        </div>
             
			</div>
    </div>

    <div class="clearfix"></div>


 















 
	<footer>
		
			<div class="container">
			
			<div class="row">
				
				<div class="col-md-3 bottom-head text-center"><h4><a href="index"><img src="images/logo_w.png"></a></h4></div>
				
				<div class="col-md-3 copyright text-center"><a><i class="fa fa-map-marker"></i></a>
					<p>Bismarckturmstraße 24. 64678 Lindenfels</p></div>
				
				<div class="col-md-3 copyright text-center"><a><i class="fa fa-phone"></i></a>
					<p>06255-9673609,
06255-9673608</p>
				</div>
				
				<div class="col-md-3 copyright text-center"><a><i class="fa fa-envelope"></i></a>
					<p> info@heritageayurveda.de</p>
				</div>
				
			</div>
			<hr>
				
			</div>
			
			<div class="container text-center pb-3">
				<p>© 2018 All Rights Reserved. Heritage Ayurveda</p>
			</div>
		
		</footer>
	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<!--js working-->
 
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->

	<script src="js/responsiveslides.min.js"></script>

	
<!-- script for portfolio -->
	<script type='text/javascript' src='js/jquery.easy-gallery.js'></script>


    
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>

    <!-- start-smoth-scrolling -->

    <!-- for-bottom-to-top smooth scrolling -->
   
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //for-bottom-to-top smooth scrolling -->

 
 
    
    <!-- DataTables-->
    <script type="text/javascript" src="./plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="./plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="./plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="./plugins/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-select/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="./plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <!-- Custom JS-->
   <script src="js/my_js.js"></script>

<script type="text/javascript">
$(document).ready(function(){

    	$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
            });
            
    $().UItoTop({
				easingType: 'easeOutQuart'
            });
            
    $('.reorder_link').on('click',function(){
        $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
        $('.reorder_link').html('save reordering');
        $('.reorder_link').attr("id","saveReorder");
        $('#reorderHelper').slideDown('slow');
        $('.image_link').attr("href","javascript:void(0);");
        $('.image_link').css("cursor","move");
        $("#saveReorder").click(function( e ){
            if( !$("#saveReorder i").length ){
                $(this).html('').prepend('<img src="img/progressbar.gif"/>');
                $("ul.reorder-photos-list").sortable('destroy');
                $("#reorderHelper").html( "Reordering Photos - This could take a moment. Please don't navigate away from this page." ).removeClass('light_box').addClass('notice notice_error');
    
                var h = [];
                $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
                console.log(h);
                $.ajax({
                    type: "POST",
                    url: "orderUpdate.php",
                    data: {ids: " " + h + ""},
                    success: function(res){


                           $("#reorderHelper").html( res ).removeClass('light_box').addClass('notice notice_error');
    
                         window.location.reload();
                    }
                }); 
                return false;
            }   
            e.preventDefault();     
        });
    });
});
</script>

</body>

</html>