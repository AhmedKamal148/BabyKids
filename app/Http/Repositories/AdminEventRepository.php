<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AdminEventInterface;
use App\Http\Traits\ImagesTriat;
use App\Models\Event;
use App\Models\Location;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\isNull;

class AdminEventRepository implements AdminEventInterface
{
    use ImagesTriat;

    public function index()
    {
        $events = Event::with('location')->get();

        return view('Admin.pages.event.events' , compact('events'));
    }

    public function create()
    {
        $locations = Location::get();
        return  view('Admin.pages.event.createEvent',compact('locations'));
    }

    public function store($request)
    {

            $file = $request->image;
            $fileName = time() . '_event.jpg';
            $this->UploadImage($file,$fileName,'event');

        $event = Event::create(
            [
                'image' =>  $fileName,
                'title' => $request->title,
                'location_id' => $request->location_id,
                'date' => $request->date,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'slug' => $request->slug,
                'color' => $request->color,
            ]
        );
        Alert::success('Created' , 'Create Event Succssfuly ! ');
        return redirect()->back();


    }

    public function edit($id)
    {
        $event = Event::find($id)->first();
        $locations = Location::get();
        return view('Admin.pages.event.editEvent', compact('event','locations'));
    }

    public function update($request)
    {

        $event = Event::find($request->event_id)->first();

        if($request->has('image'))
        {
            $file = $request->image;
            $fileName = time() . '_event.jpg';
            $this->UploadImage($file, $fileName, 'event' ,$event->image);
        }

        $event->update(
            [
                'image' =>          (isset($fileName)) ? $fileName :    $event->image,
                'location_id' =>    ($request->has('location_id')) ?    $request->location_id :    $event->location_id,
                'title' =>          ($request->has('title')) ?          $request->title :          $event->title ,
                'date'              ($request->has('date')) ?           $request->date :           $event->date,
                'start_at' =>       ($request->has('start_at')) ?       $request->start_at :       $event->start_at,
                'end_at' =>         ($request->has('end_at')) ?         $request->end_at :         $event->end_at,
                'slug' =>           ($request->has('slug')) ?           $request->slug :           $event->slug ,
                'color' =>          ($request->has('color')) ?        $request->color :          $event->color,
            ]
        );

        Alert::success('Updated' , 'Update Event Succssfuly !');
        return redirect(route('admin.event.all'));
    }

    public function delete($request)
    {
        $event = Event::find($request->event_id)->first();
        unlink(public_path($event->imageUrl));
        $event->delete();

        Alert::error('Deleted ' , 'Delete Event Succfuly !');
        return redirect()->back();
    }
}
