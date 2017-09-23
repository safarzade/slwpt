<?php
namespace Application\Repositories;

use Application\Repositories\Contract\BaseRepository;

class UserRepository extends BaseRepository {

	public function __construct() {
		parent::__construct();
		$this->table = $this->table_prefix . 'users';
		$this->primary_key = 'ID';
	}

	public function get_user_payments(int $user_id) {
		$user_payment_table = $this->table_prefix.'user_payments';
		return $this->query("
				SELECT 
				payments.*,
				users.display_name 
				FROM {$user_payment_table} payments
				LEFT JOIN {$this->db->users} users ON payments.user_payment_user_id = users.ID
				WHERE payments.user_payment_user_id={$user_id}
		",true);
	}
}