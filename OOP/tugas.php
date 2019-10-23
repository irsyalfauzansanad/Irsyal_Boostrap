<?php
	class Singa {
		public $warna = 'orange';
		public $jumlah_kaki = 4;
		public $tinggi_badan = 1.21;
		public $a = true;


		public function berburu(){
			return "memburu kambing";
		}
		public function berlari(){
			return "saat memburu singa suka berlari mengejar mangsanya";
		}
		public function mengaung(){
			return "singa suka mengaung";
		}
		public function mengajar(){
			return "singa suka mengajar anaknya memburu";
		}
		public function berkelompok(){
			return "singa suka berkelompok saat memburu";
		}
	}

	$singa_irsyal = new Singa();
	echo "Warna = ".$singa_irsyal->warna;
	echo "<br> Jumlah kaki = " .$singa_irsyal->jumlah_kaki;
	if ($jumlah_kaki = 4) {
		$a = $jumlah_kaki;
		var_dump($jumlah_kaki==$a);
	}
	echo "<br> Tinggi badan = " .$singa_irsyal->tinggi_badan." meter";	
	echo "<br>" .$singa_irsyal->berburu();
	echo "<br>" .$singa_irsyal->berlari();
	echo "<br>" .$singa_irsyal->mengaung();
	echo "<br>" .$singa_irsyal->mengajar();
	echo "<br>" .$singa_irsyal->berkelompok();
?>