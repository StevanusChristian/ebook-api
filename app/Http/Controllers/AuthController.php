<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118128,
            "name" => "Stevanus Christian Yudani",
            "gender" => "Laki-Laki",
            "phone" => 62895425419191,
            "class" => "XII RPL 4"
        ];
    }
}