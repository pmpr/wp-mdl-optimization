<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665c381549fb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto iqsgossweywksoia; } return; iqsgossweywksoia: if (!(!isset($ywmkwiwkosakssii["\x73\x65\162\x76\145\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto awaqksikyomsuaeo; } $ywmkwiwkosakssii["\x73\x65\x72\x76\145\162"] = $_SERVER; awaqksikyomsuaeo: $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\x68"], "\57") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\145\162\x76\145\162"]) && is_array($ywmkwiwkosakssii["\163\x65\x72\x76\145\x72"]) ? $ywmkwiwkosakssii["\163\145\162\166\145\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cuommomwmsackoqc; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cuommomwmsackoqc: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ggeoqeowscwkeumy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ggeoqeowscwkeumy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qyeswawykmasuqye; } return $this->eecucukcqkqysiau(__FUNCTION__); qyeswawykmasuqye: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\x63\x63\145\x73\x73"]) || !$oqwuasygwcckkios["\163\165\143\143\145\163\x73"])) { goto uwaimsisescsgyqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uwaimsisescsgyqk: if (!file_exists($oqwuasygwcckkios["\x70\x61\164\150"])) { goto uqcsksaywyqeumig; } include $oqwuasygwcckkios["\x70\x61\164\x68"]; uqcsksaywyqeumig: $uiewakwqscemywuo = ["\x64\x65\x62\165\x67\137\155\157\x64\x65" => 1, "\143\141\x63\x68\x65\x5f\x77\x65\x62\x70" => 0, "\147\172\x69\160\137\x65\x6e\141\142\x6c\145" => 1, "\x63\x6f\157\x6b\x69\145\x5f\150\x61\x73\150" => '', "\155\157\x62\x69\154\145\137\143\x61\143\150\x65" => 1, "\x63\x61\x63\x68\145\x5f\145\156\x61\x62\x6c\145" => 1, "\x69\x67\x6e\x6f\x72\x65\144\137\165\x72\x6c\x73" => [], "\162\x65\152\145\x63\x74\137\143\x6f\x6f\x6b\151\x65\x73" => '', "\x73\x65\x63\162\145\164\x5f\x63\141\143\x68\x65\x5f\153\145\x79" => '', "\x6c\157\147\147\x65\x64\x5f\x69\156\137\143\x6f\157\153\151\x65" => '', "\143\x6f\155\x6d\157\x6e\x5f\143\141\x63\150\145\137\154\157\147\x67\145\x64\137\x75\x73\145\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto jsmisuccwyukksgc; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\x5f\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\144\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wkiymcoqqiigqaaw; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\124\137\125\x52\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\x3c\x3d\x2e\51\x2f\53\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\57\x5e\50\x3f\72\x25\x32\x46\x29\52\50\x2e\52\77\x29\50\77\72\x25\x32\106\51\x2a\44\57", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { goto uyeyscsaigimsqwq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70"), $yykkewcosaecgqyg))) { goto kceuusiekagyeoys; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\145\163\x73" => true, "\x70\x61\x74\x68" => $oqwuasygwcckkios]); kceuusiekagyeoys: goto mwieyyqamgwicgco; uyeyscsaigimsqwq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\x73\163" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); mwieyyqamgwicgco: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; eekaiaeqewiqkkgm: } gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\x73\163" => false, "\x70\x61\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\x70\150\x70"]); goto esqwswmoegiqcckg; wkiymcoqqiigqaaw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\163\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); esqwswmoegiqcckg: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\x65\143\164\137\x63\157\157\x6b\151\x65\x73"); if (!$osqkgokmuiasuukg) { goto qmokwkocmcyeyesc; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; qmokwkocmcyeyesc: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\x6e\x6f\162\x65\144\137\x75\162\154\163"))) { goto mosuacsuaasssciu; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; mosuacsuaasssciu: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\x68\145\137\155\141\x6e\144\141\164\x6f\x72\171\x5f\143\x6f\157\x6b\151\x65\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qksckewucmosemuo; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; qksckewucmosemuo: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\165\147\x5f\x6d\157\x64\x65"); } }
