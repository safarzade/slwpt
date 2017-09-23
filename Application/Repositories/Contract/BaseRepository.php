<?php

namespace Application\Repositories\Contract;

class BaseRepository {

	protected $table;

	protected $db;

	protected $table_prefix;

	protected $primary_key;

	public function __construct() {
		global $wpdb;
		$this->db           = $wpdb;
		$this->table_prefix = $this->db->prefix;
	}

	public function find( int $id, array $columns = null ) {
		$columns = is_null( $columns ) ? '*' : implode( ',', $columns );

		return $this->db->get_row(
			$this->db->prepare( "SELECT * FROM {$this->table} WHERE {$this->primary_key}=%d", $id )
		);
	}

	public function findBy() {

	}

	public function delete() {

	}

	public function query( string $query, bool $is_select = false ) {
		return $is_select ? $this->db->get_results( $query ) : $this->db->query( $query );
	}

	public function update() {

	}

}
