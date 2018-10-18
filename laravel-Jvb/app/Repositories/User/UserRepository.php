<?php
namespace App\Repositories\User;
interface UserRepository{
	function getAll();
	function getById($id);
	function create(array $attributes);
	function show();
	function update($id, array $attributes);
	function delete($id);
}
?>