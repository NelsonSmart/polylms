@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Ratings</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Ratings</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
					  
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Default</h4>
							<p>This is the most basic example of ratings.</p>
							<div id="default-star-rating"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Score</h4>
							<p>Used when we want starts with a saved rating.</p>
							<div id="score-rating"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Number Of Stars</h4>
							<p>Changes the number of stars.</p>
							<div id="no-of-stars"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Number Max</h4>
							<p>Change the maximum of stars that can be created.</p>
							<div id="max-number-stars"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Read Only</h4>
							<p>You can prevent users to vote. It can be applied with or without score.</p>
							<div id="read-only-stars"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">No Rated Message</h4>
							<p>If readOnly is enabled and there is no score, the hint "Not rated yet!" will be shown for all stars.</p>
							<div id="no-rated-msg"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Cancel</h4>
							<p>Add a cancel button on the left side of the stars to cancel the score.</p>
							<div id="cancel-star"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Space</h4>
							<p>You can change the space between the star and make them conjusted.</p>
							<div id="space-star"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Single</h4>
							<p>You can turn on just the mouseovered star instead all from the first until that one.</p>
							<div id="single-star"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Half</h4>
							<p>Enables the half star mouseover to be possible vote with half values.
							</p>
							<div id="half-star"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Star Half</h4>
							<p>Changes the color of the half star.</p>
							<div id="star-half"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Custom Icon</h4>
							<p>Change the maximum of stars that can be created.</p>
							<div id="custom-icon-star"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Icon Range</h4>
							<p>Change the maximum of stars that can be created.</p>
							<div id="icon-range"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Round Figure Enabled</h4>
							<ul class="list-unstyled mb-20">
								<li>Down: score &lt;= x.25 the star will be rounded down;</li>
								<li>Half: score &gt;= x.26 and &lt;= x.75 the star will be a half star;
								</li>
								<li>Up: score &gt;= x.76 the star will be rounded up.</li>
							</ul>
							<div id="round-enabled"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Round Figure Disabled</h4>
							<ul class="list-unstyled mb-20">
								<li>Down: score &lt; x.6 the star will be rounded down;</li>
								<li>Up: score &gt;= x.6 the star will be rounded up;</li>
							</ul>
							<div id="round-disabled"></div>
						</div>
					</div>
				</div>
			</div>	

		</section>
		<!-- /.content -->	  
	  </div>

@endsection