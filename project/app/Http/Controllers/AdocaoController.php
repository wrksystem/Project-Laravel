<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    public function registData (Request $request){

        $address = $_POST['inputaddress'];
        $incomeValue = $_POST['inputvalue'];

        if ($incomeValue <= 1212) {
            echo "Você é inelegível para adotar";
        }

    }
}
