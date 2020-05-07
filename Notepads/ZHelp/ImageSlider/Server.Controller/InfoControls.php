
<?php
// <!---------------------------------------------------------------------------->
// <!---------------------------------------------------------------------------->
// <!-- Code and Design Created by Isaac Schlaht @ King systems Development -->
// header("Content-Type: application/json; charset=UTF-8");

class ShopImages{

    function getImageSlider(){
        $test = file_get_contents("../../../Config.Files/Server/ImageSlider/Metadata/SliderData.json");
        $result = json_decode($test, true);

        $Array = array();

            foreach($result as $key=> $item){
                foreach($item as $key => $value){
                    $Array[] = $value;
                    $data = json_encode($Array);
                }
            }
    echo $data;

    }//For Function getImageSlider();;;;;;;;;;;;;;;;;
}$shopImages = new ShopImages;//For Class ShopImgaes;;;;;;;;;;;;;;;;;


//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------
        ##########Call functions###############
        ##########Call functions###############
//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------

if(isset($_GET['getSliderInfo'])){
    $shopImages->getImageSlider();
}


?>