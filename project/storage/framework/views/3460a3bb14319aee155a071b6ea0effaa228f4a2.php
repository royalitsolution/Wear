<?php $__env->startSection('content'); ?>

<!-- Breadcrumb Area Start -->


<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Contact us</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>">
                            <?php echo e($langg->lang17); ?>

                        </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('front.contact')); ?>">
                            <?php echo e($langg->lang20); ?>

                        </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-heading">
                    <h1 class="title">Get in Touch</h1>

                </div>
            </div>
        </div>
        <div class="row">
         <?php if($ps->street != null): ?> 
         <div class="col-lg-4">
            <div class="contact-info"> <i class="fas fa-map-marker-alt"></i>
                <h2 class="title">Find us</h2>
                <p><?php if($ps->street != null): ?> 
                    <?php echo $ps->street; ?>

                <?php endif; ?></p>
            </div>
        </div>
        <?php endif; ?>
        <?php if($ps->phone != null || $ps->fax != null ): ?>
        <div class="col-lg-4">
            <div class="contact-info"> <i class="fas fa-phone-alt"></i>
                <h2 class="title">Make a Call</h2>
                <p><?php if($ps->phone != null && $ps->fax != null): ?>
                    <a href="tel:<?php echo e($ps->phone); ?>"><?php echo e($ps->phone); ?></a>
                    <br>
                    <a href="tel:<?php echo e($ps->fax); ?>"><?php echo e($ps->fax); ?></a>
                    <br>
                    <?php elseif($ps->phone != null): ?>
                    <a href="tel:<?php echo e($ps->phone); ?>"><?php echo e($ps->phone); ?></a>
                    <?php else: ?>
                    <a href="tel:<?php echo e($ps->fax); ?>"><?php echo e($ps->fax); ?></a>
                <?php endif; ?></p>
            </div>
        </div>
        <?php endif; ?>
        <?php if($ps->site != null || $ps->email != null ): ?>
        <div class="col-lg-4">
            <div class="contact-info"> <i class="fas fa-envelope"></i>
                <h2 class="title">Send Email/Visit Site</h2>
                <?php if($ps->site != null && $ps->email != null): ?> 
                <a href="<?php echo e($ps->site); ?>" target="_blank"><?php echo e($ps->site); ?></a>
                <br>
                <a href="mailto:<?php echo e($ps->email); ?>"><?php echo e($ps->email); ?></a>
                <?php elseif($ps->site != null): ?>
                <a href="<?php echo e($ps->site); ?>" target="_blank"><?php echo e($ps->site); ?></a>
                <br>
                <?php else: ?>
                <a href="mailto:<?php echo e($ps->email); ?>"><?php echo e($ps->email); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-lg-6">
         <form id="contactform" class="contact-form" action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('includes.admin.form-both', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <label class="contact-label">
                <input type="text" name="name" placeholder="<?php echo e($langg->lang47); ?> *" required="">
                <i class="fas fa-user"></i>
                <!-- <input type="text"placeholder="Your Name"> <i class="fas fa-user"></i>  -->
            </label> 
            <label
            class="contact-label">
            <input type="text" name="phone"  placeholder="<?php echo e($langg->lang48); ?> *">
            <i class="icofont-ui-call"></i></label> 
            <label class="contact-label"> 
                <input type="email" name="email"  placeholder="<?php echo e($langg->lang49); ?> *" required="">
                <i class="icofont-envelope"></i>
            </label> <label
            class="contact-label">
            <textarea name="text" placeholder="<?php echo e($langg->lang50); ?> *" required=""></textarea><i
                                class="fas fa-pen-nib"></i></label>
            <?php if($gs->is_capcha == 1): ?>

            <ul class="captcha-area">
                <li>
                    <p><img class="codeimg1" src="<?php echo e(asset("assets/images/capcha_code.png")); ?>" alt=""> <i class="fas fa-sync-alt pointer refresh_code"></i></p>

                </li>
                <li>
                    <input name="codes" type="text" class="input-field" placeholder="<?php echo e($langg->lang51); ?>" required="">

                </li>
            </ul>

            <?php endif; ?>
            <input type="hidden" name="to" value="<?php echo e($ps->contact_email); ?>">
            <button class="btn btn-inline"> <i
                class="fas fa-paper-plane"></i> <span><?php echo e($langg->lang52); ?></span> </button>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="contact-map"><!--  <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="100%"
                aria-hidden="false" tabindex="0"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4939423414266!2d77.36141841440681!3d28.614954691628483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceeb705b1e685%3A0xa3665501a9f22bb!2sTekniko%20Global%20-%20Mobile%20App%20Development%20company%20in%20Noida%2C%20Delhi%2C%20India%20%7C%20Android%20app%20Development%20company%20Noida%2C%20Delhi%2C%20India!5e0!3m2!1sen!2sin!4v1612250729872!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Area Start -->
<!-- <section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-section-title">
                    <?php echo $ps->contact_title; ?>

                    <?php echo $ps->contact_text; ?>

                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="left-area">
                    <div class="contact-form">
                        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                        <form id="contactform" action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo $__env->make('includes.admin.form-both', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

                            <div class="form-input">
                                <input type="text" name="name" placeholder="<?php echo e($langg->lang47); ?> *" required="">
                                <i class="icofont-user-alt-5"></i>
                            </div>
                            <div class="form-input">
                                <input type="text" name="phone"  placeholder="<?php echo e($langg->lang48); ?> *">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <div class="form-input">
                                <input type="email" name="email"  placeholder="<?php echo e($langg->lang49); ?> *" required="">
                                <i class="icofont-envelope"></i>
                            </div>
                            <div class="form-input">
                                <textarea name="text" placeholder="<?php echo e($langg->lang50); ?> *" required=""></textarea>
                            </div>

                            <?php if($gs->is_capcha == 1): ?>

                            <ul class="captcha-area">
                                <li>
                                    <p><img class="codeimg1" src="<?php echo e(asset("assets/images/capcha_code.png")); ?>" alt=""> <i class="fas fa-sync-alt pointer refresh_code"></i></p>

                                </li>
                                <li>
                                    <input name="codes" type="text" class="input-field" placeholder="<?php echo e($langg->lang51); ?>" required="">

                                </li>
                            </ul>

                            <?php endif; ?>


                            <input type="hidden" name="to" value="<?php echo e($ps->contact_email); ?>">
                            <button class="submit-btn" type="submit"><?php echo e($langg->lang52); ?></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="right-area">

                    <?php if($ps->site != null || $ps->email != null ): ?>
                    <div class="contact-info ">
                        <div class="left ">
                            <div class="icon">
                                <i class="icofont-email"></i>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <?php if($ps->site != null && $ps->email != null): ?> 
                                <a href="<?php echo e($ps->site); ?>" target="_blank"><?php echo e($ps->site); ?></a>
                                <a href="mailto:<?php echo e($ps->email); ?>"><?php echo e($ps->email); ?></a>
                                <?php elseif($ps->site != null): ?>
                                <a href="<?php echo e($ps->site); ?>" target="_blank"><?php echo e($ps->site); ?></a>
                                <?php else: ?>
                                <a href="mailto:<?php echo e($ps->email); ?>"><?php echo e($ps->email); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($ps->street != null): ?> 
                    <div class="contact-info">
                        <div class="left">
                            <div class="icon">
                                <i class="icofont-google-map"></i>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <p>
                                    <?php if($ps->street != null): ?> 
                                    <?php echo $ps->street; ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($ps->phone != null || $ps->fax != null ): ?> 
                    <div class="contact-info">
                        <div class="left">
                            <div class="icon">
                                <i class="icofont-smart-phone"></i>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <?php if($ps->phone != null && $ps->fax != null): ?>
                                <a href="tel:<?php echo e($ps->phone); ?>"><?php echo e($ps->phone); ?></a>
                                <a href="tel:<?php echo e($ps->fax); ?>"><?php echo e($ps->fax); ?></a>
                                <?php elseif($ps->phone != null): ?>
                                <a href="tel:<?php echo e($ps->phone); ?>"><?php echo e($ps->phone); ?></a>
                                <?php else: ?>
                                <a href="tel:<?php echo e($ps->fax); ?>"><?php echo e($ps->fax); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>


                    <div class="social-links">
                        <h4 class="title"><?php echo e($langg->lang53); ?> :</h4>
                        <ul>

                         <?php if(App\Models\Socialsetting::find(1)->f_status == 1): ?>
                         <li>
                            <a href="<?php echo e(App\Models\Socialsetting::find(1)->facebook); ?>" class="facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(App\Models\Socialsetting::find(1)->g_status == 1): ?>
                        <li>
                            <a href="<?php echo e(App\Models\Socialsetting::find(1)->gplus); ?>" class="google-plus" target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(App\Models\Socialsetting::find(1)->t_status == 1): ?>
                        <li>
                            <a href="<?php echo e(App\Models\Socialsetting::find(1)->twitter); ?>" class="twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(App\Models\Socialsetting::find(1)->l_status == 1): ?>
                        <li>
                            <a href="<?php echo e(App\Models\Socialsetting::find(1)->linkedin); ?>" class="linkedin" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(App\Models\Socialsetting::find(1)->d_status == 1): ?>
                        <li>
                            <a href="<?php echo e(App\Models\Socialsetting::find(1)->dribble); ?>" class="dribbble" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->
<!-- Contact Us Area End-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>