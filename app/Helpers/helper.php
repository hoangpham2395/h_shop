<?php

function getConstant($key, $default = null)
{
    return config('constant.' . $key, $default);
}
?>