<?php
 
// buat class komputer
class komputer{
 
   // property dengan hak akses protected
   protected $jenis_processor = "Intel Core i7-4790 3.6Ghz";
}
  
// buat class laptop
class laptop extends komputer{
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  
// jalankan method
echo $laptop_baru->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
?>