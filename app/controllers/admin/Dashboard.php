<?php
class Dashboard extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['page_title'] = 'Dashboard';
        $this->data['content'] = 'admin/home/index';
        $this->data['sub_content']['title'] = 'Thống Kê';
        $this->render('layouts/admin_layout', $this->data);
    }
}
