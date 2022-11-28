<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>

<div class="alert alert-danger">
	<ul>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<li><?php echo e($error); ?></li>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>

<?php endif; ?>

<div class="card">
	<div class="card-header">Add Booking</div>
	<div class="card-body">
		<form method="post" action="<?php echo e(route('booking.store')); ?>" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Fullname</label>
				<div class="col-sm-10">
					<input type="text" name="fullname" class="form-control" required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Note</label>
				<div class="col-sm-10">
					<input type="text" name="notes" class="form-control"  />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Seat</label>
				<div class="col-sm-10">
                    <select id="seat_id" name="seat_id" class="form-control" required >
                        <option value="">-- Select Seat --</option>
                        <?php $__currentLoopData = $seats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($seat->id); ?>">
                            <?php echo e($seat->price); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
					<!-- <input type="text" name="seat_id" class="form-control" required /> -->
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event</label>
				<div class="col-sm-10">
                    <select id="event_id" name="event_id" class="form-control" required >
                        <option value="">-- Select Seat --</option>
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($event->id); ?>">
                            <?php echo e($event->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
					<!-- <input type="text" name="event_id" class="form-control" required /> -->
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hafizh/var/www/php/ticket_apps/resources/views/create_booking.blade.php ENDPATH**/ ?>