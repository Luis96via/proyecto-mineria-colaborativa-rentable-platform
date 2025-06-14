<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <ion-icon name="person-circle" style="height: 40px; width: 40px;"></ion-icon>
                    </div>
                    <div class="in">
                        <strong  style="color: white;">XTRADE</strong>
                         <?php if(auth()->guard()->check()): ?>
                         <div class="text-muted">Reffer ID: <?php echo e(Auth::user()->username); ?></div>
                         <?php endif; ?>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->
                
                 <?php if(auth()->guard()->check()): ?>
                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Balance</div>
                    <div class="in">
                        <h1 class="amount"><?php echo e(@$general->currency_sym); ?> <?php echo e(showAmount(@$user->balance)); ?></h1>
                    </div>
                </div>
                <!-- * balance -->
                <?php endif; ?>

               

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="pie-chart-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Dashboard
                                <span class="badge badge-danger">1</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pages
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="apps-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Components
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <div class="in">
                                My Cards
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    
                    <?php if(auth()->guard()->check()): ?>
                    <li>
                        <a href="<?php echo e(route('user.logout')); ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>
                     <?php endif; ?>

                </ul>
                <!-- * others -->


            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->
<?php /**PATH C:\Users\Usuario\Documents\laravel\Auto tradin1g\core\resources\views/theme3/includes/user/side_nav.blade.php ENDPATH**/ ?>