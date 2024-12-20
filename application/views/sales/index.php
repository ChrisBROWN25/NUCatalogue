	<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Sales Report</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
 <div class="col-lg-12">
     <div class="panel panel-default">
        	 
         <!-- /.panel-heading -->
         <div class="panel-body">
         		<div class="col-md-3">
         			<div class="btn-group" id="btn-group-menu" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-default active" data-id="graph">Graphical View</button>
				  <button type="button" class="btn btn-default" data-id="table">Table View</button> 
				</div>
         		</div>
         		<div class="col-md-6" style="display: none;" id="table-menu">
			 
			    <div class="input-group input-daterange">

			      <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">

			      <div class="input-group-addon">to</div>

			      <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">

			    </div>
				<div>
					<select style="margin-top:10px" class="form-control" id="sales-customer-id"> 
						<option>Select Customer</option>
						<?php foreach($customers as $customer): ?>
							<option value="<?php echo $customer->id ?>"><?php echo $customer->name ?></option>
							<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="col-md-6" id="graph-menu">
			    	<div class="btn-group pull-center" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-default active" data-id="week">Last 7 Days</button>
				  <button type="button" class="btn btn-default" data-id="month">Monthly</button> 
				  <button type="button" class="btn btn-default" data-id="year">Yearly</button>
				</div>
			</div>
			<div class="col-lg-12" id="graph">

				<canvas id="myChart" width="400" height="150"></canvas>
			</div>
			<div class="col-lg-12" style="display: none;" id="table_view">
				<h5><span id="range">Today Sales Report </span><span class="pull-right">Total Sales: <span id="total-sales"></span></span></h5>
				<table class="table table-bordered table-stripped" id="sales_table" style="width: 100%">
					<thead>
						<tr>
							<th>Date</th>
							<th>Customer</th> 
							<th>Item Code</th>
							<th>Item Name</th> 
							<th>Size</th>
							<th>Quantity</th>   
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
         </div>
         <!-- /.panel-body -->
     </div>
     <!-- /.panel -->
 </div>
 <!-- /.col-lg-12 -->
</div>

 <div class="modal" tabindex="-1" role="dialog" id="modal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Sales Summary</h5>

			</div>
			<div class="modal-body">
				<div>
					Sales ID: <span id="sale-id"></span>
					<br>
				</div>
				<table style="width: 100%;" class="table table-bordered table-hover table-striped" id="sales-description-table">
					<thead>
						<tr>
							<td>Item ID</td>
							<td>Item Name</td> 
							<td>Price</td>
							<td>Quantity</td>
							<td>Sub Total</td>
						</tr>
					</thead>
					<tbody> 
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var labels = JSON.parse('<?php echo json_encode(array_keys($dataset)) ?>');
 	var totalSales = JSON.parse('<?php echo json_encode(array_values($dataset)) ?>');
  
</script>
 

