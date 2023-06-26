<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Feature;
use App\Models\Room_facilities;
use App\Models\Room_features;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class roomController extends Controller
{
    //
    public function showAdminRoomCreate(){

        $selectedFacilities = [];
        $selectedFeatures = [];

        return view("admin.roomCreate",[
            'features' => Feature::all(),
            'facilities' => Facility::all(),
            'rooms' => Rooms::all(),
            'index' => 0,
            'selectedFacilities'=> $selectedFacilities,
            'selectedFeatures'=> $selectedFeatures,

        ]);
    }
    public function storeRooms(Request $request){
        $frm_data = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'guests' => 'required',
            'quantity' => 'required',
            'image' => 'required|file',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $selectedFacilities = $request->input('facilities', []);
        $selectedFeatures = $request->input('features',[]);

        $rooms = new Rooms;
        $rooms->name = $frm_data['name'];
        $rooms->area = $frm_data['area'];
        $rooms->guests = $frm_data['guests'];
        $rooms->category = $frm_data['category'];
        $rooms->description = $frm_data['description'];
        $rooms->price = $frm_data['price'];
        $rooms->quantity = $frm_data['quantity'];

        $file = $request->file('image');

        if($file->move("upload",$file->getClientOriginalName())){

            // Get the original file name
            $filename = $file->getClientOriginalName();

            // Store the facility information in the database
            $rooms->img = $filename;
        }

        $rooms->save();

        $id = $rooms->id;

        foreach ($selectedFacilities as $facility){
            $room_facilities = new Room_facilities;
            $room_facilities->room_id = $id;
            $room_facilities->facilities_id = $facility;

            $room_facilities->save();
        }

        foreach ($selectedFeatures as $feature){
            $room_features = new Room_features;
            $room_features->rooms_id = $id;
            $room_features->feature_id = $feature;

            $room_features->save();
        }

        return redirect("admin/rooms")->with('success', 'Your Room added Succesfully!');
    }

    public function destroyRoom(Rooms $room)
    {
        $filePath = public_path('upload/' . $room->img);

        // Delete the file if it exists
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $room->delete();

        return redirect()->back()->with('success', 'Facility deleted successfully');
    }
}
