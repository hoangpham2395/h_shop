<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Session;

class BackendController extends BaseController
{
    protected $_sortField = 'id';
    protected $_sortType = 'DESC';
    protected $_perPage = 10;

    public function __construct()
    {
    }

    protected function _prepareData()
    {
        return [];
    }

    protected function _prepareCreate()
    {
        $params['alias'] = $this->getAlias();
        return $params;
    }

    protected function _prepareStore()
    {
        $params['ins_id'] = getAdminCurrent()->id;
        $params['del_flag'] = 0;
        return $params;
    }

    protected function _prepareShow()
    {
        return [];
    }

    protected function _prepareEdit()
    {
        $params['alias'] = $this->getAlias();
        return $params;
    }

    protected function _prepareUpdate()
    {
        $params['upd_id'] = getAdminCurrent()->id;
        return $params;
    }

    protected function _prepareDestroy($id)
    {
        $params = $this->getRepository()->findById($id)->toArray();
        $this->_unsetForDestroy($params);
        $params['upd_id'] = getAdminCurrent()->id;
        $params['del_flag'] = 1;
        return $params;
    }

    protected function _beforeIndex() 
    {
        $this->getRepository()->setSortField($this->_sortField);
        $this->getRepository()->setSortType($this->_sortType);
        $this->getRepository()->setPerPage($this->_perPage);
    }

    public function index()
    {
        $this->_beforeIndex();
        $params = $this->_prepareData();
        $entities = $this->getRepository()->getListForBackend(Input::all());
        return view('backend.' . $this->getAlias() . '.index', compact('entities', 'params'));
    }

    public function create()
    {
        $params = $this->_prepareCreate();
        return view('backend.' . $this->getAlias() . '.create', compact('params'));
    }

    public function edit($id)
    {
        $params = $this->_prepareEdit();
        $entity = $this->getRepository()->findById($id);
        return view('backend.' . $this->getAlias() . '.edit', compact('entity', 'params'));
    }

    public function show($id)
    {
        $params = $this->_prepareShow();
        $entity = $this->getRepository()->findById($id);
        return view('backend.' . $this->getAlias() . '.edit', compact('entity', 'params'));
    }

    public function store(Request $request)
    {
        $params = $request->all();

        $validator = $this->getValidator()->validateCreate($params);
        if (!$validator) {
            return redirect()->back()->withErrors($this->getValidator()->errors())->withInput();
        }

        $params = array_merge($params, $this->_prepareStore());

        DB::beginTransaction();
        try {
            $this->getRepository()->create($params);
            DB::commit();
            Session::flash('success', getMessaage('create_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->route($this->getAlias() . '.index')->withErrors(['create' => getMessaage('create_failed')]);
    }

    public function update(Request $request, $id)
    {
        $params = $request->all();

        $validator = $this->getValidator()->validateUpdate($params, $id);
        if (!$validator) {
            return redirect()->back()->withErrors($this->getValidator()->errors())->withInput();
        }

        $params = array_merge($params, $this->_prepareUpdate());

        DB::beginTransaction();
        try {
            $this->getRepository()->update($params, $id);
            DB::commit();
            Session::flash('success', getMessaage('update_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->route($this->getAlias() . '.index')->withErrors(['update' => getMessaage('update_failed')]);
    }

    public function destroy($id)
    {
        $params = $this->_prepareDestroy($id);

        DB::beginTransaction();
        try {
            $this->getRepository()->update($params, $id);

            DB::commit();
            Session::flash('success', getMessaage('delete_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->route($this->getAlias() . '.index')->withErrors(['delete' => getMessaage('delete_failed')]);
    }

    protected function _unsetForDestroy($params = [])
    {
        $elements = getConfig('unset_element_for_destroy');
        foreach ($elements as $element) {
            if (!isset($params[$element])) {
                continue;
            }
            unset($params[$element]);
        }
    }
}
