<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22bfe246e3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto acsigwcaesyyoiie; } return []; acsigwcaesyyoiie: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\41\55\55\x5c\x73\52\x6e\157\x70\164\151\155\x69\x7a\145\134\x73\52\55\x2d\x3e\56\x2a\x3f\74\41\x2d\x2d\134\x73\x2a\57\x5c\163\52\x6e\157\x70\x74\151\x6d\x69\x7a\145\x5c\x73\x2a\x2d\x2d\76\43\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto aqaaqeucgoegeeuk; } return $nsmgceoqaqogqmuw; aqaaqeucgoegeeuk: $moyaaaascoeowegu = preg_replace("\x2f\74\41\x2d\55\50\x2e\52\51\55\55\x3e\x2f\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto wycmcqaauqkgegau; } return $nsmgceoqaqogqmuw; wycmcqaauqkgegau: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x73\143\162\x69\x70\164\133\136\76\135\x2a\x3e\x2e\x2a\77\74\134\57\163\x63\x72\x69\x70\x74\x5c\x73\x2a\76\43\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qcweoyigoaeacsow; } return $nsmgceoqaqogqmuw; qcweoyigoaeacsow: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x6e\157\x73\x63\x72\151\160\164\x5b\136\76\135\x2a\76\56\52\77\x3c\134\57\x6e\157\x73\x63\x72\x69\160\x74\134\163\x2a\76\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto iyceygqsmokgmams; } return $nsmgceoqaqogqmuw; iyceygqsmokgmams: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\x6d\160\x2e\52\x3e\x2e\52\74\57\x78\x6d\x70\76\x23\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\x71\153\x77\143\x6d\145\145\x6b\x67\151\x69\157\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto wcekgciqeggiiwgk; } return $nsmgceoqaqogqmuw; wcekgciqeggiiwgk: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\x2d\x2d\x20\x25\x73\40\55\55\76", uniqid("\127\x50\122\x5f\x58\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto gkwuewqmqeswqukg; } return $nsmgceoqaqogqmuw; gkwuewqmqeswqukg: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
