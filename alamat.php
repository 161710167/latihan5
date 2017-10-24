<?php
class alamat
{
public $nama;
public $alamat;


public function __construct($nama, $alamat)
{
$this->nama = $nama;
$this->alamat  = $alamat;

}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_alamat()
	{
		return $this->alamat;
	}
	
}


?>