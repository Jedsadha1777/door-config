<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ConfigSession;
use App\Mail\ConfigurationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        
        $config = session('config');
        $productId = session('product_id');
        $product = Product::findOrFail($productId);
        
        $session = ConfigSession::create([
            'session_id' => 'CONF-' . strtoupper(uniqid()),
            'product_id' => $product->id,
            'config' => $config,
            'email' => $request->email,
        ]);
        
        Mail::to($request->email)->send(new ConfigurationMail($product, $config, $session));
        
        session()->forget(['config', 'product_id']);
        
        return redirect()->route('config.success');
    }

    public function success()
    {
        return view('config.success');
    }
}