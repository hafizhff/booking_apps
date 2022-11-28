<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header">Edit Event</div>
	<div class="card-body">
		<form method="post" action="<?php echo e(route('event.update', $event->id)); ?>" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event Title</label>
				<div class="col-sm-10">
					<input type="text" name="title" class="form-control" value="<?php echo e($event->title); ?>" required />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" value="<?php echo e($event->date); ?>" required />
				</div>
			</div>
            <div class="text-center">
				<input type="hidden" name="hidden_id" value="<?php echo e($event->id); ?>" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hafizh/var/www/php/ticket_apps/resources/views/edit_event.blade.php ENDPATH**/ ?>