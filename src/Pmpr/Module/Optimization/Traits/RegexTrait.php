<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b5148c02d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\x73\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto sgiouaqukyycswqm; } return []; sgiouaqukyycswqm: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x21\x2d\x2d\134\163\x2a\156\157\x70\x74\151\155\151\x7a\145\x5c\x73\52\55\x2d\x3e\56\x2a\x3f\x3c\x21\55\x2d\x5c\163\x2a\57\134\163\x2a\x6e\x6f\x70\x74\x69\x6d\151\x7a\145\x5c\x73\x2a\x2d\55\76\x23\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gwkawguwsamuomuo; } return $nsmgceoqaqogqmuw; gwkawguwsamuomuo: $moyaaaascoeowegu = preg_replace("\57\x3c\x21\55\x2d\x28\56\x2a\x29\55\55\76\x2f\x55\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ucasigqmoiwaimkk; } return $nsmgceoqaqogqmuw; ucasigqmoiwaimkk: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\143\162\x69\x70\x74\133\136\x3e\x5d\52\76\56\x2a\x3f\x3c\x5c\x2f\x73\143\x72\151\x70\164\x5c\163\x2a\x3e\43\155\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto uugwmywmaqomeksa; } return $nsmgceoqaqogqmuw; uugwmywmaqomeksa: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x6e\x6f\x73\143\x72\x69\160\164\133\136\x3e\x5d\52\x3e\56\52\x3f\74\x5c\x2f\156\157\163\x63\x72\x69\160\x74\134\x73\52\x3e\43\155\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wowmysuygugawmmu; } return $nsmgceoqaqogqmuw; wowmysuygugawmmu: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\x6d\x70\56\x2a\x3e\x2e\x2a\74\x2f\170\x6d\x70\x3e\43\125\x69\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\161\x6b\167\x63\155\x65\145\x6b\x67\x69\x69\x6f\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto mmmqqoemusicwgqg; } return $nsmgceoqaqogqmuw; mmmqqoemusicwgqg: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\x2d\55\x20\x25\x73\x20\55\55\76", uniqid("\127\x50\122\x5f\x58\115\x50\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto iquugwoswgkoiieg; } return $nsmgceoqaqogqmuw; iquugwoswgkoiieg: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
