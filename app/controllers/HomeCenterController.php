<?php
namespace app\controllers;
use app\models\HomeOne;
use core\FileService;

class HomeCenterController
{
    private FileService $fileService;

    public function __construct()
    {
        $this->fileService = new FileService();
    }

    public function index(){
      $homeCenterModel = new HomeOne();
      $HomeOne = $homeCenterModel ->first();
      return view('admin/homecenter',compact('HomeOne'));

   }
   public function store(){

      $homeCenterModel = new HomeOne();

      $title = htmlentities(postData('title'),ENT_QUOTES);
      $text = htmlentities(postData('text'),ENT_QUOTES);


      $homeCenter = $homeCenterModel->first();
//      print_r($homeCenter);die();
       $data = [
           'title' => $title,
           'text' => $text,
       ];
       if ($this->fileService->hasFile('image')){
           if (!$this->fileService->validateType('image',['jpeg','jpg','png'])){
               throw new \Exception('not File');
           }
           $filename = $this->fileService->upload('image');
           $data['image'] = $filename;
       }
       if (!$homeCenter)
       {
           $homeCenterModel->buildCreate($data);
       }
       else
       {
          if ($this->fileService->hasFile('image'))
          {
              $this->fileService->delete($homeCenter->image);
          }else{
              $data['image'] = $homeCenter->image;
          }
          $homeCenterModel->where('id',$homeCenter->id)->update($data);
      }
       return redirect(url('\admin\homecenter'),true);
   }
}