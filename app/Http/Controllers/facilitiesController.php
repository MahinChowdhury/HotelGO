<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class facilitiesController extends Controller
{
    //
    public function showFacilities(){
        return view("admin.facilities",[
            'features' => Feature::all(),
            'facilities' => Facility::all(),
            'index' => 0,
            'index2' => 0
        ]);
    }

    public function insertFeatures(Request $request){

        $frm_data = $request->validate([
            'name' => 'required'
        ]);

        Feature::create($frm_data);

        return redirect('admin/facilities')->with('success','Feature added successfully!');
    }

    public function destroyFeature(Feature $feature)
    {
        $feature->delete();

        return redirect()->back()->with('success', 'Feature deleted successfully');
    }

    public function storeFacility(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'icon' => 'required|file|mimes:svg',
            'description' => 'required',
        ]);

        $file = $request->file('icon');

        if($file->move("upload",$file->getClientOriginalName())){

            // Get the original file name
            $filename = $file->getClientOriginalName();

            // Store the facility information in the database
            $facility = new Facility;
            $facility->name = $validatedData['name'];
            $facility->icon = $filename;
            $facility->description = $validatedData['description'];
            $facility->save();

            return redirect('admin/facilities')->with('success','Facility added successfully!');
        }

        return redirect()->back()->with('error', 'Error adding facility');
    }

    public function destroyFacility(Facility $facility)
    {
        $filePath = public_path('upload/' . $facility->icon);

        // Delete the file if it exists
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $facility->delete();

        return redirect()->back()->with('success', 'Room deleted successfully');
    }
}
