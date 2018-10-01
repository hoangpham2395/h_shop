<?php
namespace App\Model\Presenters;

trait EmployeesPresenter
{
    public function getUrlAvatar()
    {
        return (empty($this->avatar) || !file_exists(asset('/images/' . $this->avatar))) ? getAvatarDefault() : asset($this->avatar);
    }
}
?>