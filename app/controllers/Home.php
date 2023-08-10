<?php
class Home extends Controller
{
    public $sach;
    public $data=[];
    public $model_home;
    public function __construct()
    {
        $this->model_home = $this->model('HomeModel');

    }

    public function index()
    {
        $dsdm = $this->model_home->loadallcategory();
        $spnew = $this->model_home->loadallsphome();
        $spnew1 = $this->model_home->loadall_sanpham_new();
        $sphot = $this->model_home->loadall_sanpham_hot();
        $spkm = $this->model_home->loadall_sanpham_km();
        $dsblog = $this->model_home->loadall_baiviet_new();
        $this->data['page_title'] = 'Trang Chủ';
        $this->data['dsdm']=$dsdm;
        $this->data['content'] = 'client/home';
        $this->data['sub_content']['dsdm'] = $dsdm;
        $this->data['sub_content']['spnew'] = $spnew;
        $this->data['sub_content']['spnew1'] = $spnew1;
        $this->data['sub_content']['sphot'] = $sphot;
        $this->data['sub_content']['spkm'] = $spkm;
        $this->data['sub_content']['dsblog'] = $dsblog;
        $this->render('layouts/client_layout', $this->data);
    }

}
