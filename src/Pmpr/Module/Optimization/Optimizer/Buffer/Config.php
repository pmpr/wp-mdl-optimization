<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ada53dffd1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto iqsgossweywksoia; } return; iqsgossweywksoia: if (!(!isset($ywmkwiwkosakssii["\x73\x65\162\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto awaqksikyomsuaeo; } $ywmkwiwkosakssii["\163\x65\x72\166\145\162"] = $_SERVER; awaqksikyomsuaeo: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\162\166\x65\x72"]) ? $ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cuommomwmsackoqc; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cuommomwmsackoqc: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ggeoqeowscwkeumy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ggeoqeowscwkeumy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qyeswawykmasuqye; } return $this->eecucukcqkqysiau(__FUNCTION__); qyeswawykmasuqye: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\x63\145\x73\163"]) || !$oqwuasygwcckkios["\x73\x75\143\x63\145\x73\163"])) { goto uwaimsisescsgyqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uwaimsisescsgyqk: if (!file_exists($oqwuasygwcckkios["\160\141\x74\x68"])) { goto uqcsksaywyqeumig; } include $oqwuasygwcckkios["\160\141\x74\150"]; uqcsksaywyqeumig: $uiewakwqscemywuo = ["\144\145\x62\165\x67\x5f\x6d\x6f\x64\145" => 1, "\x63\x61\x63\150\x65\137\167\x65\142\x70" => 0, "\x67\x7a\x69\x70\137\145\x6e\141\x62\x6c\145" => 1, "\143\157\157\153\151\x65\137\x68\x61\163\150" => '', "\x6d\157\142\151\x6c\145\x5f\143\141\x63\x68\145" => 1, "\x63\141\143\x68\145\137\145\156\141\142\x6c\145" => 1, "\151\147\156\157\162\x65\x64\x5f\165\162\x6c\x73" => [], "\x72\145\152\145\143\164\x5f\x63\x6f\157\153\151\145\x73" => '', "\163\x65\x63\x72\145\x74\137\x63\141\143\x68\145\137\x6b\145\171" => '', "\x6c\157\x67\147\x65\x64\137\x69\x6e\x5f\x63\x6f\x6f\x6b\x69\145" => '', "\x63\157\x6d\155\x6f\156\x5f\143\141\143\150\145\x5f\154\x6f\147\147\x65\x64\x5f\x75\x73\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto jsmisuccwyukksgc; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\124\120\137\110\x4f\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\134\x64\x2b\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wkiymcoqqiigqaaw; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\121\x55\105\123\x54\x5f\x55\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\x3f\x3c\75\x2e\x29\57\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\57\136\x28\77\x3a\x25\x32\x46\51\x2a\50\56\52\77\51\x28\77\72\45\x32\x46\x29\x2a\44\x2f", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto uyeyscsaigimsqwq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"), $yykkewcosaecgqyg))) { goto kceuusiekagyeoys; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); kceuusiekagyeoys: goto mwieyyqamgwicgco; uyeyscsaigimsqwq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\x73\163" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); mwieyyqamgwicgco: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; eekaiaeqewiqkkgm: } gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\163\x73" => false, "\x70\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\x70"]); goto esqwswmoegiqcckg; wkiymcoqqiigqaaw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\x65\163\x73" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); esqwswmoegiqcckg: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\x6a\x65\143\164\x5f\143\157\x6f\153\x69\145\163"); if (!$osqkgokmuiasuukg) { goto qmokwkocmcyeyesc; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qmokwkocmcyeyesc: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\156\157\x72\145\x64\137\165\x72\x6c\163"))) { goto mosuacsuaasssciu; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; mosuacsuaasssciu: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\x68\145\x5f\x6d\141\x6e\144\141\164\x6f\162\x79\137\x63\157\157\x6b\x69\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qksckewucmosemuo; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; qksckewucmosemuo: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\147\x5f\x6d\157\x64\x65"); } }
