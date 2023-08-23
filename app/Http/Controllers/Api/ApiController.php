<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Rabbit;

class ApiController extends Controller
{

    public function testApi() {

        return response() -> json([
            'message' => 'Hola, Mundo!'
        ]);
    }

    public function rabbitIndex() {

        $rabbits = Rabbit :: with('farmer') -> paginate(10);

        return response() -> json([
            'rabbits' => $rabbits
        ]);
    }

    public function rabbitShow($id) {

        $rabbit = Rabbit :: findOrFail($id);

        return response() -> json([
            'rabbit' => $rabbit
        ]);
    }
}
