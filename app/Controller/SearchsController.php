<?php

class SearchsController extends AppController{

  public function index(){
      if($this->request->is(['post', 'get'])){
          $API_key = "AIzaSyCVNG9ny_d4IQ-Mfrh4LRnbGc2lGqTUAIE";
          $adress = $this->request->query('adress');

          //APIリクエスト
          $json =
              @file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.
                  rawurlencode($adress).
                  '&key=' . $API_key
              );

          //取得したデータを配列に変換
          $obj = json_decode($json, true);

          //取得したデータからplace_idを取得
          $place_id = $obj['results'][0]['place_id'];

          //place_idからさらにAPI取得
          $place_json =
              @file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid='.
                  $place_id.
                  '&key=' . $API_key
              );

          //取得したデータを配列に変換
          $place_obj = json_decode($place_json, true);

          $this->set('place_id', $place_id);
          $this->set('obj', $obj);
          $this->set('place', $place_obj);
      }

  }

}
