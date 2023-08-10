<?php

class Search extends Controller
{
    public function index(){
        if(isset($_POST['keywords'])&& $_POST['keywords']!==""){
            $keywords = $_POST['keywords'];
            // $products=[];
            $result = $this->db->table('product')->whereLike('name','%'.$keywords.'%')->get();
            
            if($result){
                foreach ($result as $item) {
                    extract($item); 
                    $gia = currency_format($price);
                    ?>
                    <li class='list-group-item' style="width: 609.175px; transform: translate(292.8px, 0px);">
                            <div class="row ">
                                <div class='col-4 text-right'>
                                    <img src="<?= _WEB_ROOT ?>/public/uploads/<?=$img?>" width="150px" alt="">
                                </div>
                                <div class='col-8 text-left'>
                                    <div class='name-product'>
                                        <a href='<?=_WEB_ROOT?>/san-pham/<?=$id?>' style="color: black;"><?=$name?></a>
                                    </div>
                                    <div class='price-product'>
                                        <span><?=$gia?></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                <?php }
            }
        }
    }
}