<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22efa3658b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\x73\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto acsigwcaesyyoiie; } return []; acsigwcaesyyoiie: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\41\x2d\x2d\134\163\x2a\x6e\157\160\164\151\x6d\151\172\145\134\x73\x2a\55\55\76\56\x2a\77\74\x21\55\x2d\x5c\163\x2a\57\x5c\x73\x2a\x6e\157\160\x74\151\155\x69\172\145\x5c\163\x2a\55\55\76\43\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto aqaaqeucgoegeeuk; } return $nsmgceoqaqogqmuw; aqaaqeucgoegeeuk: $moyaaaascoeowegu = preg_replace("\x2f\74\41\55\x2d\50\x2e\x2a\x29\x2d\x2d\76\x2f\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto wycmcqaauqkgegau; } return $nsmgceoqaqogqmuw; wycmcqaauqkgegau: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\163\143\x72\x69\x70\x74\133\136\x3e\x5d\52\76\x2e\52\77\x3c\134\57\163\143\x72\151\x70\x74\134\163\x2a\76\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qcweoyigoaeacsow; } return $nsmgceoqaqogqmuw; qcweoyigoaeacsow: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\157\163\x63\x72\151\x70\x74\133\x5e\76\x5d\x2a\x3e\56\52\77\74\134\57\x6e\x6f\x73\x63\162\151\x70\x74\x5c\x73\x2a\76\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto iyceygqsmokgmams; } return $nsmgceoqaqogqmuw; iyceygqsmokgmams: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\x78\155\x70\56\52\76\x2e\x2a\74\57\170\155\160\76\x23\x55\x69\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\161\x6b\167\143\155\145\x65\x6b\147\x69\x69\157\x69\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto wcekgciqeggiiwgk; } return $nsmgceoqaqogqmuw; wcekgciqeggiiwgk: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\x2d\55\40\x25\163\x20\x2d\55\76", uniqid("\127\120\122\x5f\130\x4d\120\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto gkwuewqmqeswqukg; } return $nsmgceoqaqogqmuw; gkwuewqmqeswqukg: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
