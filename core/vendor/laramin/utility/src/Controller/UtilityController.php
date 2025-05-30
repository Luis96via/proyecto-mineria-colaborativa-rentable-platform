<?php

namespace Laramin\Utility\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laramin\Utility\VugiChugi;
/**
 * Author: Viser Store
 * Website: https://viser.store/
 * 
 * Warning: Unauthorized cracking or modification of this code is strictly prohibited.
 * Legal actions may be taken against those who attempt to do so.
 */
class UtilityController extends Controller
{
    public function laraminStart()
    {
        return view('Utility::laramin_start', [
            'pageTitle' => VugiChugi::lsTitle()
        ]);
    }

    public function laraminSubmit(Request $request)
    {
        $response = Http::post("https://viser.store/api/verify-purchase-code", [
            "purchase_code" => $request->purchase_code,
            "domain" => $_SERVER['HTTP_HOST'],
            "product" => '1',
        ]);

        if ($response->successful() && ($response = $response->json()) && isset($response['status'])) {
            $notify = [
                'type' => ($response['status'] === 'success' ? 'success' : 'error'),
                'message' => $response['message']
            ];

            if ($response['status'] === 'success') {
                DB::table('general_settings')->update(['mv' => '1']);
                
                $envFilePath = base_path('.env');
                $envData = file_get_contents($envFilePath);

                if (strpos($envData, 'PURCHASE_CODE=') === false) {
                    $envData .= "PURCHASE_CODE=" . ($response['purchase_code'] ?? '') . "\n";
                } else {
                    $envData = preg_replace('/PURCHASE_CODE=.*\n/', 'PURCHASE_CODE=' . ($response['purchase_code'] ?? '') . "\n", $envData);
                }

                file_put_contents($envFilePath, $envData);

                $laramin = fopen(dirname(__DIR__) . '/laramin.json', "w");
                $txt = '{
                    "purchase_code": "' . ($response['purchase_code'] ?? '') . '",
                    "installcode": "' . ($response['installcode'] ?? '') . '",
                    "license_type": "' . ($response['license_type'] ?? '') . '"
                }';
                fwrite($laramin, $txt);
                fclose($laramin);
            }
        } elseif ($response->failed()) {
            $notify['message'] = 'No response from the server.';
        }

        return response()->json($notify);
    }
}
