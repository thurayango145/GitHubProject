  <?php
    function getRandomNumber($min, $max) {
      return rand($min, $max);
    }
  
    echo getRandomNumber(0, 100);
  ?>