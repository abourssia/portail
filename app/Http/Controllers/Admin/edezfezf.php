<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PNR;
use App\Models\Image;


class PnrController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.pnr');
    }
    public function add()
    {
        return view('admin.dashboard.addpnr');
    }
    //Store image
    public function storeImage(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $add = new PNR();
        $add -> etablissement = $request['name'];
        $add -> desc = $request['desc'];

        if( $request->hasFile( 'image' ) ) {
            $destinationPath = storage_path( 'app/public/images' );
            $file = $request->image;
            $fileName = time() . '.'.$file->clientExtension();
            $file->move( $destinationPath, $fileName );
        
            $image = new Image;
            $image->title = $fileName;
            $image->article_id = $article->id;
            $image->save();
        }
        $add->save();


    }
		//View image

}

