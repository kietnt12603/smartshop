<?php 
    class Blog extends Controller
    {
        public $data=[];
        public function index()
        {
            $dsdm = $this->db->table('list_product')->get();
            $dsdmbl=$this->db->table('list_blog')->get();
            $this->data['page_title']='Bài Viết';
            // $this->data['sub_content']['page_title']='Bài Viết';
            $dsblognew=$this->db->table('blog')->orderBy('id','DESC')->limit('3')->get();
            $dsblog=$this->db->table('blog')->get();
            $this->data['dsdm'] = $dsdm;
            $this->data['content'] = 'client/blog/blog';
            $this->data['sub_content']['dsdmbl'] = $dsdmbl;
            $this->data['sub_content']['dsblognew']=$dsblognew;
            $this->data['sub_content']['dsblog']=$dsblog;
            $this->render('layouts/client_layout',$this->data);
        }
    }
?>