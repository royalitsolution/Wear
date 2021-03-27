<li>
        <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i><?php echo e(__('Orders')); ?></a>
        <ul class="collapse list-unstyled" id="order" data-parent="#accordion" >
               <li>
                <a href="<?php echo e(route('admin-order-index')); ?>"> <?php echo e(__('All Orders')); ?></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-order-pending')); ?>"> <?php echo e(__('Pending Orders')); ?></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-order-processing')); ?>"> <?php echo e(__('Processing Orders')); ?></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-order-completed')); ?>"> <?php echo e(__('Completed Orders')); ?></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-order-declined')); ?>"> <?php echo e(__('Declined Orders')); ?></a>
            </li>

        </ul>
    </li>
    <li>
        <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i><?php echo e(__('Products')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-prod-physical-create')); ?>"><span><?php echo e(__('Add New Product')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-prod-index')); ?>"><span><?php echo e(__('All Products')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-prod-deactive')); ?>"><span><?php echo e(__('Deactivated Product')); ?></span></a>
            </li>



        </ul>
    </li>















    <li>
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-user"></i><?php echo e(__('Customers')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-user-index')); ?>"><span><?php echo e(__('Customers List')); ?></span></a>
            </li>



            <li>
                <a href="<?php echo e(route('admin-user-image')); ?>"><span><?php echo e(__('Customer Default Image')); ?></span></a>
            </li>
        </ul>
    </li>









































    <li>
        <a href="#menu5" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-sitemap"></i><?php echo e(__('Manage Categories')); ?></a>
        <ul class="collapse list-unstyled
        <?php if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category'): ?>
          show
        <?php elseif(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory'): ?>
          show


        <?php endif; ?>" id="menu5" data-parent="#accordion" >
                <li class="<?php if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category'): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin-cat-index')); ?>"><span><?php echo e(__('Main Category')); ?></span></a>
                </li>
                <li class="<?php if(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory'): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin-subcat-index')); ?>"><span><?php echo e(__('Sub Category')); ?></span></a>
                </li>



        </ul>
    </li>

    <li>
        <a href="<?php echo e(route('admin-prod-import')); ?>"><i class="fas fa-upload"></i><?php echo e(__('Bulk Product Upload')); ?></a>
    </li>

    <li>
        <a href="#menu4" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-speech-comments"></i><?php echo e(__('Product Discussion')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu4" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-rating-index')); ?>"><span><?php echo e(__('Product Reviews')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-comment-index')); ?>"><span><?php echo e(__('Comments')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-report-index')); ?>"><span><?php echo e(__('Reports')); ?></span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="<?php echo e(route('admin-coupon-index')); ?>" class=" wave-effect"><i class="fas fa-percentage"></i><?php echo e(__('Set Coupons')); ?></a>
    </li>
    <li>
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i><?php echo e(__('Blog')); ?>

        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-cblog-index')); ?>"><span><?php echo e(__('Categories')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-blog-index')); ?>"><span><?php echo e(__('Posts')); ?></span></a>
            </li>
        </ul>
    </li>

































































    <li>
        <a href="#homepage" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-edit"></i><?php echo e(__('Home Page Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="homepage" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-sl-index')); ?>"><span><?php echo e(__('Sliders')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-service-index')); ?>"><span><?php echo e(__('Services')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-ps-best-seller')); ?>"><span><?php echo e(__('Right Side Banner1')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-ps-big-save')); ?>"><span><?php echo e(__('Right Side Banner2')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-sb-index')); ?>"><span><?php echo e(__('Top Small Banners')); ?></span></a>
            </li>

            <li>
                <a href="<?php echo e(route('admin-sb-large')); ?>"><span><?php echo e(__('Large Banners')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-sb-bottom')); ?>"><span><?php echo e(__('Bottom Small Banners')); ?></span></a>
            </li>

            <li>
                <a href="<?php echo e(route('admin-review-index')); ?>"><span><?php echo e(__('Reviews')); ?></span></a>
            </li>





            <li>
                <a href="<?php echo e(route('admin-ps-customize')); ?>"><span><?php echo e(__('Home Page Customization')); ?></span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#menu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i><?php echo e(__('Menu Page Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-faq-index')); ?>"><span><?php echo e(__('FAQ Page')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-ps-contact')); ?>"><span><?php echo e(__('Contact Us Page')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-page-index')); ?>"><span><?php echo e(__('Other Pages')); ?></span></a>
            </li>
        </ul>
    </li>




















    <li>
        <a href="#socials" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-paper-plane"></i><?php echo e(__('Social Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="socials" data-parent="#accordion">
                <li><a href="<?php echo e(route('admin-social-index')); ?>"><span><?php echo e(__('Social Links')); ?></span></a></li>


        </ul>
    </li>



























    <li>
        <a href="<?php echo e(route('admin-staff-index')); ?>" class=" wave-effect"><i class="fas fa-user-secret"></i><?php echo e(__('Manage Staffs')); ?></a>
    </li>

    <li>
        <a href="<?php echo e(route('admin-subs-index')); ?>" class=" wave-effect"><i class="fas fa-users-cog mr-2"></i><?php echo e(__('Subscribers')); ?></a>
    </li>
















