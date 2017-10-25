<?php
class identitas{
 		public $nama;
 		public $jenis_kelamin;
 		public $alamat;
 		public $kelas;
 		public $sekolah;

 		//KONSTRAKTOR
 		public function __construct($a,$b,$c,$d,$e)
 		{
			$this->nama = $a;
			$this->jenis_kelamin = $b;
			$this->alamat = $c;
			$this->kelas = $d;
			$this->sekolah = $e;			
 		}
}

?>