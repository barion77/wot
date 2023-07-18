<?php

namespace App\Http\Controllers;

use App\Classes\Lava\LavaApi;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductsController extends Controller
{
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function buy(Request $request, Product $product)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $lava_api = new LavaApi();

        $user = User::where('email', $request->email)->get()->first();
        if (empty($user))
            $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

        $invoice = Invoice::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        $success_url = route('purchase.details', $invoice->id);
        $response = $lava_api->createInvoice($product->sum, $invoice->id, $success_url);

        if (empty($response['data']))
            abort(404);

        $purchase_url = $response['data']['url'];

        return redirect($purchase_url);
    }

    public function getPurchaseDetails(Invoice $invoice)
    {
        $lava_api = new LavaApi();

        $response = $lava_api->checkInvoiceStatus($invoice->id);
        if (empty($response['data']) || $response['data']['status'] !== 'success')
            abort(404);

        $invoice->fill(['status' => $response['data']['status']]);
        Order::create([
            'user_id' => $invoice->user_id,
            'product_id' => $invoice->product_id,
        ]);

        return view('purchase', compact('invoice'));
    }
}
