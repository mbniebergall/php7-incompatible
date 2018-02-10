<?php

class ImagePostScript
{
    public function doStuff($fontIndex)
    {
        imagepsfreefont($fontIndex);
    }
}
