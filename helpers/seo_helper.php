<?php

function seo_meta($title,$description,$image=""){

echo "<title>$title</title>";

echo "<meta name='description' content='$description'>";

echo "<meta property='og:title' content='$title'>";

echo "<meta property='og:description' content='$description'>";

if($image){
echo "<meta property='og:image' content='$image'>";
}

}