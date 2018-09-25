<?php
namespace App\Model\Presenters;

trait AdminPresenter {
    public function getRoleType()
    {
        $roleTypes = getConfig('level');
        return $roleTypes[$this->level];
    }
}
?>