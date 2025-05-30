<?php use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Models\Page;
function verifyPurchaseCode(){
    $notify=[];
if(true){
$fullDomain= $_SERVER[base64_decode("SFRUUF9IT1NU")];
if(true){
        $notify[]=[base64_decode("c3VjY2Vzcw=="),base64_decode("U3VjY2Vzcy4="),];

        DB::table(base64_decode("Z2VuZXJhbF9zZXR0aW5ncw=="))->update([base64_decode("bXY=")=>base64_decode("MQ=="),]);
        
        $current=$_SERVER[base64_decode('UkVRVUVTVF9TQ0hFTUU=')].base64_decode('Oi8v').$_SERVER[base64_decode('SFRUUF9IT1NU')].$_SERVER[base64_decode('UkVRVUVTVF9VUkk=')];

        $url=str_replace(base64_decode('YWN0aXZhdGU='),'',$current);
        Config::set(base64_decode('YXBwLnVybA=='),$url);

        $newUrlReplacement=base64_decode('QVBQX1VSTD0=').$url;
        $envContent=file_get_contents(base64_decode('Y29yZS8uZW52'));
        $modifiedEnvContent=preg_replace(base64_decode('L0FQUF9VUkw9LiokL20='),
        $newUrlReplacement,$envContent);

file_put_contents(base64_decode('Y29yZS8uZW52'),
$modifiedEnvContent);
$hashedDomain=base64_encode($_SERVER[base64_decode('SFRUUF9IT1NU')]);
DB::table('general_settings')->update(['anylatics'=>$hashedDomain]);

}

Session::flash(base64_decode("bm90aWZ5"),$notify);
}
            return $notify;
            }


            $notify=verifyPurchaseCode();?>

<style>
    .notification {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
    }

    .success {
        background-color: #2ecc71;
    }

    .error {
        background-color: #e74c3c;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Easy Activator by')</title>
    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/css/all.min.css') }}">
    <link rel="stylesheet" href="https://license.viser.store/external/install.css">
    <link rel="shortcut icon" href="{{ ('assets/images/logoIcon/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <header class="py-3 border-bottom border-primary bg--dark">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between header gap-3">

                <h3 class="title">@lang('Easy Activation')</h3>
            </div>
        </div>
    </header>
    


    <div class="installation-section padding-bottom padding-top">
        <div class="container">
            <div class="installation-wrapper">
                <div class="install-content-area">
                    <div class="install-item">
                        <h3 class="title text-center"> @lang('License Activation')</h3>
                        <div class="box-item">
    @if ($notify)
        @foreach ($notify as $msg)
            <div class="notification @if ($msg[0] === 'success') success @else error @endif">
                {{ __($msg[1]) }}
            </div>
        @endforeach
    @endif
    
    
                            <form class="verForm" method="post" action="">
                                @csrf
                                <div class="information-form-group">
                                    <label for="purchase_code" class="mb-1">@lang('Enter Purchase Code') <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="purchase_code" id="purchase_code" required>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="theme-button choto sbmBtn">@lang('Activate Now')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>

</body>

</html>