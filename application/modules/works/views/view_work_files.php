<?php

$tam = count($files);
if($tam>0){
echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">";
echo "<ol class=\"carousel-indicators\">";
echo "<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
    $cont=1;
    if($tam>1){
        for ($i=1; $i < $tam-1; $i++) { 
            echo"<li data-target=\"#myCarousel\" data-slide-to=\"$i\"></li>";
        }
    }
echo"</ol>";
echo"<div class=\"carousel-inner\" role=\"listbox\">";
$cont = 0;
    foreach ($files as $file) {
        $path = base_url().'assets/img/work_uploads/'.$file['file_name'];
        //echo $path.'<br>';
        if($cont==0){
            echo"<div class=\"item active\">";
            echo"<img src=\"$path\">";
            echo"<h4>Imagen: #$cont - <a href=\"$path\" target=\"_blank\">".$file['original_file_name']."</a></h4>";
            echo"<p>".$file['description']."</p>";
            echo"</div>";
        }else{
            echo"<div class=\"item\">";
            echo"<img src=\"$path\">";
            echo"<h4>Imagen: #$cont - <a href=\"$path\" target=\"_blank\">".$file['original_file_name']."</a></h4>";
            echo"<p>".$file['description']."</p>";
            echo"</div>";
        }
        $cont++;
    }
?>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
}
?>
