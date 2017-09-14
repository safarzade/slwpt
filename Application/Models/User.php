<?php
namespace Application\Models;

use Application\Models\Contracts\BaseModel;

class User extends BaseModel {

	protected $table = 'users';

	public function getFullNameAttribute() {
		return $this->attributes['user_nicename'] . '#'.$this->attributes['display_name'];
	}
}