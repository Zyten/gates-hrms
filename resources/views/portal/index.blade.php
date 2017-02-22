@extends('layouts.portal')

@section('content')
<!-- Slider and Form -->
<section id="menu-slider" style="padding-bottom: 40px;" class="slider">
	<div class="container">
		<div class="content_slider">
			<!-- slider -->
			<div class="bs-example">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="{{asset('public/themes/portal/img/slide1.jpg')}}" alt="First slide">
						</div>
						<div class="item">
							<img src="{{asset('public/themes/portal/img/slide2.jpg')}}" alt="Second slide">
						</div>
						<div class="item">
							<img src="{{asset('public/themes/portal/img/slide3.jpg')}}" alt="Third slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
		<!-- /slider -->

		<!-- form -->
		<div class="content_form text-center">
			<h2>
				Welcome!
			</h2>
			<p>Explore the realm of knowledge beyond learning here at GATES Academy.</p>
		</div>
		<!-- /form -->
	</div>
</section>
<!-- end Slider and Form -->

<!-- Features -->
<section id="menu-information" class="features">

	<article class="item text-center">
		<div class="panel-heading">
			<h3 class="sub_title">
				<a href="">open for everyone</a>
			</h3>
		</div>
		<div class="panel-body">
			<a href="" class="content_info">
				<i class="icon-globe"></i>
			</a>
		</div>
	</article>

	<article class="item text-center">
		<div class="panel-heading">
			<h3 class="sub_title">
				<a href="">various durations</a>
			</h3>
		</div>
		<div class="panel-body">
			<a href="" class="content_info">
				<i class="icon-calendar"></i>
			</a>
		</div>
	</article>

	<article class="item text-center">
		<div class="panel-heading">
			<h3 class="sub_title">
				<a href="">comprehensive notes</a>
			</h3>
		</div>
		<div class="panel-body">
			<a href="" class="content_info">
				<i class="icon-pencil"></i>
			</a>
		</div>
	</article>

	<article class="item text-center">
		<div class="panel-heading">
			<h3 class="sub_title">
				<a href="">industry oriented</a>
			</h3>
		</div>
		<div class="panel-body">
			<a href="" class="content_info">
				<i class="icon-monitor"></i>
			</a>
		</div>
	</article>

	<article class="item text-center">
		<div class="panel-heading">
			<h3 class="sub_title">
				<a href="">experienced trainers</a>
			</h3>
		</div>
		<div class="panel-body">
			<a href="" class="content_info">
				<i class="icon-user"></i>
			</a>
		</div>
	</article>
</section>
<!-- end Features -->

<!-- Logos -->
<section id="menu-logos" class="logos generic">
	<div class="container">
		<div class="row text-center">

			<article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
				<div class="blog-post">
					<div class="ImageWrapper ContentWrapperN chrome-fix">
						<figure>
							<img class="img-responsive" src="{{asset('public/themes/portal/img/collab1.png')}}" alt="">
						</figure>
						<center>
							<div  class="ContentN">
								<div style="position:relative;margin:auto;" class="Content">
									<h4>
										GATES IT Solution
									</h4>
									<a href="gates.my">www.gates.my</a>
								</div>
							</div>
					</div>
				</div>
			</article>

			<article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
				<div class="blog-post">
					<div class="ImageWrapper ContentWrapperN chrome-fix">
						<figure>
							<img class="img-responsive" src="{{asset('public/themes/portal/img/collab2.png')}}" alt="">
						</figure>

						<div class="ContentN">
							<div style="position:relative;margin:auto;"class="Content">
								<h4>
									Red Balloon Pirates, UTHM
								</h4>
								<a href="http://uthm.edu.my">uthm.edu.my</a>
							</div>
						</div>
					</div>
				</div>
			</article>

			<article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
				<div class="blog-post">
					<div class="ImageWrapper ContentWrapperN chrome-fix">
						<figure>
							<img class="img-responsive" src="{{asset('public/themes/portal/img/collab3.png')}}" alt="">
						</figure>

						<div class="ContentN">
							<div style="position:relative;margin:auto;" class="Content">
								<h4>
									Multimedia Development Corporation (MDeC) Sdn Bhd
								</h4>
								<a href="http://www.mdec.my/">www.mdec.my</a>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<!-- end Logos -->

