<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb243a19822             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\163\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto ewsigoeswimiueqe; } return []; ewsigoeswimiueqe: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\x2d\55\134\x73\52\156\x6f\x70\x74\151\155\x69\x7a\145\134\163\x2a\55\x2d\x3e\x2e\52\77\x3c\x21\55\55\x5c\x73\x2a\x2f\134\163\x2a\156\157\x70\164\x69\x6d\x69\172\x65\x5c\163\52\x2d\x2d\x3e\43\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gaskcgoeywuyukke; } return $nsmgceoqaqogqmuw; gaskcgoeywuyukke: $moyaaaascoeowegu = preg_replace("\57\74\41\55\x2d\x28\x2e\52\51\x2d\55\x3e\x2f\x55\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto gqaqamewqeaqwcia; } return $nsmgceoqaqogqmuw; gqaqamewqeaqwcia: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\163\143\x72\151\160\x74\133\x5e\76\x5d\52\x3e\56\x2a\x3f\74\x5c\x2f\x73\143\162\151\x70\x74\x5c\163\x2a\x3e\43\x6d\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto okuqsqaiwwiigmyu; } return $nsmgceoqaqogqmuw; okuqsqaiwwiigmyu: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\157\163\143\162\x69\x70\x74\133\136\76\x5d\x2a\76\x2e\52\x3f\x3c\x5c\57\x6e\157\163\143\x72\x69\160\x74\x5c\163\x2a\76\x23\x6d\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ksiwgckusukisueg; } return $nsmgceoqaqogqmuw; ksiwgckusukisueg: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\x6d\160\x2e\x2a\x3e\56\52\74\57\170\x6d\160\76\43\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\x71\153\167\143\155\x65\145\153\x67\151\x69\157\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto sgkqgucguyccaaki; } return $nsmgceoqaqogqmuw; sgkqgucguyccaaki: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\x2d\x2d\40\x25\x73\40\55\x2d\76", uniqid("\127\x50\x52\137\130\x4d\x50\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto omuemegmkesqgwys; } return $nsmgceoqaqogqmuw; omuemegmkesqgwys: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
