<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class ExcelFileController extends Controller
{
    public function upload()
    {
        //$file = Input::file('exclfile');
        $s = array();
        $path = 'C:/wamp/www/test-laravel-5-project/public/Test/quiz_info.xlsx';
        Excel::selectSheets('sheet1')->load($path, function ($reader) {
            $reader->each(function ($sheet) {
                $sheet->each(function ($row) {
                    array_push($s, $row);
                });
            });

        });
        return Response::json($s);
    }
    public function dj()
    {
        return "dsada";
    }

}
