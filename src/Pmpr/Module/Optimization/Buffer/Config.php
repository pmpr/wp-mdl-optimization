<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto uugiuqkesegaamqw; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\164\x68" => '', "\x73\145\x72\x76\145\162" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\x74\150"]); if (!(is_array($ywmkwiwkosakssii["\163\145\162\166\145\162"]) && $ywmkwiwkosakssii["\x73\145\162\166\145\x72"])) { goto seyygcwcaogkmaqe; } $this->server = $ywmkwiwkosakssii["\x73\145\162\166\145\162"]; seyygcwcaogkmaqe: uugiuqkesegaamqw: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto ykcmomsiayaymysm; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; ykcmomsiayaymysm: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto qoaawmmcqyacokws; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; qoaawmmcqyacokws: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwyeycaywowwiquu; } return $this->eecucukcqkqysiau(__FUNCTION__); uwyeycaywowwiquu: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\143\143\x65\163\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\x63\x65\163\x73"])) { goto cwmuqmoeauqcewoy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cwmuqmoeauqcewoy: if (!file_exists($oqwuasygwcckkios["\x70\x61\164\150"])) { goto eiecgqokmuekaesc; } include $oqwuasygwcckkios["\x70\141\x74\x68"]; eiecgqokmuekaesc: $uiewakwqscemywuo = ["\144\x65\142\x75\x67\137\x6d\x6f\x64\145" => 0, "\x63\x61\143\150\x65\137\167\145\x62\x70" => 0, "\x63\x6f\157\153\x69\145\137\150\141\163\x68" => '', "\x63\141\143\150\145\137\145\x6e\x61\x62\154\145" => 1, "\151\x67\x6e\157\162\x65\144\137\165\162\154\163" => [], "\162\145\x6a\145\143\164\137\x63\157\x6f\x6b\x69\145\x73" => '', "\x73\145\143\x72\x65\164\x5f\143\x61\143\x68\x65\x5f\153\145\171" => '', "\x6c\x6f\x67\147\x65\144\x5f\x69\x6e\x5f\x63\x6f\x6f\x6b\151\x65" => '', "\x63\157\x6d\x6d\x6f\156\x5f\143\x61\x63\x68\145\x5f\x6c\157\x67\x67\x65\144\x5f\x75\x73\145\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto kcwgiwimgqesukqu; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; kcwgiwimgqesukqu: ceosmkqgqgwsowwg: } ggsugekocmsukuci: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wicuauokauykwoeu; } return $this->eecucukcqkqysiau(__FUNCTION__); wicuauokauykwoeu: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\x54\124\120\137\x48\x4f\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\144\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gcecieuocqawmgci; } return $this->eecucukcqkqysiau(__FUNCTION__); gcecieuocqawmgci: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto cciakcwuweqmcose; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\123\x54\x5f\125\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\x3c\75\x2e\x29\x2f\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\57\136\50\77\72\x25\62\106\51\x2a\50\x2e\x2a\x3f\x29\x28\x3f\72\x25\62\x46\51\x2a\44\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70"), $yykkewcosaecgqyg)) { goto kkckyqmcyussauma; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\x70"), $yykkewcosaecgqyg))) { goto gqeoaceyoiicoaec; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\x65\x73\163" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); gqeoaceyoiicoaec: goto ikukqooiowqywyqo; kkckyqmcyussauma: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\x65\x73\x73" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); ikukqooiowqywyqo: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; oksqsucimimsswcg: } msmmiaumiasmsiog: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\x65\x73\x73" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\x68\x70"]); goto uckusgwkoycmkeam; cciakcwuweqmcose: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\x73" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); uckusgwkoycmkeam: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\152\x65\x63\x74\137\143\157\157\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto gscyiqmmegqmqcoe; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; gscyiqmmegqmqcoe: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\x6e\157\x72\145\144\137\x75\162\154\x73"))) { goto mieoguuqiwqioeqa; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; mieoguuqiwqioeqa: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\x63\x68\145\137\x6d\141\156\144\x61\164\x6f\x72\171\137\x63\x6f\x6f\153\151\x65\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto qosswumywsaeyqus; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qosswumywsaeyqus: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\x65\x62\x75\x67\x5f\155\157\144\145"); } }
