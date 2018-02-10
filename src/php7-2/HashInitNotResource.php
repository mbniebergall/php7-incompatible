<?php

$hash = hash_init(HASH_MD5);

echo (int) is_resource($hash);
