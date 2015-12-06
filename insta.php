<?php
if(!empty($instagram_array)){
  foreach($instagram_array['data'] as $key=>$image){
    echo '<img src="'.$image['images']['low_resolution']['url'].'" alt=""/><br/>';
  }
}
?>	