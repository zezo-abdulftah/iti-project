<?php
function uploadimage($folder,$photo){
    $photo->store('/',$folder);
    $filename=  $photo->hashname();
    return $filename;
}
