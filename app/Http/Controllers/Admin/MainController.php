<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index() {
        try {
//            dd(storage_path());
//            $attemptToWriteObject = User::where('is_active', 0)->get();
//            $attemptToWriteArray = User::where('is_active', 0)->get()->toArray();
//            $attemptToWriteText = "Hi";
//dd('test');
//            Storage::put('attempt1.txt', $attemptToWriteObject);
//            Storage::put('attempt2.txt', $attemptToWriteArray);
            Storage::put('test.txt', 'test');
            Storage::put('app/public/orders.txt', 'test');
        } catch (\Exception $e) {
            dd($e);
        }

        $fp = @fopen(storage_path().'/app/public/orders.txt', 'a');
        fwrite($fp, '@test' . PHP_EOL);
        fclose($fp);

        return view('admin.index');
    }

    public function orders() {
        try {
            $handle = @fopen(storage_path().'/app/public/orders.txt', 'r');

//            dump($handle);

            if ($handle) {
                while (($buffer = fgets($handle, 4096)) !== false) {
                    $data = explode('|', $buffer);
                    dump($data);
;                }

                if (!feof($handle)) {
                    echo "Ошибка чтения из файла \n";
                }

                fclose($handle);
            }

//            dd('orders-list');

//            dd(storage_path());
//            $attemptToWriteObject = User::where('is_active', 0)->get();
//            $attemptToWriteArray = User::where('is_active', 0)->get()->toArray();
//            $attemptToWriteText = "Hi";
//dd('test');
//            Storage::put('attempt1.txt', $attemptToWriteObject);
//            Storage::put('attempt2.txt', $attemptToWriteArray);
//            Storage::put('test.txt', 'test');
//            Storage::put('app/public/orders.txt', 'test');
        } catch (\Exception $e) {
            dd($e);
        }

//        $fp = fopen(storage_path().'/app/public/orders.txt', 'a');
//        fwrite($fp, '@test' . PHP_EOL);
//        fclose($fp);
//
//        return view('admin.index');
    }
}
