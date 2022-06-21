<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\CreateFaqRequest;
use App\Http\Requests\Faq\DeleteFaqRequest;
use App\Http\Requests\Faq\UpdateFaqRequest;
use App\Models\Faq;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    public  function  index ()
    {
        $faqs = Faq::get();
        return view('Admin.pages.faq.faqs',compact('faqs'));
    }
    public  function  create()
    {
        return view('Admin.pages.faq.createFaq');
    }
    public  function  store(CreateFaqRequest $request)
    {

        Faq::create(
            [
                'question' => $request->question,
                'answer'=>$request->answer,

            ]
        );
        session()->flash('done' , 'Faq Was Created');
        Alert::success('Success Title', 'Success Message');

        return redirect(route('admin.faq.create'));
    }
    public  function  edit($faqId)
    {
        $faq = Faq::find($faqId);

        return view('Admin.pages.faq.editFaq',compact('faq'));
    }

    public  function update(UpdateFaqRequest $request)
    {
        $faq = Faq::find($request->faqId);

        $faq->update(
            [
                    'question'=>$request->question,
                    'answer'=>$request->answer,
            ]);

        Alert::success('Update Faq', 'Update Faq Successfuly !');
        return redirect(route('admin.faq'));

    }
    public  function  delete(DeleteFaqRequest $request)
    {
        Faq::where('id',$request->faq_id)->delete();
        Alert::warning('Delete Faq', 'Delete Faq');

        return redirect(route('admin.faq'));
    }
}
