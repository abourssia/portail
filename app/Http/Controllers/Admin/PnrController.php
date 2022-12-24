<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PNR;
use App\Models\Image;
use DB;


class PnrController extends Controller
{
    public function index()
    {
        $pnr = PNR::all();

        return view('admin.dashboard.pnr', compact('pnr'));
    }
    public function add()
    {
        return view('admin.dashboard.addpnr');
    }
    //Store image
    public function storeImage(Request $request){


        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            // Save the file locally in the storage/public/ folder under a new folder named /product
           // $path = $request->file('file')->store('image', 'public');
           // $request-> image->store('image');
            // Store the record, using the new file hashname which will be it's new filename identity.

            $product = new PNR([
                "etablissement" => $request->get('name'),
                "desc" => $request->get('desc'),
                "image" => $name
            ]);
            $product->save(); // Finally, save the record.
        }

        return redirect('admin/dashboard/pnr2021/') -> with('txt','ok !');

    }

    public function delete(Request $request) {

        $pnr = PNR::where('id', $request -> id)->delete();
        return redirect('admin/dashboard/pnr2021/') -> with('txt','ok !');

    }

    public function indexupdate(Request $request,$id)
    {
 

        $pnr = PNR::find( $request -> id);    

        return view('admin.dashboard.editpnr', compact('pnr'));
    }
    
    
    public function update(Request $request)
    {
        $id = $request -> id;
        DB::table('pnr')
              ->where('id', $id)
              ->update(['etablissement' => $request->input('etablissement')],
              ['desc' => $request->input('desc')]);

              //dd($affected);

           return redirect('admin/dashboard/pnr2021/') -> with('txt','ok !');
        }

}
