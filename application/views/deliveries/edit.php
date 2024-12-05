<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Delivery</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				New Delivery
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6 col-md-offset-3">
						<?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success">
								<p><?php echo $this->session->flashdata('success') ?></p>
							</div>
						<?php endif; ?> 
						<form action="<?php echo base_url('DeliveriesController/update') ?>" method="POST">
							<div class="form-group">
								<label>Select Supplier</label>
								<select class="form-control" name="supplier_id" required="required">
									<option value="">Select Supplier</option>
									<?php foreach ( $suppliers as $supplier ): ?>
										<option value="<?php echo $supplier->id ?>"><?php echo $supplier->name ?></option>
									<?php endforeach; ?>
								</select>
							</div>  
                            <input type="hidden" name="delivery_id" value="<?php echo $delivery_id; ?>" />
                            <input type="hidden" name="id" value="<?php echo $delivery->id; ?>" />
							<div class="form-group">
								<label>Item Name</label>
								<input type="text" name="item_name" value="<?php echo $delivery->item ?>" class="form-control" required="required">
							</div> 
							<div class="form-group">
								<label>Size</label>
								<input type="text" name="price" value="<?php echo $delivery->price ?>" class="form-control" required="required">
							</div> 
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" name="quantity" value="<?php echo $delivery->quantity ?>" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Delivery Status</label>
								<input type="text" name="status" value="<?php echo $delivery->status ?>" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Remarks</label>
								<input type="text" name="remarks" value="<?php echo $delivery->remarks ?>" class="form-control" required="required">
							</div>
							<div class="form-group">
								<input type="submit" name="" value="Submit" class="btn btn-primary" required="required">					 
							</div> 
						</form>
					</div>
					<!-- /.col-lg-6 (nested) -->
					
					<!-- /.col-lg-6 (nested) -->
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>  


 