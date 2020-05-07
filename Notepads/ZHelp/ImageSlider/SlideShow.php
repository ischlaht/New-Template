<?php 
// header("Content-Type: application/json; charset=UTF-8");

?>

<div id="ImageSlider" ng-controller="ImageSlider" ng-init="SliderInfoRET()">
    <!-- <div class="SliderImage" > -->

               <!-- <span class="dots">..</span> -->
        <div class="BGImage" id="{{Records[Index]}}" style="background-image: url('../Config.Files/Server/ImageSlider/{{Records[Index].ImageName}}'">
        <!-- <div class=""></div> -->
        <!-- {{Chosen}} -->
               <a ng-click="SliderControls(-1)" class="SliderBTN" id="prev">&#10094;</a>
               <a ng-click="SliderControls(+1)" class="SliderBTN" id="next">&#10095;</a>
              
        <!-- <div class="ImageFolder">{{Records[Index].ImageFolder}}</div> -->
        <div ng-repeat="x in Records track by $index">
          <span class="dots Records[Index].ImageName" id="{{Records[Index].ImageID}}"></span>
          <!-- <span ng-if="Records[Index].ImageID" class="dots colorB" id="{{Records[Index].ImageName}}">asdasd</span> -->
          <!-- <span ng-if="Index==1" class="dots colorB" id="{{Records[Index].ImageID}}"></span> -->

        
          <!-- <span ng-if"Records[Index].ImageName != 1" class="dots" id="{{Records[Index].ImageID}}">asdasd</span> -->

        </div>
          <!-- <span class="dot colorB" id="{{Records[Index].ImageID}}"></span> -->

        <!-- </div> -->
    </div>


</div>

<style>



#ImageSlider{
  font-size: 120%;

  display: block;
  margin-left: auto;
  margin-right: auto;

  width: 70%;
  height: 510px;

  border: 5px solid black;

}
.BGImage{
  display: block;
  width: 40%;
  height: 500px;
  /* background-attachment: fixed; */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

img{
  display: inlione-block;
  
  width: 100%;
  height: 600px;
}


.SliderBTN{
  font-size: 200%;

  /* display: block; */
  /* margin-top: 200px; */
}

    .dots {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  /* background-color: lightgrey; */
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;

  color: red; !important;
}
.dots:hover {
  background-color: black;
}

  .colorB{
    color: black;
    background-color: grey;
    font-size: 200%;
  }


</style>




<script>

 

</script>

