<?php
namespace App\Http\Controllers;
use App\Models\Ptop;
use App\Notifications\Withdraw;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\RegisterViewResponse;

use Illuminate\Support\Facades\Http;
use DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        
    }

    public function index2(){
        return view('index');
    }

    
}
?>