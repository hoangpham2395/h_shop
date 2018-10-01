<?php

function getConstant($key, $default = null)
{
    return config('constant.' . $key, $default);
}

function getMessaage($key) 
{
	return trans('messages.' . $key);
}

function getConfig($key, $default = null) 
{
	return config('config.' . $key, $default);
}

function getAdminCurrent() 
{
	return Auth::user();
}

function getAvatarDefault()
{
    return asset(getConfig('avatar_default'));
}
?>