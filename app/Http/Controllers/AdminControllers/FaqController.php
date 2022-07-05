<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminFaqInterface;
use App\Http\Requests\Faq\CreateFaqRequest;
use App\Http\Requests\Faq\DeleteFaqRequest;
use App\Http\Requests\Faq\UpdateFaqRequest;
use App\Models\Faq;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{

    public  $adminFaqRepo;

    public function __construct(AdminFaqInterface $adminFaqRepo)
    {
        $this->adminFaqRepo = $adminFaqRepo;
    }

    public  function  index ()
    {
       return   $this->adminFaqRepo->index();
    }
    public  function  create()
    {
        return   $this->adminFaqRepo->create();

    }
    public  function  store(CreateFaqRequest $request)
    {

        return   $this->adminFaqRepo->store($request);

    }
    public  function  edit($faqId)
    {
        return   $this->adminFaqRepo->edit($faqId);

    }

    public  function update(UpdateFaqRequest $request)
    {
        return   $this->adminFaqRepo->update($request);

    }
    public  function  delete(DeleteFaqRequest $request)
    {
        return   $this->adminFaqRepo->delete($request);

    }
}
