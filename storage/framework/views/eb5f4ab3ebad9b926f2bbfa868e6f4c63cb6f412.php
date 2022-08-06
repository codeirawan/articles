<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            <a href="<?php echo e(url('/')); ?>">
                <img alt="Logo" src="<?php echo e(asset('media/logos/kis-logo-app.png')); ?>" />
            </a>
        </div>
        <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
        </div>
    </div>

    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu" data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
            <ul class="kt-menu__nav">
                <li class="kt-menu__item <?php if(Request::is('/')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('home')); ?>" class="kt-menu__link">
                        <i class="kt-menu__link-icon flaticon-earth-globe"></i>
                        <span class="kt-menu__link-text"><?php echo e(__('Explore Now')); ?></span>
                    </a>
                </li>

                <?php if (app('laratrust')->isAbleTo(['view-recruitment'])) : ?>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text"><?php echo e(__('Employee Management')); ?></h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                <?php endif; // app('laratrust')->permission ?>
                <?php if (app('laratrust')->isAbleTo('view-recruitment')) : ?>
                    <li class="kt-menu__item <?php if(Request::is('recruitment*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                        <a href="<?php echo e(route('recruitment.index')); ?>" class="kt-menu__link">
                            <i class="kt-menu__link-icon fa fa-user-plus"></i>
                            <span class="kt-menu__link-text"><?php echo e(__('Recruitment')); ?></span>
                        </a>
                    </li>
                <?php endif; // app('laratrust')->permission ?>

                <?php if (app('laratrust')->isAbleTo(['view-user', 'view-role'])) : ?>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text"><?php echo e(__('User Management')); ?></h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                <?php endif; // app('laratrust')->permission ?>
                <?php if (app('laratrust')->isAbleTo('view-user')) : ?>
                    <li class="kt-menu__item <?php if(Request::is('user*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                        <a href="<?php echo e(route('user.index')); ?>" class="kt-menu__link">
                            <i class="kt-menu__link-icon flaticon2-user"></i>
                            <span class="kt-menu__link-text"><?php echo e(__('User')); ?></span>
                        </a>
                    </li>
                <?php endif; // app('laratrust')->permission ?>
                <?php if (app('laratrust')->isAbleTo('view-role')) : ?>
                    <li class="kt-menu__item <?php if(Request::is('role*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                        <a href="<?php echo e(route('role.index')); ?>" class="kt-menu__link">
                            <i class="kt-menu__link-icon flaticon2-user-1"></i>
                            <span class="kt-menu__link-text"><?php echo e(__('Role')); ?></span>
                        </a>
                    </li>
                <?php endif; // app('laratrust')->permission ?>

                <?php if (app('laratrust')->isAbleTo(['view-product-category', 'view-product-unit', 'view-payment-method', 'view-position', 'view-resume-source', 'view-file-type'])) : ?>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text"><?php echo e(__('Master Data Management')); ?></h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item kt-menu__item--submenu <?php if(Request::is('master*')): ?> kt-menu__item--open kt-menu__item--here <?php endif; ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                            <i class="kt-menu__link-icon flaticon2-layers-1"></i>
                            <span class="kt-menu__link-text"><?php echo e(__('Master Data')); ?></span>
                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="kt-menu__submenu">
                            <span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
                                    <span class="kt-menu__link">
                                        <span class="kt-menu__link-text"><?php echo e(__('Master Data')); ?></span>
                                    </span>
                                </li>
                                <li class="kt-menu__item <?php if(Request::is('master/category*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                                    <a href="<?php echo e(route('master.category.index')); ?>" class="kt-menu__link">
                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                        <span class="kt-menu__link-text"><?php echo e(__('Category')); ?></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item <?php if(Request::is('master/article*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                                    <a href="<?php echo e(route('master.article.index')); ?>" class="kt-menu__link">
                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                        <span class="kt-menu__link-text"><?php echo e(__('Article')); ?></span>
                                    </a>
                                </li>
                                <?php if (app('laratrust')->isAbleTo('view-position')) : ?>
                                    <li class="kt-menu__item <?php if(Request::is('master/position*')): ?> kt-menu__item--here <?php endif; ?>" aria-haspopup="true">
                                        <a href="<?php echo e(route('master.position.index')); ?>" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text"><?php echo e(__('Position')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; // app('laratrust')->permission ?>
                            </ul>
                        </div>
                    </li>
                <?php endif; // app('laratrust')->permission ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/inc/sidebar.blade.php ENDPATH**/ ?>