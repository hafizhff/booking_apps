<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Event Details</b></div>
			<div class="col col-md-6">
				<a href="<?php echo e(route('event.index')); ?>" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Event Name</b></label>
			<div class="col-sm-10">
				<?php echo e($event->title); ?>

			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Event Email</b></label>
			<div class="col-sm-10">
				<?php echo e($event->date); ?>

			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hafizh/var/www/php/ticket_apps/resources/views/show_event.blade.php ENDPATH**/ ?>