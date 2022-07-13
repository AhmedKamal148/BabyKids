<?php
namespace  App\Http\Repositories;

use App\Http\Interfaces\AdminActivityInterface;
use App\Models\Activity;
use RealRashid\SweetAlert\Facades\Alert;

class AdminActivityRepository implements AdminActivityInterface
{

    public function index()
    {
        $activites = Activity::get();
        return view('Admin.pages.activity.activities',compact('activites'));
    }

    public function create()
    {
        return view('Admin.pages.activity.CreateActivite');
    }

    public function store($request)
    {
       Activity::create(
           [
               'title' => $request->activity_title,
               'slug' => $request->activity_slug,
               'icon' => $request->activity_icon,
           ]
       );

       Alert::success('Create' , 'Create Activite Successfuly !');
       return redirect()->back();

    }

    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('Admin.pages.activity.editActivite',compact('activity'));
    }

    public function update($request)
    {

        $activity = Activity::find($request->activity_id);

        $activity->update(
            [
                'title' => ($request->has('activity_title')) ?   $request->activity_title    : $activity->title,
                'slug' => ($request->has('activity_slug'))   ?   $request->activity_slug     : $activity->slug,
                'icon' => ($request->has('activity_icon'))   ?   $request->activity_icon     : $activity->icon,
            ]
        );

        Alert::success('Update Activity' , 'Updated Successfuly !');
        return redirect(route('admin.activity.all'));

    }

    public function delete($request)
    {
        $activity = Activity::where('id' , $request->activity_id);
       $activity->delete();
       Alert::error('Delete ', 'Deleted Activity Successfuly! ');
       return redirect()->back();
    }
}
