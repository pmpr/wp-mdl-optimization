<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto miyqyeiwquwsacsm; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\x74\x68" => '', "\163\x65\x72\x76\145\x72" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\164\x68"]); if (!(is_array($ywmkwiwkosakssii["\163\145\162\x76\x65\162"]) && $ywmkwiwkosakssii["\163\145\162\x76\145\x72"])) { goto qkcyqocqqwmqgqww; } $this->server = $ywmkwiwkosakssii["\163\x65\162\x76\x65\162"]; qkcyqocqqwmqgqww: miyqyeiwquwsacsm: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto eegqyykygiccaoeo; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; eegqyykygiccaoeo: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ywqgcegomwaiuquc; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ywqgcegomwaiuquc: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wmmggowmigekyoso; } return $this->eecucukcqkqysiau(__FUNCTION__); wmmggowmigekyoso: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\143\145\x73\163"]) || !$oqwuasygwcckkios["\163\x75\x63\x63\x65\163\x73"])) { goto soqqemyioggmoakg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); soqqemyioggmoakg: if (!file_exists($oqwuasygwcckkios["\160\x61\164\x68"])) { goto acaqummmoyiemqss; } include $oqwuasygwcckkios["\x70\141\164\150"]; acaqummmoyiemqss: $uiewakwqscemywuo = ["\x64\145\x62\165\x67\x5f\155\157\x64\145" => 0, "\143\x61\143\x68\145\137\167\x65\x62\160" => 0, "\143\x6f\157\x6b\x69\145\x5f\150\x61\163\x68" => '', "\x63\141\x63\x68\x65\x5f\x65\x6e\x61\142\x6c\x65" => 1, "\151\x67\x6e\x6f\162\145\144\137\165\x72\154\x73" => [], "\x72\145\x6a\x65\143\164\137\143\x6f\x6f\x6b\151\x65\163" => '', "\163\x65\x63\x72\145\x74\x5f\143\x61\x63\150\x65\x5f\153\145\171" => '', "\154\157\147\x67\145\144\137\151\x6e\x5f\143\x6f\x6f\x6b\151\145" => '', "\x63\157\x6d\x6d\157\156\137\x63\x61\143\x68\x65\137\154\157\147\x67\145\144\x5f\165\x73\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto oqugqwcyomiaaoqu; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; oqugqwcyomiaaoqu: eeqesooyqagwawae: } suswcqoyyqkkquuo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto foeeqckqsyockkak; } return $this->eecucukcqkqysiau(__FUNCTION__); foeeqckqsyockkak: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x48\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\x64\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iekumemscwieugqw; } return $this->eecucukcqkqysiau(__FUNCTION__); iekumemscwieugqw: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto uqqaiagaeqgqgaiy; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\x51\x55\105\x53\124\137\125\x52\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\174\x28\x3f\74\75\56\51\x2f\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\x2f\x5e\50\x3f\x3a\45\x32\x46\x29\x2a\x28\x2e\52\77\x29\50\77\x3a\45\62\106\x29\52\x24\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { goto qicwaskssogcokgm; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg))) { goto usquiuuyiyqaeyiu; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\163\163" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); usquiuuyiyqaeyiu: goto uguigkcmukuouway; qicwaskssogcokgm: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); uguigkcmukuouway: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; kymkucucyeoeikim: } hoeeyiowekaeemko: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\145\163\x73" => false, "\x70\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\x70\150\x70"]); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\x65\163\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); esuiysskoweawsue: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\145\x63\164\137\x63\157\157\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto gaomwagkcciesyqy; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; gaomwagkcciesyqy: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\147\156\157\x72\145\x64\x5f\x75\x72\154\x73"); if (!$osqkgokmuiasuukg) { goto aegysmeecgcgayyw; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; aegysmeecgcgayyw: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\150\145\x5f\155\x61\x6e\144\x61\x74\x6f\162\171\137\143\x6f\157\153\x69\x65\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto suqkuqygkkgwyaie; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; suqkuqygkkgwyaie: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\x5f\x6d\157\x64\145"); } }
