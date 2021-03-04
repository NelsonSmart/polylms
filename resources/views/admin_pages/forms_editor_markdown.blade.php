@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Markdown</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Markdown</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
		 <div class="row">
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Standard Editor</h4>
					  <h6 class="box-subtitle">You can find the <a href="https://github.com/toopay/bootstrap-markdown" target="_blank">offical website </a></h6>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						 <p>
							<strong>Bootstrap-Markdown</strong> designed to be easily integrated with
							your bootstrap project. It exposes useful API that allow you to
							fully hook-in into the plugin</p>
						  <div class="example">
							<form>
							  <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="11">### Heading is here
			Lorem ipsum dolor sit amet, ****consectetur adipisicing elit****consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <u>Exercitation</u> ullamco laboris nisi ut aliquip ex ea commodo consequat.
			*   list text here
			*   list text here
			*   1.  list text here
				2.  list text here
				3.  list text here
			*   list text here
			#### Title
			laboris nisi ut aliquip ex ea commodo consequat [link is here](http://www.github.com)(http://www.github.com)</textarea>
							</form>       	
					  </div>
				  </div>
					<!-- /.box-body -->			
				 </div>
				  <!-- /.box -->
			 </div>

			 <div class="col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Inline Editing</h4>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<p>Inline editing with
							<strong>Bootstrap-Markdown</strong> is done by adding <code class="prettyprint">data-provide=&quot;markdown-editable&quot;</code>                attribute</p>
						  <div class="example">
							<div data-provide="markdown-editable" data-iconlibrary="fa">
							  <h3>Heading is here</h3>
							  <p>Lorem ipsum dolor sit amet,
								<strong><b>consectetur adipisicing elit</b></strong>consectetur adipisicing
								elit, sed do eiusmod tempor incididunt ut labore et dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud <u>Exercitation</u>                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							  <ul class="list-unstyled">
								<li>list text here</li>
								<li>list text here</li>
								<li>
								  <ol>
									<li>list text here</li>
									<li>list text here</li>
									<li>list text here</li>
								  </ol>
								</li>
								<li>list text here</li>
							  </ul>
							  <h4>Title</h4>
							  <p>laboris nisi ut aliquip ex ea commodo consequat <a href="http://www.github.com/">link is here</a>(http://www.github.com)</p>
							</div>
						  </div>
					</div>
					<!-- /.box-body -->			
				 </div>
				  <!-- /.box -->
			 </div>		 
			</div>

			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Examples</h4>					  
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form>
							<p>Custom width using <code>data-width="400"</code> attribute</p>
							<div class="example example-responsive">
							  <textarea data-provide="markdown" data-iconlibrary="fa" data-width="400"></textarea>
							</div>
							</form>
						</div>
						<!-- /.box-body -->			
					 </div>
					  <!-- /.box -->
				 </div>

				 <div class="col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Examples</h4>					  
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form>
							<p>Hidden buttons using <code>data-hidden-buttons="cmdBold"</code>attribute</p>
							<div class="example">
							  <textarea data-provide="markdown" data-iconlibrary="fa" data-hidden-buttons="cmdBold"></textarea>
							</div>
							</form>
						</div>
						<!-- /.box-body -->			
					 </div>
					  <!-- /.box -->
				 </div>

			</div>
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Examples</h4>					  
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form>
							<p>Hideable on blur using <code>data-hideable="true"</code> attribute</p>
							<div class="example">
							  <textarea data-provide="markdown" data-iconlibrary="fa" data-hideable="true"></textarea>
							</div>
							</form>
						</div>
						<!-- /.box-body -->			
					 </div>
					  <!-- /.box -->
				 </div>

				 <div class="col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Examples</h4>					  
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form>
							<p>Savable using <code>data-savable="true"</code> attribute</p>
							<div class="example">
							  <textarea data-provide="markdown" data-iconlibrary="fa" data-savable="true"></textarea>
							</div>
							</form>
						</div>
						<!-- /.box-body -->			
					 </div>
					  <!-- /.box -->
				 </div>

			</div>

		</section>
		<!-- /.content -->
	  </div>

@endsection