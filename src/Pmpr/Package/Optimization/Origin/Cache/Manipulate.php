<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\117\120\x54\111\x4d\111\132\x41\x54\111\117\116\137\103\x41\103\x48\x45\137\120\x41\x54\x48", false); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto ksqmcugkcmsooeaw; } $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); ksqmcugkcmsooeaw: if (!is_string($mkomwsiykqigmqca)) { goto sukcyismwageqgok; } $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); sukcyismwageqgok: return $mkomwsiykqigmqca; } public static function ymqgwsmwqswgsgeg() { global $is_apache; $skacuygeqykiwiwy = self::gskqygiceygcguyo(); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto ukmgwuiqwgyiouec; } $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); ukmgwuiqwgyiouec: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\57\151\x6e\x64\145\x78\56\150\x74\x6d\x6c")) { goto qykcggwgkweasuii; } $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\x2f\x69\156\144\145\170\x2e\150\164\155\154"); qykcggwgkweasuii: if (!$is_apache) { goto wasuquysysmqyegg; } $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\x2f\56\x68\x74\141\x63\x63\145\163\163"; if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto geoiegikocwmwosi; } $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\x3c\111\x66\115\x6f\x64\x75\154\x65\x20\155\x6f\144\137\141\165\x74\x6f\151\156\x64\x65\x78\x2e\x63\76\12\x4f\160\x74\151\x6f\x6e\x73\x20\55\111\156\x64\x65\170\x65\x73\xa\x3c\57\111\x66\115\x6f\144\x75\x6c\145\x3e"); geoiegikocwmwosi: wasuquysysmqyegg: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { static $eewgemuwouukmwgk = []; if (!(true === $iuomscuiswckwcoe)) { goto eqsuaywswuesuika; } $eewgemuwouukmwgk = []; return []; eqsuaywswuesuika: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto okawiaowosqickgq; } return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; okawiaowosqickgq: if (!empty($skacuygeqykiwiwy)) { goto ogciikaecauiwgyk; } $skacuygeqykiwiwy = self::gskqygiceygcguyo(); ogciikaecauiwgyk: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\45\x31\x24\x73\45\62\44\x73\x28\x2e\x2a\51\57\x69", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); oyeygeykqwcqoeic: } meiqywmwuoogckss: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; } }
