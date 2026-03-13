<?php

function generateMeta($title, $description, $keywords = "")
{
    echo "<title>$title</title>";
    echo "<meta name='description' content='$description'>";
    echo "<meta name='keywords' content='$keywords'>";
}