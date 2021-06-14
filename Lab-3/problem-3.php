<?php $length=95;
      $width=60;
      if($length==$width)
      {
          echo "The shape is sqare";
      }
      else{
        $perimeter=2*($length+$width);
        $area=$length*$width;
        echo "The perimeter of the rectangle is <b> $perimeter</b><br>";
        echo "The area of the rectangle is <b>$area</b>";
      }
      ?>