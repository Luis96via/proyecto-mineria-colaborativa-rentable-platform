<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">

            <div class="section-header pl-0">
                <h1 class="pl-0"><?php echo e(__($pageTitle)); ?></h1>
            </div>

            <div class="mb-4">
                <code class="mb-2 d-inline-block text-dark">
                    <?php echo e(__('Please Set Cron Url To Your Server')); ?>

                </code>
                <div class="input-group">
                    <input type="text" name="" class="form-control copy-text" value="curl -s <?php echo e(route('cron.collect.bonus')); ?>">
                    <div class="input-group-append">
                        <button class="input-group-text gr-bg-1 text-white copy" type="button" id="button-addon2"><?php echo e(__('Copy Cron Url')); ?></button>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="my-3"><i data-feather="calendar"></i> Total Section</h6>
                    <hr>
                </div>
                

                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-4">
                        <div class="icon">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total User')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e($totalUser); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-3">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Active User')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e($activeUser); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-2">
                        <div class="icon">
                            <i class="fas fa-user-times"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Ban User')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e($deActiveUser); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-10">
                        <div class="icon">
                            <i class="fa-brands fa-bitcoin fa-shake"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Trade Profit')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$tradingProfit, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-7">
                        <div class="icon">
                            <i class="fa-brands fa-bitcoin fa-shake"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Trade Lose')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$tradingLose, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-5">
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Deposit')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$totalDeposit, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-4">
                        <div class="icon">
                            <i class="fa-solid fa-spinner fa-spin"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Pending Deposit')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$pendignDeposit, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-7">
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Withdraw')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$totalWithdraw, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-6 custom-xxl-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-8">
                        <div class="icon">
                            <i class="fa-solid fa-spinner fa-spin"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Total Pending Withdraw')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$pendignWithdraw, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="my-3"><i data-feather="calendar"></i> Today Section</h6>
                    <hr>
                </div>
                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-1">
                        <div class="icon">
                            <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Today Trade Runing')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format($todayTrading, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-3">
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Today Deposit')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$todayDeposit, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="custom-xxxl-4 custom-xxl-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card-stat gr-bg-7">
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="content">
                            <p class="caption"><?php echo e(__('Today Withdraw')); ?></p>
                            <h4 class="card-stat-amount"><?php echo e(number_format(@$todayWithdraw, 2) . ' ' . @$general->site_currency); ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            

            

            <div class="row">
                <div class="col-md-12  col-lg-12 col-12 all-users-table">
                    <div class="card-header">
                        <h5><?php echo e(__('All Users')); ?></h5>
                    </div>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Sl')); ?></th>
                                            <th><?php echo e(__('User Name')); ?></th>
                                            <th><?php echo e(__('Email')); ?></th>
                                            <th><?php echo e(__('Status')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($key + $users->firstItem()); ?></td>
                                                <td><?php echo e($user->username); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td>
                                                    <?php if($user->status): ?>
                                                        <span class='badge badge-success'><?php echo e(__('Active')); ?></span>
                                                    <?php else: ?>
                                                        <span class='badge badge-danger'><?php echo e(__('Inactive')); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('admin.user.details', $user)); ?>"
                                                        class="btn btn-md btn-primary"><i class="fa fa-pen"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php if($users->hasPages()): ?>
                            <div class="card-footer">
                                <?php echo e($users->links('backend.partial.paginate')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('asset/admin/js/chart.min.js')); ?>"></script>

    <script>
        'use strict'
        var copyButton = document.querySelector('.copy');
        var copyInput = document.querySelector('.copy-text');
        copyButton.addEventListener('click', function(e) {
            e.preventDefault();
            var text = copyInput.select();
            document.execCommand('copy');
            notifyMsg('Copied SuccessFully!', 'success')
        });
        copyInput.addEventListener('click', function() {
            this.select();
        });

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($months, 15, 512) ?>,
                datasets: [{
                    label: 'Total Invests',
                    barThickness: 10,
                    maxBarThickness: 12,
                    data: <?php echo json_encode($totalAmount, 15, 512) ?>,
                    backgroundColor: ['#2C86DB'],
                    borderColor: [
                        '#2C86DB'
                    ],
                    borderWidth: 2,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });



        var ctx3 = document.getElementById('myChart3').getContext('2d');
        var myChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($withdrawMonths, 15, 512) ?>,
                datasets: [{
                    label: 'Total Withdraw',
                    barThickness: 10,
                    maxBarThickness: 12,
                    data: <?php echo json_encode($withdrawTotalAmount, 15, 512) ?>,
                    backgroundColor: ['#2C86DB'],
                    borderColor: [
                        '#2C86DB'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Documents\laravel\Auto tradin1g\core\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>