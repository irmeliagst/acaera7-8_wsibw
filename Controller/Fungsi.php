<?php 

namespace Controller;

class Fungsi
{
	public function get()
	{
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['kata'])) {
			return $_POST['kata'];
			}
		}
	}

	public function hitungKata($kata)
	{
		$arr = explode(' ', $kata);

		return count($arr);
	}
}