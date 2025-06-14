

<?php
    $sliding_banner = element('sliding_banner.element');
    $notice = content('notice.content');
    $yourLinks = content('links.content');
?>



<div id="sliderBody">
<div class="section wallet-card-section pt-1">
    <div id="sliderCarosel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner rounded-20px shadow-sm">

            <?php $i=0; ?>
            <?php $__empty_1 = true; $__currentLoopData = $sliding_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                    $actives = '';
                ?>

                <?php if($i == 0): ?>
                    <?php $actives = 'active';?>
                <?php endif; ?>
                <?php $i=$i+1; ?>

                <div class="carousel-item <?php echo e($actives); ?>">
                    <img class="d-block w-100" src="<?php echo e(asset('asset/theme3/images/sliding_banner/'. $item->data->image)); ?>" alt="banner">
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sliderCarosel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderCarosel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </a>
    </div>
</div>
</div>

<div class="container">
    <!-- Scroling Notice -->
    <div class="container mb-3">
        <div class="card mt-2">
            <div class="card-body py-0">
                <div class="row align-items-center">
                    <div class="bg-scroll-light col-auto px-0" style="border-radius: 20px; margin-left: -8px;">
                       
                         <img src="<?php echo e(asset('asset/images/icons-3d/mike.png')); ?>" width="30px" height="30px" alt=""> 
                    </div>
                    <div class="col px-0 pt-1">
                        <marquee behavior="scroll" direction="left">
                            <?php echo e(@$notice->data->title); ?>

                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Card -->
    <div class="row">
        <a href="<?php echo e(@$yourLinks->data->apps); ?>" class="col-3 text-center">
            <div class="card rounded-circle text-center" style="height: 50px; width: 50px; margin:auto;">
                <div class="card-body p-0">
                    <ion-icon name="cash-outline" style="height: 40px; width: 40px;"></ion-icon>
                </div>
            </div>
            <span class="small-font">Apps</span>
        </a>
        <a href="<?php echo e(@$yourLinks->data->telegram); ?>" class="col-3 text-center">
            <div class="card rounded-circle text-center" style="height: 50px; width: 50px; margin:auto;">
                <div class="card-body p-0">
                    <ion-icon name="card-outline" style="height: 40px; width: 40px;"></ion-icon>
                </div>
            </div>
            <span class="small-font">Telegram</span>
        </a>
        <a href="<?php echo e(@$yourLinks->data->youtube); ?>" class="col-3 text-center">
            <div class="card rounded-circle text-center" style="height: 50px; width: 50px; margin:auto;">
                <div class="card-body p-0">
                    <ion-icon name="logo-youtube" style="height: 40px; width: 40px;"></ion-icon>
                </div>
            </div>
            <span class="small-font">Tutorial</span>
        </a>
        <a href="<?php echo e(route('pages', 'about')); ?>" class="col-3 text-center">
            <div class="card rounded-circle text-center" style="height: 50px; width: 50px; margin:auto;">
                <div class="card-body p-0">
                    <ion-icon name="information-circle-outline" style="height: 40px; width: 40px;"></ion-icon>
                </div>
            </div>
            <span class="small-font">About Us</span>
        </a>
    </div>

    <!-- Card 2 -->
    <div class="row mt-2">
        
         <a href="<?php echo e(route('user.mining')); ?>" class="col-6">
            <div class="stat-box p-1">
                <div class="row align-items-center">
                    <div class="col pe-0 text-start" style="margin-top:20px; margin-bottom: 20px;">
                        <div class="value">AI Trading</div>
                        <div class="title">Binance, PayPal</div>
                    </div>
                    <div class="col-auto">
                        <img width="40px" height="40px" style="opacity: 90%" src="https://cdn-icons-png.flaticon.com/128/9590/9590116.png" alt="">
                    </div>
                </div>
            </div>
        </a>
        
        <a href="/onepay" class="col-6">
            <div class="stat-box p-1">
                <div class="row align-items-center">
                    <div class="col pe-0 text-start" style="margin-top:20px; margin-bottom: 20px;">
                        <div class="value">Credit/Debit Card</div>
                        <div class="title">Visa, Mastercard</div>
                    </div>
                    <div class="col-auto">
                        <img width="40px" height="40px" style="opacity: 90%" src="https://cdn-icons-png.flaticon.com/128/9590/9590117.png" alt="">
                    </div>
                </div>
            </div>
        </a>
        
    </div>
    <!-- Card 2 -->
    <br/>
    
</div>
<style>
    #appCapsule{
        height: 80vh !important;
    }
</style>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
        {
            "colorTheme": "dark",
            "dateRange": "12M",
            "showChart": true,
            "locale": "en",
            "width": "100%",
            "height": "100%",
            "largeChartUrl": "",
            "isTransparent": true,
            "showSymbolLogo": true,
            "showFloatingTooltip": true,
            "tabs": [
            {
                "title": "Crypto",
                "symbols": [
                {
                    "s": "BINANCE:BTCUSDT"
                },
                {
                    "s": "BINANCE:SOLUSDT"
                },
                {
                    "s": "BINANCE:ETHUSDT"
                },
                {
                    "s": "BINANCE:XRPUSDT"
                },
                {
                    "s": "BINANCE:MATICUSDT"
                },
                {
                    "s": "BINANCE:AVAXUSDT"
                },
                {
                    "s": "BINANCE:FTMUSDT"
                },
                {
                    "s": "BINANCE:DOGEUSDT"
                },
                {
                    "s": "BINANCE:SHIBUSDT"
                },
                {
                    "s": "BINANCE:TRXUSDT"
                }
                ],
                "originalTitle": "Forex"
            }
            ]
        }
    </script>
</div>
<!-- TradingView Widget END -->




<!-- mt-2 gaph -->



<?php /**PATH C:\Users\Usuario\Documents\laravel\Auto tradin1g\core\resources\views/theme3/ajax/home.blade.php ENDPATH**/ ?>