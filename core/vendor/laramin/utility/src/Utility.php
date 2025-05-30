<?php

namespace Laramin\Utility;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Utility
{
    public function handle($request, Closure $next)
    {
        $viser = DB::table('general_settings')->value('mv');
        if ($viser == '0') {
            $routeName = VugiChugi::acRouter();
            return redirect()->route($routeName);
        }
        return $next($request);
    }
}