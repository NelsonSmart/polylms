@extends('admin_ master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Bootstrap Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
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
				  <h4 class="box-title">Breakpoint specific</h4>
				  <p class="subtitle">Use <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</p>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive-sm">
					  <table class="table mb-0">
						<thead>
						  <tr>
							<th scope="col">#</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<th scope="row">1</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">2</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">3</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						</tbody>
					  </table>
					</div>

					<div class="table-responsive-md">
					  <table class="table mb-0">
						<thead>
						  <tr>
							<th scope="col">#</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<th scope="row">1</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">2</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">3</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						</tbody>
					  </table>
					</div>

					<div class="table-responsive-lg">
					  <table class="table mb-0">
						<thead>
						  <tr>
							<th scope="col">#</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<th scope="row">1</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">2</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">3</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						</tbody>
					  </table>
					</div>

					<div class="table-responsive-xl">
					  <table class="table mb-0">
						<thead>
						  <tr>
							<th scope="col">#</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
							<th scope="col">Heading</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<th scope="row">1</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">2</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						  <tr>
							<th scope="row">3</th>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
							<td>Cell</td>
						  </tr>
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Responsive Hover Table</h4>
				  <div class="box-controls pull-right">
					<div class="lookup lookup-circle lookup-right">
					  <input type="text" name="s">
					</div>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<div class="table-responsive">
					  <table class="table table-hover">
						<tr>
						  <th>Invoice</th>
						  <th>User</th>
						  <th>Date</th>
						  <th>Amount</th>
						  <th>Status</th>
						  <th>Country</th>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #123456</a></td>
						  <td>Lorem Ipsum</td>
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
						  <td>$158.00</td>
						  <td><span class="badge badge-pill badge-danger">Pending</span></td>
						  <td>CH</td>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #458789</a></td>
						  <td>Lorem Ipsum</td>
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
						  <td>$55.00</td>
						  <td><span class="badge badge-pill badge-warning">Shipped</span></td>
						  <td>US</td>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #84532</a></td>
						  <td>Lorem Ipsum</td>
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
						  <td>$845.00</td>
						  <td><span class="badge badge-pill badge-danger">Prossing</span></td>
						  <td>IG</td>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #48956</a></td>
						  <td>Lorem Ipsum</td>
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
						  <td>$145.00</td>
						  <td><span class="badge badge-pill badge-success">Paid</span></td>
						  <td>EN</td>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #92154</a></td>
						  <td>Lorem Ipsum</td>
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
						  <td>$450.00</td>
						  <td><span class="badge badge-pill badge-warning">Shipped</span></td>
						  <td>UK</td>
						</tr>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Default Table</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table mb-0">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div> 
			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Dark Table</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body p-0">
					<div class="table-responsive">
					  <table class="table table-dark mb-0">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div> 

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table head options</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table mb-0">
						  <thead class="thead-dark">
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table head options</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table mb-0">
						  <thead class="thead-light">
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table Striped</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-striped mb-0">
						  <thead class="thead-light">
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table dark Striped</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-striped table-dark mb-0">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table bordered</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-bordered mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table Dark bordered</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-bordered table-dark mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table borderless</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-borderless mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Table Dark borderless</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-borderless table-dark mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Hoverable rows</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-hover mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Hoverable Dark Table rows</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-hover table-dark mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Small table</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-sm mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Small table</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table class="table table-sm table-dark mb-0">
						  <tbody>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">First</th>
							  <th scope="col">Last</th>
							  <th scope="col">Handle</th>
							</tr>
						  </tbody>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>@fat</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td colspan="2">Larry the Bird</td>
							  <td>@twitter</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>

@endsection