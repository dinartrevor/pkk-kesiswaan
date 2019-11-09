<?php

use App\Artikel;

function notArtikel()
{
  $artikel = Artikel::where('created_at', date('d-M-y'));
  return $artikel->count();
}
