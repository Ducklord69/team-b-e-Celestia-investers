<!-- resources/views/pages/contact.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Contact Us</h1>
    <form method="POST" action="<?php echo e(route('contact.submit')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\all\laragon\www\team-b-e-Celestia-investers\4S_Manuals-main\resources\views/pages/contact.blade.php ENDPATH**/ ?>