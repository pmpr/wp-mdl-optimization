<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa7f9435286             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto maeccckgcsaaumkw; } return; maeccckgcsaaumkw: if (!(!isset($ywmkwiwkosakssii["\163\x65\162\166\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto gcoeaokkagaaeuse; } $ywmkwiwkosakssii["\x73\145\162\166\145\x72"] = $_SERVER; gcoeaokkagaaeuse: $this->path = rtrim($ywmkwiwkosakssii["\160\x61\164\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\162\x76\145\x72"]) && is_array($ywmkwiwkosakssii["\x73\145\x72\x76\x65\162"]) ? $ywmkwiwkosakssii["\163\x65\162\166\145\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto kcqueaewmayywqeq; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; kcqueaewmayywqeq: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto uagsgicwwcakecwq; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; uagsgicwwcakecwq: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qocgmocqauaaekii; } return $this->eecucukcqkqysiau(__FUNCTION__); qocgmocqauaaekii: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\143\x63\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\165\143\143\145\163\x73"])) { goto gsggsmmwcmkgyyss; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gsggsmmwcmkgyyss: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\150"])) { goto yweucowesgsoewyc; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; yweucowesgsoewyc: $uiewakwqscemywuo = ["\x64\145\x76\137\155\157\144\145" => 0, "\144\x65\x62\x75\147\x5f\x6d\x6f\x64\145" => 1, "\143\x61\143\150\145\137\167\x65\x62\160" => 0, "\x67\x7a\151\160\137\145\156\x61\x62\154\145" => 1, "\x63\157\157\153\151\x65\x5f\x68\x61\163\x68" => '', "\x6d\157\142\x69\154\145\x5f\143\141\143\x68\145" => 1, "\x63\141\143\150\x65\137\145\156\141\142\154\145" => 1, "\x69\147\x6e\x6f\162\145\x64\x5f\x75\x72\x6c\x73" => [], "\x72\145\152\145\x63\164\137\143\157\x6f\153\151\x65\x73" => '', "\163\145\143\162\x65\164\x5f\143\x61\x63\x68\145\137\153\x65\x79" => '', "\154\x6f\147\x67\145\x64\137\151\x6e\137\x63\157\157\153\x69\145" => '', "\143\x6f\x6d\x6d\x6f\156\x5f\x63\x61\143\x68\x65\137\154\157\147\147\145\x64\137\165\x73\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto cycasoiysmksuwqk; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; cycasoiysmksuwqk: uwmcugkwqwcuqqsq: } ikygockuuyimmmwk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto muimagegskoisckc; } return $this->eecucukcqkqysiau(__FUNCTION__); muimagegskoisckc: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\120\x5f\x48\x4f\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\x5c\144\53\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yicaqocukqoauqgc; } return $this->eecucukcqkqysiau(__FUNCTION__); yicaqocukqoauqgc: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto seaiwkkgyyegiyug; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\x54\137\x55\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\74\75\56\51\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\x46", preg_replace("\57\136\x28\77\x3a\x25\62\x46\51\52\50\56\52\x3f\x29\x28\x3f\x3a\45\62\106\x29\52\44\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\160"), $yykkewcosaecgqyg)) { goto mmesoisgqucowwms; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg))) { goto sueeqeioeiwkscao; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\x65\x73\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); sueeqeioeiwkscao: goto uieuouugckwokske; mmesoisgqucowwms: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\145\x73\x73" => true, "\160\141\164\x68" => $oqwuasygwcckkios]); uieuouugckwokske: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; gysmigyakgaakeoy: } kmcygqkmwcgwamkw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\x65\x73\163" => false, "\x70\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\150\x70"]); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\x73\x73" => true, "\x70\x61\164\x68" => $oqwuasygwcckkios]); uauuoyigkmqoasaq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\145\x63\x74\x5f\143\157\x6f\153\151\145\163"); if (!$osqkgokmuiasuukg) { goto kmwwqgiacsoksgcy; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; kmwwqgiacsoksgcy: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\156\157\x72\145\144\x5f\165\162\154\163"))) { goto akieeaeqiwugimie; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; akieeaeqiwugimie: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\150\x65\x5f\x6d\x61\x6e\x64\x61\x74\x6f\x72\x79\137\143\157\157\x6b\151\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto ugqucegcucyyayga; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; ugqucegcucyyayga: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\x62\x75\x67\137\x6d\157\x64\145"); } }
