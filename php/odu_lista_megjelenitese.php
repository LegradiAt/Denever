<?php
//ob_start();

/*header("Pragma: no-cache");
header("Cache-control: private, no-store, no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: text/html; charset=utf-8");*/

function odu_lista_megjelenitese() {

  $utvonal = "img/oduk"; // A lista és a képek is az utvonalon vannak
  $str = "";
  $file = fopen("$utvonal/lista.txt", "r") or die("Nem lehetett megnyitni a fájlt!");
  while( !feof($file) ) {
      $sor = fgets($file);

      if ($sor != "\r\n") { // Ha nem üres a sor

        if ( strpos($sor, ';') !== false ) {  // Ha tartalmaz ';'-t
          $a = explode(';', $sor);
          $kep = $a[0];
          $nevcim = $a[1];

          $str .= "<a href=\"$utvonal/$kep\" data-lightbox=\"deneverek\" data-title=\"$nevcim\">$nevcim</a><br>";
        } else {
          $kep = $sor;  // Ha nincs ';', akkor a sor csak a kép nevét tartalmazza
          $str .= "<a href=\"$utvonal/$kep\" data-lightbox=\"deneverek\" data-title=\"$kep\">$kep</a><br>";
        }
      }
  }
  print($str);
}
//ob_end_flush();
?>