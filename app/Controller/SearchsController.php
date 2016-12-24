<?php

class SearchsController extends AppController{

    public function index(){
        if($this->request->is(['post', 'get'])){
            $adress = $this->request->query('adress');

            //APIリクエスト
            $json = @file_get_contents('http://geoapi.heartrails.com/api/json?method=suggest&matching=like&keyword='.rawurlencode($adress));
            //取得したデータを配列に変換
            $obj = json_decode($json, true);

            $this->set('adress', $adress);
            $this->set('obj', $obj);
        }

    }

}
