<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * 
 */
class CustomRepository extends BaseRepository
{
	function model() 
	{
		return "";
	}

	protected $_sortField = 'id';
	protected $_sortType = 'DESC';
	protected $_perPage = 3;

	public function getListForBackend($params = [])
	{
		return $this->scopeQuery(function ($query) use ($params) {
                return $query->orderBy($this->_sortField, $this->_sortType)->where($params);
            })
            ->paginate($this->_perPage);
	}

	public function findById($id) 
	{
		return $this->find($id);
	}
}

?>