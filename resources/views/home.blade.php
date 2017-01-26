<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- jQuery -->
        <script src="/js/jquery-2.2.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js"></script>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add Product</div>
				<div class="panel-body">
					<form class="form-horizontal" id="add_prod_form" role="form" method="POST" action="javascript:void(null);" onsubmit="call()" >
						{!! csrf_field() !!}
						<!------------------------------------------------Product name--------------------------------------------------------------------->
						<div class="form-group">
							<label class="col-md-4 control-label">Product name</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="name" placeholder="Product name">
							</div>
						</div>
						<!------------------------------------------------Quantity in stock--------------------------------------------------------------------->
						<div class="form-group">
							<label class="col-md-4 control-label">Quantity in stock</label>
							<div class="col-md-8">
								<input type="number" step="1" class="form-control" name="quantity" placeholder="Quantity in stock">
							</div>
						</div>
						<!------------------------------------------------Product price--------------------------------------------------------------------->
						<div class="form-group">
							<label class="col-md-4 control-label">Product price</label>
							<div class="col-md-8">
								<input type="number" step="0.01" class="form-control" name="price" placeholder="Price per item"">
							</div>
						</div>
						<!----------------------------------------------Submit------------------------------------------------------->
						<div class="col-md-4 col-md-offset-4">
							<button  class="btn btn-primary" id="sub" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
			
        <table class="small table table-bordered table-hover table-condensed">
            <thead>
				<th>Product name</th><th>Quantity in stock</th><th>Price per item</th><th>Datetime submitted</th><th>Total value number</th>
            </thead>
            <tbody id="results">
				

            </tbody>
        </table>
		</div>
    </body>
	<script type="text/javascript" language="javascript">
		function call() {
			  var msg   = $('#add_prod_form').serialize();
				$.ajax({
				  type: 'POST',
				  url: 'home/add-product',
				  data: msg,
				  success: function(data) {
					$('#results').html(data);
				  },
				  error:  function(xhr, str){
					alert('Error: ' + xhr.responseCode);
				  }
				});
			}
		$(document).ready(function()
		{
			$.ajaxSetup({
				headers: {
				  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		});//$(document).ready(function()	
	</script>	
</html>