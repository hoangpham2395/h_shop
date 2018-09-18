<?php 
namespace App\Repositories;

use App\Repositories\CustomRepository;
use App\Model\Entities\Admin;

/**
 * 
 */
class AdminRepository extends CustomRepository
{
	function model() {
		return Admin::class;
	}
}
?>