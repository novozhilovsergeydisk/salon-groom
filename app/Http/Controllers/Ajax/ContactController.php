<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Запись заявки в файл
        try {
            $data = $request->all();

            if (empty($data['name']) or empty( $data['phone'])) {
                $data['result'] = 'failed';
                $data['error'] = 'empty fields';

                return $data;
            }

            $fp = fopen(storage_path().'/app/public/orders.txt', 'a');
            fwrite($fp, now() . '|' . $data['name'] . '|' . $data['phone'] . '|' . PHP_EOL);
            fclose($fp);
            $data['result'] = 'success';
            $data['_token'] = csrf_token();

            return  $data;
        } catch (\Exception $e) {
            $data['result'] = 'failed';
            $data['error'] = $e->getMessage();

            return $data;
        }
    }
}
