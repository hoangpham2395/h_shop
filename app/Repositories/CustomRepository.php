<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * 
 */
class CustomRepository extends BaseRepository
{
	function model() {
		return "";
	}

	public function getListForBackend($input) 
	{
		return $this->all();
	}
}

?>