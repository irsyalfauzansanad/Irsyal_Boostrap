<?php
	class Singa {
		public $warna = 'orange';
		public $jumlah_kaki = 4;
		public $tinggi_badan = 1.21;
		public $a = true;


		public function berburu($var, $var2){
			return "memburu ".$var ." dan ".$var2;
		}
		public function berlari($var3){
			return "saat memburu singa suka berlari mengejar ".$var3;
		}
		public function mengaung($var4){
			return "singa suka ".$var4;
		}
		public function mengajar($var5){
			return "singa suka mengajar anaknya ".$var5;
		}
		public function berkelompok($var6){
			return "singa suka ".$var6." saat memburu";
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
	echo "<br>" .$singa_irsyal->berburu('kambing','domba');
	echo "<br>" .$singa_irsyal->berlari('mangsanya');
	echo "<br>" .$singa_irsyal->mengaung('mengaung');
	echo "<br>" .$singa_irsyal->mengajar('memburu');
	echo "<br>" .$singa_irsyal->berkelompok('berkelompok');
?>