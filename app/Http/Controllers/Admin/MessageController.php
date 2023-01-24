<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    
    public function index()
    {
        $message = Messages::orderBy('created_at','DESC')->get();
        return view('admin.message.index', compact('message'));
    }
    public function show($id)
	{
		$mensagem = Messages::find($id);
        return view('admin.message.show',compact('mensagem'));
    }
    
}
