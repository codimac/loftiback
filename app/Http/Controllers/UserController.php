<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Http\Response;

class AuthController extends Controller {

    protected $user_id;

    public function __construct(User $user_id) {
        $this->user_id = $user_id;
    }

    public function getAuthUser() {
        return response()->json(Auth::user());
    }
}
