<?php

class LdapDeprecated
{
    public function doLdabSort($link, $result, $sortfilter)
    {
        ldap_sort($link, $result, $sortfilter);
    }
}