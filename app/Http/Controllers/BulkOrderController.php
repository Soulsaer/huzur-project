<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BulkOrder;
use Illuminate\Support\Facades\Mail;
use App\Mail\BulkOrderMail;
use Illuminate\Database\QueryException;

class BulkOrderController extends Controller {
    
    public function bulkOrder()
    {
        $blogdata = BulkOrder::all();
        return view('admin.bulkOrder.index', compact('blogdata'));
    }
    
    
        public function submitForm(Request $request) {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'mobile' => 'required',
                'order_quantity' => 'required|string',
                'country' => 'required|string',
                'material' => 'required|string',
                'special_details' => 'nullable|string',
                'attached_image' => 'nullable',
            ]);

            // Create a new instance of BulkOrder model
            $store = new BulkOrder;
            
            $store->name = $request->name;
            $store->email = $request->email;
            $store->mobile = $request->mobile;
            $store->order_quantity = $request->order_quantity;
            $store->country = $request->country;
            $store->material = $request->material;
            $store->special_details = $request->special_details;
        
            // Upload attached image if it exists in the request
            if ($request->hasFile('attached_image')) {
                $filename = time() . '.' . $request->attached_image->getClientOriginalExtension();
                $request->attached_image->move(public_path('bulkimg'), $filename);
                $store->attached_image = 'bulkimg/' . $filename;
            }

           $store->save();

           // Send email
           Mail::to('mkjoshi668@gmail.com')->send(new BulkOrderMail($store));

    return redirect()->back()->with('success', 'Bulk Order submitted successfully!');
}




}
