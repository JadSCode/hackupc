<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DyriO">

    <title>FlyBudget</title>

    <!-- Bootstrap Core CSS -->
    <link href="<? print $tpls;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->


    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<? print $tpls;?>/css/style.css" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php require_once "navbar.tpl.php"; ?>
  <header class="sb-page-header">
	<div class="container">
		<h1>FlyBudget</h1>
		<p>Your way to fly cheap</p>

	</div>
</header>
    <!-- Page Content -->
    <div class="container">

        <div class="row">



            <div class="col-md-12">


                <div class="row">

                    <div class="col-sm-7 col-lg-7 col-md-7">
                        <div class="thumbnail">

                            <div class="caption">



                              <div class="input-group">
                                    <span class="input-group-addon" id="basic-cities">Cities   &nbsp &nbsp &nbsp</span>
                                    <input name="cities" type="text" class="form-control" id="cities" aria-describedby="basic-cities">
                              </div>

                              <div class="row">

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                <div id="datepicker" class=" input-group date" data-date-format="mm-dd-yyyy">
                                    <input name="depart" class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                              </div>

                              <div class="col-sm-6 col-lg-6 col-md-6">
                              <div id="datepicker2" class=" input-group date" data-date-format="mm-dd-yyyy">
                                  <input name="return" class="form-control" type="text" readonly="">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              </div>
                            </div>

                            </div>



                              <div class="input-group col-sm-6 col-lg-6 col-md-6">
                                <span class="input-group-addon">$</span>
                                <input type="text" name="budget" class="form-control" placeholder="Budget" aria-label="Budget">
                              </div>

                              <div class="row">
                                <div class=" col-sm-12 col-lg-12 col-md-12">
                                  <button type="button" style="display:block; margin: 0 auto;" class="btn btn-secondary">Search  </button>

                                </div>
                              </div>


                            </div>

                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">

                            <div class="caption">

                              <div id="map"></div>
                              <script type="text/javascript">

                                var map;
                                function initMap() {
                                  map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -34.397, lng: 150.644},
                                    zoom: 8
                                  });
                                }

                              </script>
                              <script async defer
                                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4bySuW1CdqYbIkATBiua_laeeTK7y4Rg&signed_in=true&callback=initMap"></script>


                            </div>

                        </div>
                    </div>




                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> Sky App &copy; 2016</p>
                </div>

            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<? print $tpls;?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<? print $tpls;?>/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script>
    $(function () {
        $("#datepicker").datepicker({
              autoclose: true,
              todayHighlight: true
        }).datepicker('update', new Date());;
        $("#datepicker2").datepicker({
              autoclose: true,
              todayHighlight: true
        }).datepicker('update', new Date());;

    });


    </script>


</body>

</html>
