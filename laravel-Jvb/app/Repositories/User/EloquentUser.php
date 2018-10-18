<?php
namespace App\Repositories\User;
use App\Student;
/**
 * 
 */
class EloquentUser implements UserRepository
{
	private $model;
	public  function __construct(Student $model)
	{
		$this->model= $model;
	}

	public function getAll(){
		return $this->model->all();
	}

	public function getById($id){
		return $this->model->find($id);
	}

	public function create(array $attributes){
		return $this->model->create($attributes);
	}
	public function show(){
		return $this->model->orderBy('id', 'desc')->first();
	}
	 public function update($id, array $attributes){
	 	return $this->model->find($id)->update($attributes);
	 }
	 public function delete($id){
	 	return $this->model->find($id)->delete();
	 }
}
?>