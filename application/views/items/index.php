<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Items</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
 <div class="col-lg-12">
     <div class="panel panel-default">
         <div class="panel-heading">
             Items List
         </div>
         <!-- /.panel-heading -->
         <div class="panel-body">
             <table class="table table-responsive table-striped table-hover table-bordered" id="item_tbl">
             		<thead>
             			<tr>
             				<th>No.</th>
             				<th>Name</th>
             				<th>Quantity</th>
             				<th>Category</th>
             				<th>Description</th>
             				<th class="no-print">Price</th>
             				<th>Status</th>
             				<th class="no-print">Action</th>
             			</tr>
             		</thead>
             		<tbody>
             			<?php foreach ($items as $key => $item): ?>
             				<?php $stocks = $orderingLevel->getQuantity($item->id)->quantity; ?>
                            <tr>
                 				<td><?php echo $key + 1; ?></td>
                 				<td><?php echo $item->name ?></td>
                 				<td><?php echo $orderingLevel->getQuantity($item->id)->quantity; ?></td>
                 				<td><?php echo $categoryModel->getName($item->category_id); ?></td>
                 				<td><?php echo $item->description ?></td>
                 				<td class="no-print"><?php echo '₱'. $price->getPrice($item->id) ?></td>
                 				<td><?php echo $stocks <= 0 ? '<span class="label label-danger">Stock Out</span>' : ($stocks <= 50 ? '<span class="label label-warning ">Needs restock</span>' : '<span class="label label-success ">Available</span>') ?></td>
                 				<td class="no-print">
                                    <a href='<?php echo base_url("items/stock-in/$item->id") ?>'><button title='Stock In' class='btn btn-primary btn-sm'>Stock In</button></a> 
    				                <a href='<?php echo base_url("ItemController/edit/$item->id") ?>'><button title='Edit' class='btn btn-info btn-sm'>Edit</button></a> 
    				                <a href='<?php echo base_url("ItemController/delete/$item->id") ?>'><button title='Delete' class='btn btn-info btn-warning btn-sm'>Delete</button></a>
                                </td>
                 			<?php endforeach; ?>
                            </tr>
             		</tbody>
             </table>
         </div>
         <!-- /.panel-body -->
     </div>
     <!-- /.panel -->
 </div>
 <!-- /.col-lg-12 -->
</div>
 
 