<?php

namespace Application\Repositories;

use Application\Models\User;
use Application\Repositories\Contracts\BaseRepository;

class UsersRepository extends BaseRepository {

	public function __construct() {
		parent::__construct();
		$this->model = User::class;
	}

}