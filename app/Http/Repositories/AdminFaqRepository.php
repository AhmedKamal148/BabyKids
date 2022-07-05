<?php

namespace App\Http\Repositories;


use App\Http\Interfaces\AdminFaqInterface;
use App\Models\Faq;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFaqRepository implements AdminFaqInterface
{

    public function index()
    {
        $faqs = Faq::get();
        return view('Admin.pages.faq.faqs',compact('faqs'));
    }

    public function create()
    {
        return view('Admin.pages.faq.createFaq');
    }

    public function store($request)
    {
        Faq::create(
            [
                'question' => $request->question,
                'answer'=>$request->answer,

            ]
        );
        session()->flash('done' , 'Faq Was Created');
        Alert::success('Success Title', 'Success Message');

        return redirect(route('admin.faq.all.create'));
    }

    public function edit($faqId)
    {
        $faq = Faq::find($faqId)->first();
        return view('Admin.pages.faq.editFaq',compact('faq'));
    }

    public function update($request)
    {
        $faq = Faq::find($request->faqId);

        $faq->update(
            [
                'question'=>$request->question,
                'answer'=>$request->answer,
            ]);

        Alert::success('Update Faq', 'Update Faq Successfuly !');
        return redirect(route('admin.faq.all'));
    }

    public function delete($request)
    {
        Faq::where('id',$request->faq_id)->delete();
        Alert::warning('Delete Faq', 'Delete Faq');

        return redirect(route('admin.faq.all'));
    }
}
