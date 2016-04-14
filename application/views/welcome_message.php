<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/my_style.css" type="text/css">
<link rel="stylesheet" href="css/multiple-select.css" />
<link href="css/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.multiple.select.js"></script>
<script>
    $(function() {
        $('.multiple_select').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>

<meta name="viewport" content="width=device-width">
</head>

<body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">3 adults 2 rooms</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          	<div class="col-sm-6 rooms">
            	<h3>Room1</h3>
                <div class="row">
                	<div class="col-xs-4">
                    	<h4>Adults</h4>
                        <h5>(12+)</h5>
                    </div>
                    <div class="col-xs-8">
                    	<input type="number">
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-4">
                    	<h4>Children</h4>
                        <h5>(0 - 11)</h5>
                    </div>
                    <div class="col-xs-8">
                    	<input type="number">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 rooms">
            	<h3>Room2</h3>
                <div class="row">
                	<div class="col-xs-4">
                    	<h4>Adults</h4>
                        <h5>(12+)</h5>
                    </div>
                    <div class="col-xs-8">
                    	<input type="number">
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-4">
                    	<h4>Children</h4>
                        <h5>(0 - 11)</h5>
                    </div>
                    <div class="col-xs-8">
                    	<input type="number">
                    </div>
                </div>
            </div>
        </div>
        <a class="pull-right" href="#"> + Add more </a>
        <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="header">
<!-----navigation_menu_start------->
<nav role="navigation" class="navbar navbar-default custome_nav">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><img src="img/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Accomodation</a></li>
            <li><a href="#">Dinning out</a></li>
            <li><a href="#">Things to do</a></li>
            <li><a href="#">E-locals and pacakages</a></li>
            <li><a href="#">Promotions</a></li>
            <li><a href="#">Privilege</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">EN <span class="caret"></span></a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
            	<div class="after_login_profile">
                    <div data-toggle="dropdown" class="profile_menu dropdown-toggle">
                        <h2>Lorem Ipsum</h2>
                        <div class="pic"><img src="img/pro_pic.png"></div>
                        <span class="caret"></span>
                        <div class="clearfix"></div>
                    </div>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<!-----navigation_menu_end------->
<!-----slider_start------->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slider_img/img1.png" alt="...">
    </div>
    <div class="item">
      <img src="img/slider_img/img2.png" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!-----slider_end------->
</div>

<div class="space25"></div>
<div class="container acc_middle acc_homepage">
    <div class="acc_middle_section">
                	<h3>Accomodation<a href="#">See All</a><span>Page 1 of 13</span></h3>
                    <div id="nav-01" class="crsl-nav">
                        <a href="#" class="previous"><img src="img/crsl_sl_img_left.jpg"></a>
                        <a href="#" class="next"><img src="img/crsl_sl_img_right.jpg"></a>
                    </div>
                    <div class="acc_p_slider crsl-items1" data-navigation="nav-01" style="width: 100%; overflow: hidden;">
                    	<ul class="crsl-wrap" style="width: 1428px; margin-left: -204px;">
                        	<li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
</div>
<div class="space25"></div>
<div class="middle_section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-3">
            	<div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          Search Accommodation<span class="glyphicon glyphicon-plus fr"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row">
                        	<div class="col-xs-6">
                            	<input class="datepicker"  type="text" placeholder="Check in Date">
                            </div>
                            <div class="col-xs-6">
                            	<input class="datepicker" type="text" placeholder="Check in Date">
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-xs-6">
                            	<label>No of Nights</label>
                            </div>
                            <div class="col-xs-6">
                            	<input type="text" placeholder="Defaults">
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-sm-12 special" >
                           		<select data-toggle="modal" data-target="#myModal">
                                	<option>2 adults 1 room</option>
                                    <option>2 adults 1 room</option>
                                    <option>2 adults 1 room</option>
                                    <option>2 adults 1 room</option>
                                    <option>2 adults 1 room</option>
                                </select>
                            </div>
                        </div>
                        <div class="row type">
                        	<div class="col-sm-12">
                            	No of guest in room Units
                            </div>
                            <div class="col-sm-12">
                            	<input type="text" placeholder="Defaults">
                            </div>
                        </div>
                        <div class="row type">
                        	<div class="col-sm-12">
                            	Type
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>-----Any------</option>
                                    <option>Hotels</option>
                                    <option>Resort</option>
                                    <option>Service apartment</option>
                                    <option>House for rent  4 PP ++</option>
                                    <option>Home stay</option>
                                    <option>Hostel</option>
                                    <option>Guest house</option>
                                    <option>Budget</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>--Region/City--</option>
                                    <option>Bangkok and Central</option>
                                    <option>Northern</option>
                                    <option>Southern</option>
                                    <option>Eastern</option>
                                    <option>Western</option>
                                    <option>North Eastern </option>
                                </select>
                            </div>
                        </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Area
                            </div>
                            <div class="col-sm-12">
                                <select class="multiple_select" multiple>
                                    <option selected>-----Any------</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                </select>
                            </div>
                         </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Keyword
                            </div>
                            <div class="col-sm-12">
                                <input type="text">
                            </div>
                         </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Additional search option
                            </div>
                            <div class="col-sm-12">
                                <select class="multiple_select" multiple>
                                    <option selected>-----Any------</option>
                                    <option>Pool Villa</option>
                                    <option>Pets Allowed</option>
                                    <option>Mountain view</option>
                                    <option>beach front</option>
                                    <option>Golf Club</option>
                                    <option>BTS / MRT Airport link </option>
                                    <option>Boutique Hotel</option>
                                    <option>Green Hotel</option>
                                    <option>Therapeutic /health and wellness</option>
                                    <option>Adventure / natural</option>
                                </select>
                            </div>
                         </div>
                         <input type="button" class="search_btn" value="Search">
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          Search Dining out <span class="glyphicon glyphicon-plus fr"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row type">
                        	<div class="col-sm-12">
                            	Type
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>-----Any------</option>
                                    <option>buffet</option>
                                    <option>Coffee / Bakery shop</option>
                                    <option>Pub and restaurant</option>
                                    <option>River cruise with meal</option>
                                    <option>Seafood</option>
                                    <option>Street food</option>
                                    <option>Authentic Thai cuisine</option>
                                    <option>Fusion Food</option>
                                    <option>Thai Noodle</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>--Region/City--</option>
                                    <option>Bangkok and Central</option>
                                    <option>Northern </option>
                                    <option>Southern</option>
                                    <option>Eastern</option>
                                    <option>Western</option>
                                    <option>North Eastern </option>
                                </select>
                            </div>
                        </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Area
                            </div>
                            <div class="col-sm-12">
                                <select class="multiple_select" multiple>
                                    <option selected>-----Any------</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                </select>
                            </div>
                         </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Keyword
                            </div>
                            <div class="col-sm-12">
                                <input type="text">
                            </div>
                         </div>
                        <input type="button" class="search_btn" value="Search">
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Search Things to do <span class="glyphicon glyphicon-plus fr"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row type">
                        	<div class="col-sm-12">
                            	Type
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>-----Any------</option>
                                    <option>Bike Tour / Bike rental</option>
                                    <option>Diving / Snockerling</option>
                                    <option>Cruises</option>
                                    <option>Cooking</option>
                                    <option>Theatres, shows and concerts</option>
                                    <option>Theme parks</option>
                                    <option>Water sports, kayaking</option>
                                    <option> Moutain hiking and elephant trekking</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>--Region/City--</option>
                                    <option>Bangkok and Central</option>
                                    <option>Northern </option>
                                    <option>Southern</option>
                                    <option>Eastern</option>
                                    <option>Western</option>
                                    <option>North Eastern </option>
                                </select>
                            </div>
                        </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Area
                            </div>
                            <div class="col-sm-12">
                                <select class="multiple_select" multiple>
                                    <option selected>-----Any------</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                </select>
                            </div>
                         </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Keyword
                            </div>
                            <div class="col-sm-12">
                                <input type="text">
                            </div>
                         </div>
                        <input type="button" class="search_btn" value="Search">
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                          Search E - local & Package <span class="glyphicon glyphicon-plus fr"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row type">
                        	<div class="col-sm-12">
                            	Type
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>-----Any------</option>
                                    <option>Package 1 day trip</option>
                                    <option>Package home stay Traditional  Thai life style</option>
                                    <option>package scuba snorkeling diving </option>
                                    <option>"Package Trekking + Camping</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                            	<select class="multiple_select" multiple>
                                	<option selected>--Region/City--</option>
                                    <option>Bangkok and Central</option>
                                    <option>Northern </option>
                                    <option>Southern</option>
                                    <option>Eastern</option>
                                    <option>Western</option>
                                    <option>North Eastern </option>
                                </select>
                            </div>
                        </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Area
                            </div>
                            <div class="col-sm-12">
                                <select class="multiple_select" multiple>
                                    <option selected>-----Any------</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                    <option>Top destination</option>
                                </select>
                            </div>
                         </div>
                        <div class="row type">
                            <div class="col-sm-12">
                                Keyword
                            </div>
                            <div class="col-sm-12">
                                <input type="text">
                            </div>
                         </div>
                        <input type="button" class="search_btn" value="Search">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 featured_services">
            	<div class="col-md-6">
                	<ul>
                        <li style="background-image:url(img/11.png)">
                            <div class="red content_overlay">
                                <h4>Accomodation</h4>
                                <h3>Accomodation Name</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                <a href="#">View more</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<ul>
                        <li style="background-image:url(img/12.png)">
                            <div class="blue content_overlay">
                                <h4>Dining out</h4>
                                <h3>Partner Name</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                <a href="#">View more</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<ul>
                        <li style="background-image:url(img/13.png)">
                            <div class="green content_overlay">
                                <h4>Things to do</h4>
                                <h3>Accomodation Name</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                <a href="#">View more</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<ul>
                        <li style="background-image:url(img/11.png)">
                    	<div class="coffee content_overlay">
                        	<h4>E-local & Package</h4>
                            <h3>Accomodation Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                            <a href="#">View more</a>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
            	
            </div>
        </div>
    </div>
</div>
<div class="space25"></div>
<div class="content_area gray_text">
	<div class="container acc_middle acc_homepage gray_text" style="padding:0 15px;">
    <div class="acc_middle_section">
                	<h3>Accomodation<a href="#">See All</a><span>Page 1 of 13</span></h3>
                    <div id="nav-02" class="crsl-nav">
                        <a href="#" class="previous"><img src="img/crsl_sl_img_left.jpg"></a>
                        <a href="#" class="next"><img src="img/crsl_sl_img_right.jpg"></a>
                    </div>
                    <div class="acc_p_slider crsl-items2" data-navigation="nav-02" style="width: 100%; overflow: hidden;">
                    	<ul class="crsl-wrap" style="width: 1428px; margin-left: -204px;">
                        	<li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 204px; margin-right: 0px;">
                            	<div class="content_box">
                                    <div class="img_thumb">
                                        <img src="img/1.png">
                                        <div class="text_over">
                                            <div class="star"><img src="img/star.png"></div>
                                            <div class="discount">30% off</div>
                                            <div class="name_price">
                                                <h3>Price per night</h3>
                                                <h4><small>From</small> $700</h4>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="contents">
                                        <h6>Price For Sunday 24 August</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate tempor dolor sed viverra. Sed risus arcu, venenatis a dolor in, elementum aliquet est. Duis volutpat dolor tempor, interdum magna non, scelerisque massa. Phasellus turpis est, porttitor et eros eget, fringilla consequat dui. </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
</div>
</div>
<div class="space25"></div>
<div id="dynamic_text">
	<div class="container">
        <div class="dynamic_content fl">
            <h2>Our Best Hotels and Travel deals</h2>
            <ul>
            	<li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>
        <div class="dynamic_content fr">
            <h2>Entertaintment and pempering offers</h2>
            <ul>
            	<li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                	<div class="left">
                    	<p>Your Favourite weekend destitations</p>
                    	<h3>UK & Ireland Hotels</h3>
                    </div>
                    <div class="right">
                    	<p>from</p>
                        <div class="price">
                        	$45
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="subscribe">
	<div class="container">
    	<h1>SUBSCRIBE OUR NEWSLETTER FOR <span>SECRET DEALS</span></h1>
        <input type="submit" value="Subscribe">
        <input type="text" placeholder="Enter Your Email..">
    </div>
</div>
<div class="foooter">
	<div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-6">
                <h5>About Us</h5>
                <ul>
                    <li><a href="#">Company Overview</a></li>
                    <li><a href="#">Private orivacy</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Enquiry</a></li>
                    <li><a href="#">Carrer</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h5>Partnership</h5>
                <ul>
                    <li><a href="#">Add your Proprty</a></li>
                    <li><a href="#">Become a Partner</a></li>
                    <li><a href="#">Login My account</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h5>Service & Support</h5>
                <ul>
                    <li><a href="#">FAQS</a></li>
                    <li><a href="#">How wizcation works</a></li>
                    <li><a href="#">Contact & support</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h5>Site Map</h5>
                <ul>
                    <li><a href="#">Accomodation</a></li>
                    <li><a href="#">Dining out</a></li>
                    <li><a href="#">Things to do</a></li>
                    <li><a href="#">E-local & Packages</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-12">
                <img src="img/paypal.png" width="100%">
                <div class="space10"></div>
                <img src="img/ssl-image.png" width="100px">
                <img src="img/dbd_registered_logo2.png" width="200px">
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
var jq = $.noConflict();
jq(".datepicker").datepicker({
	inline: true
});
</script>
<script type="text/javascript" src="js/responsiveCarousel.js"></script>
<script src="js/jquery.hammer.min.js"></script>
<script>
	$(document).ready(function(e) {
        jQuery(document).ready(function($){
			$('.crsl-items1').carousel({ visible: 4, itemMinWidth: 200, itemMargin: 0 });
			$('.crsl-items2').carousel({ visible: 4, itemMinWidth: 200, itemMargin: 0 });
		});
    });
</script>
</body>
</html>
