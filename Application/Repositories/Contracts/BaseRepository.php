<?php
namespace Application\Repositories\Contracts;

class BaseRepository {

	protected $model;

	public function __construct() {

	}

	public function find( int $id ) {
		return $this->model::find($id);
	}

	public function delete( int $id ) {
		$item = $this->find($id);
		if($item){
			return $item->delete();
		}
	}

	public function findBy(array $data,$single = false) {
		$query = $this->model::where($data);
		if($single){
			return $query->first();
		}
		return $query->get();
	}

	public function update( int $id,array $data) {
		$item = $this->find($id);
		if($item){
			$item->update($data);
		}
	}

}