<?php

class Personal_data
{
	/**
	id ID
	account 帳號
	password 密碼
	permission 權限
	status 是否被停權 1代表停權 0代表沒被停權
	
	
	*/
	private $data = array();
	
	function __construct()
	{
	
	}
	
	public function __set($name,$value)
	{
		$this->data[$name] = $value;
	}
	
	public function __get($name)
	{
		if (array_key_exists($name,$this->data))
		{
			return $this->data[$name];
		}
	}

}
