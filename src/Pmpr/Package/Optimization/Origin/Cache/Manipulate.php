<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { goto rayeowssukccumsa; rayeowssukccumsa: $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\117\120\124\111\115\111\x5a\x41\x54\111\x4f\x4e\137\x43\x41\103\x48\x45\137\x50\101\124\x48", false); goto aumiwewkmkcyqsic; aumiwewkmkcyqsic: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto ukwaqucywiqsqcmw; meacamomoigoocks: $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); goto wmgmwseuygieasiq; ukwaqucywiqsqcmw: if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto kwocuyyugaqsicqy; } goto waqwicwqkgsgaosm; uyesmwqkkaeqyqsw: if (!is_string($mkomwsiykqigmqca)) { goto ckcsasciyamuyeak; } goto meacamomoigoocks; wmgmwseuygieasiq: ckcsasciyamuyeak: goto woimcikoqmikiiuo; kmgimueiaqoamoiq: kwocuyyugaqsicqy: goto uyesmwqkkaeqyqsw; waqwicwqkgsgaosm: $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); goto kmgimueiaqoamoiq; woimcikoqmikiiuo: return $mkomwsiykqigmqca; goto yygiyieeyuuqucke; yygiyieeyuuqucke: } public static function ymqgwsmwqswgsgeg() { goto osuwwuwykkyioics; quycsusswssyiqek: wycaemkqgqoqamga: goto cmogamoiwugoaaoo; qayscesoyiskoeko: $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); goto ymaiyayeueqekkqu; kycuyyawyykwayum: if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto ksaoceiosgkgkeua; } goto qayscesoyiskoeko; uwcgosckamuosimw: ieaumiwogamciyeq: goto quycsusswssyiqek; yamoqmeywqamiyee: if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto ieaumiwogamciyeq; } goto eisoouawyymkasou; eisoouawyymkasou: $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); goto gsscqquysycuswow; aimoueqqomiogmwe: $skacuygeqykiwiwy = self::gskqygiceygcguyo(); goto osgggiswqmmcauic; emwgmewoyckawiaa: if (!$is_apache) { goto wycaemkqgqoqamga; } goto ouiwcwgymiycmesy; yumwmakewcuceeeq: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\x2f\x69\156\x64\x65\x78\56\150\164\155\x6c")) { goto wesmogqcyeemwqaq; } goto iksqmycekaokseuk; yoikmmqgsuecwqse: wesmogqcyeemwqaq: goto emwgmewoyckawiaa; osgggiswqmmcauic: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto kycuyyawyykwayum; ouiwcwgymiycmesy: $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\x2f\56\150\164\141\143\x63\145\163\163"; goto yamoqmeywqamiyee; osuwwuwykkyioics: global $is_apache; goto aimoueqqomiogmwe; gsscqquysycuswow: $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\74\x49\146\115\x6f\144\x75\154\x65\x20\155\x6f\144\137\x61\x75\164\x6f\151\x6e\x64\x65\170\x2e\143\76\12\117\160\x74\x69\x6f\156\163\40\x2d\111\156\144\x65\170\x65\x73\12\74\x2f\111\x66\x4d\157\144\x75\x6c\145\76"); goto uwcgosckamuosimw; ymaiyayeueqekkqu: ksaoceiosgkgkeua: goto yumwmakewcuceeeq; iksqmycekaokseuk: $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\57\151\156\x64\145\x78\56\150\164\155\x6c"); goto yoikmmqgsuecwqse; cmogamoiwugoaaoo: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { goto swuwwcumqwckimwy; ieacisiumswqewsq: $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; goto kskqckgmygiwqucm; swuwwcumqwckimwy: static $eewgemuwouukmwgk = []; goto qsqwywcesyquykqq; gmskkukiiwweocwi: return []; goto uqamuckwuksquqia; cskesgswygwiqoim: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } goto guyeaeiscmgksacs; syqysaawasmesiqs: iayqwwsmsuwaykyw: goto yeiwocswikqkwyew; uyqsoayeaaumkace: $skacuygeqykiwiwy = self::gskqygiceygcguyo(); goto ooayswecmkkqgskg; mckkqgseimcgkcgu: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; goto syqysaawasmesiqs; kskqckgmygiwqucm: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); uyaweoaaqsagsqyi: } goto sucgyiymguwououy; qsqwywcesyquykqq: if (!(true === $iuomscuiswckwcoe)) { goto ycuksimueyoeugmi; } goto kqscgsuaugsiwiwi; sucgyiymguwououy: scioecswaikeacmy: goto kcqewweqqqmekuwi; gukawqgamokyceki: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto iayqwwsmsuwaykyw; } goto mckkqgseimcgkcgu; kcqewweqqqmekuwi: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; goto qkueegaowuyiimgw; guyeaeiscmgksacs: $ucccueqywigcukcc = sprintf("\57\x25\x31\44\x73\x25\x32\x24\x73\50\56\x2a\x29\57\151", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); goto keaaqaugoyquwsos; yeiwocswikqkwyew: if (!empty($skacuygeqykiwiwy)) { goto gaqweioagqyciyaw; } goto uyqsoayeaaumkace; uqamuckwuksquqia: ycuksimueyoeugmi: goto gukawqgamokyceki; kqscgsuaugsiwiwi: $eewgemuwouukmwgk = []; goto gmskkukiiwweocwi; ooayswecmkkqgskg: gaqweioagqyciyaw: goto cskesgswygwiqoim; keaaqaugoyquwsos: try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } goto ieacisiumswqewsq; qkueegaowuyiimgw: } }
