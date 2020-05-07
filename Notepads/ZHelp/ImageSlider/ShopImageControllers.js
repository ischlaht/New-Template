PlatteVape.controller("ImageSlider", [
  "$scope",
  "$http",

  function($scope, $http) {
    var x = 0;
    var dotIndex = 0;

    $scope.SliderInfoRET = function() {
      $http({
        method: "get",
        url:
          "../Config.Files/Server/Server.Controller/InfoControls.php?getSliderInfo='true'",
      }).then(function(response, data) {
        $scope.Records = response.data;
        $scope.Index = 0;
        $scope.dots = $scope.Records.length;
        var ArrayNum = $scope.Records.length - 1;

        // ------------------------------------------------
        // ------------------------------------------------
        // ------------------------------------------------
        $scope.SliderControls = function(n) {
          $scope.RefreshSlider(($scope.Index += n));
        };
        // ------------------------------------------------

        $scope.RefreshSlider = function() {
          if ($scope.Index > ArrayNum) {
            $scope.Index = 0;
          } else if ($scope.Index < 0) {
            $scope.Index = ArrayNum;
          }
          var pow = "." + $scope.Records[$scope.Index].ImageName;
          // alert(pow);
          // $scope.Chosen = $scope.Records[$scope.Index].ImageID;
          // var jq = response.data[$scope.Index].ImageID;

          $(document).ready(function() {
            $(pow).css({
              color: "green",
              "background-color": "green",
            });
            // $("#" + jq + "").removeClass(".colorB");
            // $("#" + jq + "").css({
            // $(".dots").hide();
            // $(".dots").css({
            //   color: "black",
            //   "background-color": "pink",
            // });
            // var dots = document.getElementsByClassName("dots");
            // dots[1].className += colorB;
          });
        };
      });
      // $("#" + jq + "").css("color", "black");

      // ------------------------------------------------
      // ------------------------------------------------
      // ------------------------------------------------

      // var ImageShow = response.data[Index].ImageName;
      // console.log("User Data Initialized");
    };

    //   setInterval(function() {
    //     // var IN = x + 1;
    //     //   $scope.Index = IN + 2;
    //     //   $scope.Index += 1;
    //     // var Ind = Index + 1;
    //     //   $scope.INDEX = response.data[Index].ImageName;
    //     //   $scope.ImageShow = response.data[Index].ImageName;
    //     // alert("Hello");
    //     //   $(".SliderImage").css("display:none");
    //     $scope.Index = 1;
    //   }, 4000);
  },
]);