<!-- Classes (Galleries)-->
<section id="menu-classes" class="gallery generic">
	<div class="container">
		<div class="text-center">
			<h2>Courses</h2>
			<div class="gallery_content">
				<!--filter portfolio-->
				<section id="options" class="clearfix navbar navbar-default col-lg-6 col-lg-offset-3">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul id="filters" class="option-set clearfix nav navbar-nav" data-option-key="filter">
							<li><a href="#filter" data-option-value="*" class="selected">View All</a></li>
							<li><a href="#filter" data-option-value=".anim">2D/3D Animation</a></li>
							<li><a href="#filter" data-option-value=".creative">Creative Media Graphic</a></li>
						</ul>
					</div>
				</section>
				<!-- #options -->
				<div id="container" class="clearfix clear">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element anim" data-symbol="Hg" data-category="transition">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item1.jpg')}}" alt="//">
								</figure>

								<div class="ImageOverlayH"></div>

								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal">
											<div style="padding-top:10px;" 
												 <i class="icon-info"></i></div>
										</a>
									</span>
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element creative" data-symbol="Te" data-category="metalloid">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item5.jpg')}}" alt="//">
								</figure>

								<div class="ImageOverlayH"></div>

								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal-5">
											<div style="padding-top:10px;"                                                      <i class="icon-info"></i></div>
										</a>
									</span>
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element anim" data-symbol="Hg" data-category="transition">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item2.jpg')}}" alt="//">
									</figure>

									<div class="ImageOverlayH"></div>

								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal-2">
											<div style="padding-top:10px;"                                                      <i class="icon-info"></i></div>
										</a>
									</span>
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element creative" data-symbol="Bi" data-category="post-transition">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item4.jpg')}}" alt="//">
								</figure>

								<div class="ImageOverlayH"></div>

								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal-6">
											<div style="padding-top:10px;"                                                      <i class="icon-info"></i></div>
										</a>
									</span>
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element anim" data-symbol="Hg" data-category="transition">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item3.jpg')}}" alt="//">
								</figure>

								<div class="ImageOverlayH"></div>

								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal-3">
											<div style="padding-top:10px;"                                                      <i class="icon-info"></i></div>
										</a>
									</span>
									<span  style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element creative" data-symbol="Bi" data-category="post-transition">
						<div class="blog-post">
							<div class="ImageWrapper">
								<figure>
									<img class="img-responsive" src="{{asset('public/themes/portal/img/gallery/item6.jpg')}}" alt="//">
								</figure>
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleSc">
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
									<span class="WhiteRounded">
										<a href="" data-toggle="modal" data-target="#myModal-6">
											<div style="padding-top:10px;"                                                      
												 <i class="icon-info"></i></div>
										</a>
									</span>
									<span style="visibility: hidden;" class="WhiteRounded">
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- #container -->
				<!--end filter portfolio-->
			</div>
		</div>
	</div>
</section>
<!-- end Gallery -->

