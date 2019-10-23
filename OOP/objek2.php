<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   var $pemilik;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="Dina";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
echo "<br />";
echo $laptop_andi->pemilik; // Andi
echo "<br />";
echo $laptop_dina->pemilik; // Dina
echo "<br />";
?>