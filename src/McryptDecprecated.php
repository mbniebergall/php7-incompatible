<?php

class McryptDecprecated
{
    public function generateIv()
    {
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        return mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
    }

    public function encrypt($plaintext)
    {
        $iv = $this->generateIv();
        return mcrypt_encrypt(MCRYPT_BLOWFISH, 'lsdkjfoijf', $plaintext);
    }
}