<!-- Contact -->
<section id="menu-contract" class="contract generic">
	<div class="container text-center">
		<div class="row">
			<h2 style="padding-top:1.5%;">Apply Now</h2>
			<div style="padding-top:0px;" class="col-xs-12 col-lg-10 col-lg-offset-1 form-box">
				<form  onsubmit=" alert('Application submitted!');return true;" id="applyForm" style="margin-top:0px;" role="form" action="portal.htm" method="post" class="registration-form">
					<fieldset>
						<div class="form-top">
							<div class="form-top-left">
								<h3>Step 1 / 3</h3>
								<p>Tell us who you are:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="form-bottom">
							<div class="form-group">
								<div class="col-xs-12 col-lg-12">
									<label class="sr-only" for="aname">Full Name</label>
									<input type="text" name="aname" placeholder="Full Name" class="form-first-name form-control" id="form-first-name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12 col-lg-6">

									<label class="sr-only" for="nric">IC Number</label>
									<input type="text" maxlength="12" name="nric" placeholder="IC Number" class="form-nric form-control" id="form-nric">
								</div>
								<div class="col-xs-12 col-lg-6">

									<div class="row"  style="margin-left:10px;">
										<div class="col-xs-4 col-lg-3 radio">
											<label>
												<input id="inlineradio1" name="race" value="malay" type="radio">
												Malay</label>
										</div>
										<div style="margin-top:10px;" class="col-xs-4  col-lg-3 radio">
											<label>
												<input id="inlineradio1" name="race" value="chinese" type="radio">
												Chinese</label>
										</div>
										<div style="margin-top:10px;" class="col-xs-4 col-lg-3 radio">
											<label>
												<input id="inlineradio1" name="race" value="indian" type="radio">
												Indian</label>
										</div>
										<div style="margin-top:10px;" class="col-xs-4 col-lg-3 radio">
											<label>
												<input id="inlineradio1" name="race" value="other" type="radio">
												Others</label>
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-next pull-right">Next</button>
							</div>

						</div>

					</fieldset>

					<fieldset style="margin-left:2%">
						<div class="form-top">
							<div class="form-top-left">
								<h3>Step 2 / 3</h3>
								<p>Contact Information:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-user-secret"></i>
							</div>
						</div>
						<div class="form-bottom">

							<div class="form-group">
								<div class="col-xs-12 col-lg-6">
									<label class="sr-only" for="phone">Phone Number</label>
									<input type="text" name="phone" maxlength="11" placeholder="Phone Number" class="form-phone-num form-control" id="form-phone-num">
								</div>

								<div class="col-xs-12 col-lg-6">
									<label class="sr-only" for="email">Email</label>
									<input type="text" name="email" placeholder="Email" class="form-email form-control" id="form-email">
								</div>
							</div>
							<div class="form-group">
								<div class=" col-xs-12 col-lg-12">
									<textarea name="address" placeholder="Address"
											  class="form-address form-control" id="form-address"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12 col-lg-12">
									<button type="button" class="btn btn-previous ">Previous</button>
									<button type="button" class="btn btn-next pull-right">Next</button>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<div class="form-top">
							<div class="form-top-left">
								<h3>Step 3 / 3</h3>
								<p>Education Background:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-graduation-cap"></i>
							</div>
						</div>
						<div class="form-bottom">
							<div class="form-group">
								<label for="edulvl">Highest Education</label>
								<select name="edulvl" class="form-edu-lvl form-control" id="form-edu-lcl"required>
									<option value="SPM" class="form-edu-lvl form-control" id="form-edu-lcl">SPM</option>
									<option value="Matrikulasi" class="form-edu-lvl form-control" id="form-edu-lcl">Matrikulasi</option>
									<option value="Foundation" class="form-edu-lvl form-control" id="form-edu-lcl">STPM</option>
									<option value="Foundation" class="form-edu-lvl form-control" id="form-edu-lcl">Foundation</option>
									<option value="Diploma" class="form-edu-lvl form-control" id="form-edu-lcl">Diploma</option>
									<option value="Bachelor's Degree" class="form-edu-lvl form-control" id="form-edu-lcl">Bachelor's Degree</option>
									<option value="Master's Degree" class="form-edu-lvl form-control" id="form-edu-lcl">Master's Degree</option>
									<option value="Doctorate" class="form-edu-lvl form-control" id="form-edu-lcl">Doctorate</option>
								</select>
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-institution">Institution</label>
								<input type="text" name="insti" placeholder="Institution" class="form-institution form-control" id="form-institution">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-results">Grades/CGPA</label>
								<input type="text" name="lresult" placeholder="Grades/CGPA" class="form-results form-control" id="form-results">
							</div>
							<div class="form-group">
								<label for="course">Programme to Apply</label>
								<select name="course" class="form-course form-control" id="form-course">
									<c:forEach items="${programmeList}" var="item">
										<option name="course" value="${item.progCodeIDprogramme}">${item.progNameprogramme}</option>
									</c:forEach>
									<!--
									<option name="course" value="1001">2D Animation using Flash</option>
									<option name="course" value="1002">Basic 3D Animation using Blender</option>
									<option name="course" value="1003">Basic 3D Modeling &amp; Printing using Blender<option>
									<option name="course" value="1004">Adobe Photoshop</option>
									<option name="course" value="1005">Adobe Illustrator<option>
									<option name="course" value="1006">Adobe After Effect</option>-->
								</select>
							</div>
							<button type="button" class="btn btn-previous">Previous</button>
							<button type="submit" class="btn pull-right">Submit Application</button>
							<div id="messages" class="hide" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div id="messages_content"></div>
							</div>
						</div>
					</fieldset>

				</form>
			   
				<script>
					$('#applyForm').submit(function (e) {
						$('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
						$('#messages_content').html('<h4>Application Submitted!</h4>');
						$('#modal').modal('show');
						setTimeout(function () {
							$('#applyForm').submit();
						}, 1000); // in milliseconds

					});
				</script>
			</div>
		</div>
	</div>
</section>
<!-- end Contact -->

<!-- Modal 1 Info-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">2D Flash Animation</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>
				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!--end Modal 1 Info-->

<!-- Modal 2 Info -->
<div class="modal fade" id="myModal-2" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Basic 3D Animation using Blender</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>

				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!--Modal 2 Info-->

<!-- Modal 3 Info -->
<div class="modal fade" id="myModal-3" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Basic 3D Modeling and Printing using Blender</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>

				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!--end Modal 3 Info-->

<!-- Modal 4 Info -->
<div class="modal fade" id="myModal-4" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Adobe Photoshop</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>
				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!--end Modal 4 Info-->

<!-- Modal 5 Info -->
<div class="modal fade" id="myModal-5" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Adobe Illustrator</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>
				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!--end Modal 5 Info-->

<!-- Modal 6 Info-->
<div class="modal fade" id="myModal-6" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Adobe After Effects</h4>
			</div>
			<div class="modal-body">
				<strong><h5>Course Objective</h5></strong>
				<p>The main objective of this course is to help the student understand the
					various concepts involved with designing and working with 3D Animation on
					the computer as well as a basic understanding of how to use Blender.</p>

				<strong><h5>Target Audience</h5></strong>
				<p>This course is targeted at those who are looking at getting started with
					Blender. You should have good general computer skills, but do not need to
					have prior experience of working with Blender.</p>
				<a href="#menu-contract" class="btn btn-default" onclick="$('.modal').modal('hide')">Apply Now</a>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- end Modal 6 Info -->

@endsection