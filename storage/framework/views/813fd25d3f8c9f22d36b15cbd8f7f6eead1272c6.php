<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
            <ul class="kt-menu__nav ">

            </ul>
        </div>
    </div>

    <div class="kt-header__topbar">
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user kt-rounded-">
                    <img alt="Pic" src="<?php echo e(asset('media/users/default.jpg')); ?>" class="kt-rounded-" />
                </div>
            </div>

            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
                <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(<?php echo e(asset('media/misc/head_bg_sm.jpg')); ?>)">
                    <div class="kt-user-card__wrapper">
                        <div class="kt-user-card__details">
                            <div class="kt-user-card__name"><?php echo e($authUser->name); ?></div>
                            <div class="kt-user-card__position"><?php echo e($authUser->roles()->select('display_name')->first()->display_name); ?></div>
                        </div>
                    </div>
                </div>

                <ul class="kt-nav kt-margin-b-10">
                    <li class="kt-nav__item">
                        <a href="<?php echo e(route('password.edit')); ?>" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><i class="flaticon-lock"></i></span>
                            <span class="kt-nav__link-text"><?php echo e(__('Change Password')); ?></span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="<?php echo e(route('logout')); ?>" class="kt-nav__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="kt-nav__link-icon"><i class="flaticon-logout"></i></span>
                            <span class="kt-nav__link-text"><?php echo e(__('Sign Out')); ?></span>
                        </a>
                        <form id="logout-form" class="d-none" action="<?php echo e(route('logout')); ?>" method="POST"><?php echo csrf_field(); ?></form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/inc/topbar.blade.php ENDPATH**/ ?>