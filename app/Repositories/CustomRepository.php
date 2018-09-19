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

	protected $_sortField = 'id';
	protected $_sortType = 'DESC';
	protected $_perPage = 10;

	public function getListForBackend($input = [])
	{
		return $this->scopeQuery(function ($query) use ($input) {
                return $query->orderBy($this->_sortField, $this->_sortType)->where($input);
            })
            ->paginate($this->_perPage);
	}
}

?>