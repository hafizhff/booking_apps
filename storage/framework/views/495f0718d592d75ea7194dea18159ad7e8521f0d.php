<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">
	<?php echo e($message); ?>

</div>

<?php endif; ?>

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Booking Data</b></div>
			<div class="col col-md-6">
				<a href="<?php echo e(route('booking.create')); ?>" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Fullname</th>
				<th>Email</th>
                <th>Title</th>
				<th>Notes</th>
                <th>Seat</th>
				<th>Event</th>
				<th>Action</th>
			</tr>
			<?php if(count($data) > 0): ?>

				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<tr>
						<td><?php echo e($row->fullname); ?></td>
						<td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->title); ?></td>
						<td><?php echo e($row->notes); ?></td>
                        <td><?php echo e($row->seat->price); ?></td>
						<td><?php echo e($row->event->title); ?></td>
						<td>
							<form method="post" action="<?php echo e(route('booking.destroy', $row->id)); ?>">
								<?php echo csrf_field(); ?>
								<?php echo method_field('DELETE'); ?>
								<a href="<?php echo e(route('booking.show', $row->id)); ?>" class="btn btn-primary btn-sm">View</a>
								<a href="<?php echo e(route('booking.edit', $row->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
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
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hafizh/var/www/php/ticket_apps/resources/views/booking.blade.php ENDPATH**/ ?>