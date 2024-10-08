<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Datatables;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response_success($data, $message = 'Success', $kode = 200) {
        return response()->json([
                'data' => $data,
                'message' => $message,
                'status' => true
            ],
            $kode);
    }

    public function response_error($message, $kode = 500) {
        return response(
            [
                'data' => [],
                'message' => $message,
                'status' => false
            ],
            $kode
        );
    }

    public function response_datatable($data, $addColumns = []) {
        $datatables = datatables()->of($data);

        foreach ($addColumns as $key => $value) {
            $datatables->addColumn($key, $value);
        }

        $data = $datatables->addIndexColumn()->toArray();
        
        foreach($data['data'] AS $item) {
            $item['created_at'] = Carbon::parse($item['created_at'])->format('d-M-Y');
            $item['updated_at'] = Carbon::parse($item['updated_at'])->format('d-M-Y');
        }

        return $data;
    }

}
