<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c003b2579d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\117\x50\x54\111\x4d\111\x5a\x41\x54\111\x4f\x4e\137\x43\101\103\110\105\x5f\120\101\x54\x48", false); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto eceeoiwuagocweus; } $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); eceeoiwuagocweus: if (!is_string($mkomwsiykqigmqca)) { goto aeockieewgkequae; } $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); aeockieewgkequae: return $mkomwsiykqigmqca; } public static function ymqgwsmwqswgsgeg() { global $is_apache; $skacuygeqykiwiwy = self::gskqygiceygcguyo(); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto omqyuuomwywmqeiq; } $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); omqyuuomwywmqeiq: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\57\151\156\x64\x65\x78\56\x68\164\155\154")) { goto oysyuiqmsokoykaq; } $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\x2f\151\x6e\x64\x65\170\56\150\x74\x6d\x6c"); oysyuiqmsokoykaq: if (!$is_apache) { goto eomqeimoequmagum; } $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\x2f\x2e\x68\164\141\x63\143\145\163\163"; if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto misiasooemyskoay; } $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\x3c\x49\x66\115\x6f\x64\x75\x6c\145\40\155\x6f\144\x5f\141\x75\x74\x6f\x69\x6e\x64\145\x78\x2e\143\x3e\xa\117\x70\x74\x69\x6f\x6e\163\x20\55\111\x6e\x64\145\x78\145\x73\12\74\57\x49\x66\x4d\157\144\x75\x6c\x65\76"); misiasooemyskoay: eomqeimoequmagum: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { static $eewgemuwouukmwgk = []; if (!(true === $iuomscuiswckwcoe)) { goto cqkyumayoemqsueu; } $eewgemuwouukmwgk = []; return []; cqkyumayoemqsueu: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto ksqmcugkcmsooeaw; } return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; ksqmcugkcmsooeaw: if (!empty($skacuygeqykiwiwy)) { goto sukcyismwageqgok; } $skacuygeqykiwiwy = self::gskqygiceygcguyo(); sukcyismwageqgok: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\45\x31\44\163\x25\x32\x24\x73\x28\56\52\51\57\x69", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); qykcggwgkweasuii: } ukmgwuiqwgyiouec: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; } }
