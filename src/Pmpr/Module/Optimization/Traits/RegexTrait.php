<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa68d1c92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (empty($meyiiwcswqmuggyg)) { return []; } return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x21\55\55\134\163\x2a\156\157\x70\x74\x69\x6d\x69\x7a\x65\134\163\52\55\55\76\x2e\52\77\x3c\41\x2d\55\134\163\x2a\x2f\134\163\x2a\156\157\160\x74\151\155\x69\x7a\x65\134\163\x2a\x2d\x2d\76\x23\151\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } $moyaaaascoeowegu = preg_replace("\57\x3c\x21\55\x2d\50\x2e\52\51\55\55\x3e\x2f\125\x69\x73", '', $moyaaaascoeowegu); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x73\143\x72\151\160\x74\133\x5e\76\x5d\52\76\x2e\x2a\x3f\x3c\134\57\x73\143\x72\x69\x70\164\134\163\52\76\x23\x6d\x69\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\156\x6f\x73\x63\x72\x69\160\x74\133\x5e\x3e\x5d\52\x3e\x2e\x2a\77\x3c\x5c\57\x6e\x6f\163\143\162\x69\x70\x74\134\163\52\x3e\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\170\x6d\160\x2e\52\x3e\x2e\x2a\x3c\57\x78\x6d\x70\76\x23\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\161\x6b\x77\143\x6d\145\x65\x6b\147\151\x69\157\151\167"], $nsmgceoqaqogqmuw); if (empty($replaced_html)) { return $nsmgceoqaqogqmuw; } return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\x2d\x2d\40\x25\x73\x20\55\x2d\x3e", uniqid("\x57\120\x52\x5f\130\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (empty($this->XMPReplace)) { return $nsmgceoqaqogqmuw; } return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
