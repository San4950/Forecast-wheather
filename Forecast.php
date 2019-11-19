<?php
namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
class Forecast  extends Widget {
    
    public $city_id = '6992326';
    public $app_id = '7f7f2c95eb56eec46ebc70bdf6c46a94';


    public function init() {
       
        parent::init();
    }
    public function run(){

        $whether_info =  file_get_contents($this->getWheatherApiUrl());
        $whether_info = json_decode($whether_info);
        return $this->render('forecast', ['whether' => $whether_info]);
    }

    public function getWheatherApiUrl() {

        $url = 'https://api.openweathermap.org/data/2.5/weather?id='.$this->city_id.'&appid='.$this->app_id;
        return $url;
    }
}
?>