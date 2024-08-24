<?php $__env->startSection('template_title'); ?>
    <?php echo e($product->name ?? __('Show') . " " . __('Product')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('products.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    <?php echo e($product->name); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    <?php echo e($product->price); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    <?php echo e($product->description); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Image Url:</strong>
                                    <?php echo e($product->image_url); ?>

                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/dusk-test/resources/views/product/show.blade.php ENDPATH**/ ?>