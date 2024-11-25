<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    // this method will show service page
    public function index()
    {
        $services = Service::orderBy('created_at', 'DESC')->get();
        return view('services.list', [
            'services' => $services
        ]);
    }
    // this method will create service page
    public function create()
    {
        return view('services.create');
    }
    // this method will store service page
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',

        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('services.create')->withInput()->withErrors($validator);
        }

        // here we will store product in db
        $service = new Service();
        $service->name = $request->name;
        $service->sku = $request->sku;
        $service->description = $request->description;
        $service->save();

        if ($request->image != "") {
            // Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; //unique image name
            // save image to service directory
            $image->move(public_path('upload-img/services'), $imageName);
            // save image name in database
            $service->image = $imageName;
            $service->save();
        }


        return redirect()->route('services.index')->with('success', 'Product added successfully.');
    }
    // this method will edit service page
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }
    // this method will update service page
    public function update($id, Request $request)
    {
        $service = Service::findOrFail($id);

        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',

        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('services.edit', $service->id)->withInput()->withErrors($validator);
        }

        // here we will update service in db
        $service = new Service();
        $service->name = $request->name;
        $service->sku = $request->sku;
        $service->description = $request->description;
        $service->save();

        if ($request->image != "") {

            //delete old image
            File::delete(public_path('upload-img/services/' . $service->image));

            // Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; //unique image name
            // save image to service directory
            $image->move(public_path('upload-img/services'), $imageName);
            // save image name in database
            $service->image = $imageName;
            $service->save();
        }


        return redirect()->route('services.index')->with('success', 'Product updated successfully.');
    }
    // this method will delete service page
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        //delete old image
        File::delete(public_path('upload-img/services/' . $service->image));
        // delete service from db
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Product deleted successfully.');
    }
}














//serviceController