<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Feature;
use App\Models\Room_facilities;
use App\Models\Room_features;
use App\Models\Rooms;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

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

    public function showSingleRoom(Rooms $room){
        return view('singleRoom',[
           'room' => $room
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

        if($file->move("upload/rooms",$file->getClientOriginalName())){

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
        $filePath = public_path('upload/rooms/' . $room->img);

        // Delete the file if it exists
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $room->delete();

        return redirect()->back()->with('success', 'Facility deleted successfully');
    }

    public function confirmBooking(Rooms $room){
        return view('confirm_booking',[
            'room' => $room
        ]);
    }

//    public function checkBooking(Rooms $room, Request $request)
//    {
//        $frm_data = $request->validate([
//            'name' => 'required',
//            'phone' => 'required',
//            'address' => 'required',
//            'checkin' => 'required',
//            'checkout' => 'required'
//        ]);
//
//        // Validate dates.
//
//        if ($frm_data['checkin'] > $frm_data['checkout']) {
//            return redirect()->back()->with("error", "Enter valid Check-In and Check-Out Dates");
//        }
//
//        $checkin_date = new DateTime($frm_data['checkin']);
//        $checkout_date = new DateTime($frm_data['checkout']);
//
//        $cnt_days = date_diff($checkout_date, $checkin_date)->days;
//        $price = $cnt_days * $room->price;
//
//        // Extract the required data and pass as separate variables
//        $roomId = $room->id;
//        $roomPrice = $room->price;
//        $requestData = $request->all();
//
//        // Redirect to another route with the extracted variables
//        return redirect("/example2")
//            ->with('roomId', $roomId)
//            ->with('roomPrice', $roomPrice)
//            ->with('requestData', $requestData);
//    }


}
