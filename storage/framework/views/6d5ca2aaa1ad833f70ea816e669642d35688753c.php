<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">
	<?php echo e($message); ?>

</div>

<?php endif; ?>

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Event Data</b></div>
			<div class="col col-md-6">
				<a href="<?php echo e(route('event.create')); ?>" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Title</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
			<?php if(count($data) > 0): ?>

				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<tr>
						<td><?php echo e($row->title); ?></td>
						<td><?php echo e($row->date); ?></td>
						<td>
							<form method="post" action="<?php echo e(route('event.destroy', $row->id)); ?>">
								<?php echo csrf_field(); ?>
								<?php echo method_field('DELETE'); ?>
								<a href="<?php echo e(route('event.show', $row->id)); ?>" class="btn btn-primary btn-sm">View</a>
								<a href="<?php echo e(route('event.edit', $row->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php else: ?>
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			<?php endif; ?>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hafizh/var/www/php/ticket_apps/resources/views/event.blade.php ENDPATH**/ ?>