<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\117\x50\124\x49\115\111\132\101\124\111\117\116\x5f\x43\x41\x43\110\105\137\120\101\124\110", false); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto cwmuqmoeauqcewoy; } $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); cwmuqmoeauqcewoy: if (!is_string($mkomwsiykqigmqca)) { goto eiecgqokmuekaesc; } $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); eiecgqokmuekaesc: return $mkomwsiykqigmqca; } public static function ymqgwsmwqswgsgeg() { global $is_apache; $skacuygeqykiwiwy = self::gskqygiceygcguyo(); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto ggsugekocmsukuci; } $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); ggsugekocmsukuci: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\57\151\x6e\x64\145\x78\x2e\150\x74\x6d\x6c")) { goto ceosmkqgqgwsowwg; } $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\x2f\151\156\x64\x65\x78\56\x68\x74\x6d\154"); ceosmkqgqgwsowwg: if (!$is_apache) { goto wicuauokauykwoeu; } $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\57\x2e\150\164\141\143\143\145\x73\x73"; if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto kcwgiwimgqesukqu; } $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\x3c\111\x66\115\157\x64\x75\x6c\145\40\x6d\157\144\137\x61\165\164\x6f\151\x6e\x64\x65\170\56\x63\76\12\x4f\160\164\151\x6f\x6e\163\40\x2d\111\156\x64\145\x78\x65\x73\12\x3c\x2f\111\x66\115\157\x64\165\x6c\145\76"); kcwgiwimgqesukqu: wicuauokauykwoeu: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { static $eewgemuwouukmwgk = []; if (!(true === $iuomscuiswckwcoe)) { goto gcecieuocqawmgci; } $eewgemuwouukmwgk = []; return []; gcecieuocqawmgci: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto msmmiaumiasmsiog; } return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; msmmiaumiasmsiog: if (!empty($skacuygeqykiwiwy)) { goto oksqsucimimsswcg; } $skacuygeqykiwiwy = self::gskqygiceygcguyo(); oksqsucimimsswcg: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\45\61\44\x73\45\x32\44\163\x28\x2e\52\51\x2f\151", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); kkckyqmcyussauma: } gqeoaceyoiicoaec: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; } }
