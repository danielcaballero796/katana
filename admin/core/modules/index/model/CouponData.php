<?php
class CouponData {
	public static $tablename = "coupon";


	public function CouponData(){
		$this->name = "";
		$this->description = "";
		$this->product_id = "";
		$this->value = "";
		$this->kind = "";
		$this->is_multiple = "";
        $this->is_active = "";
        $this->start_at = "";
        $this->finish_at = "";
        $this->created_at = "";
	}

	
	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CouponData());
	}

	

}

?>