<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb6169562a0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Cache extends Common { public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto wucacaegysmiusai; } parent::__construct(); $this->iemaakgqgqosiecm(); wucacaegysmiusai: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\x6f\155\x6d\x65\156\164\x5f\143\x6f\x6f\x6b\x69\145\x5f\154\151\146\145\x74\x69\x6d\145", [$this, "\141\141\143\147\x75\x69\x71\x6b\x67\171\x79\x69\x6d\171\x67\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\x72\x6f\x6e\137\x65\166\x65\156\x74\x73"), [$this, "\x75\161\145\x6d\x67\x61\171\167\x63\141\147\171\167\x6d\x79\141"])->cecaguuoecmccuse("\146\x69\x6c\145\163\171\163\x74\x65\x6d\137\x72\x65\161\165\x69\162\x65\x5f\x64\x69\162\145\x63\x74\157\162\151\x65\163", [$this, "\151\x77\165\x71\x67\x79\x67\x6d\153\x63\x73\151\x61\153\147\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\143\157\156\x66\151\147\x75\162\141\x74\x69\157\x6e\163"), [$this, "\x6d\x6b\x6f\x73\x79\163\165\x79\165\x6f\171\161\x6b\x73\x71\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\143\x61\143\x68\145\137\161\165\145\x72\x79\x5f\163\x74\x72\x69\x6e\x67\x73"), [$this, "\x65\153\x61\x79\x61\x63\145\x6b\x73\x79\x79\171\x6f\x61\x79\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x69\x73\137\x6f\x70\164\151\155\151\172\x65\x64"), [$this, "\x77\167\x73\x79\x61\155\153\x6b\x79\141\165\167\x73\x65\171\147"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\x63\x61\x6e\x5f\x70\x72\145\154\x6f\141\144"), [$this, "\x79\x73\165\x69\x71\x6b\147\x79\143\155\x61\x67\x71\161\171\x75"], 10, 2); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\x5f\137\103\101\103\x48\105\x5f\137\120\101\124\x48")) { goto eeomcmuiqwgwwuqk; } $this->syiuacooagmooima("\x63\141\143\150\x65\x2d\x70\x61\x74\150", __("\x43\x61\x63\x68\x65\x20\x50\x61\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto mseokuecmeoyoggk; eeomcmuiqwgwwuqk: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\120\124\111\x4d\x49\132\x41\124\111\x4f\x4e\137\x43\x41\103\110\x45\x5f\x50\101\x54\x48", "{$skacuygeqykiwiwy}\57\x6f\x70\x74\x2d\143\141\x63\x68\x65"); mseokuecmeoyoggk: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto uookseqsmsqgweuy; } WPCache::symcgieuakksimmu(); Advanced::symcgieuakksimmu(); uookseqsmsqgweuy: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); return $geyqgckicikewwke; } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\157\x70\164\x69\x6d\x69\x7a\x61\164\x69\x6f\156\x5f\160\x75\x72\x67\145\x5f\164\151\155\145\137\x65\x76\x65\156\x74"] = __("\x53\143\x68\145\x64\x75\154\145\x64\x20\x43\141\143\x68\145\x20\120\165\162\x67\x65", PR__MDL__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { static $ueicioocowkieeme; if (!$gkuksucqwuewkwws) { goto iigmgswcogqemgao; } $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\x75\162\154", $igqsaukqcqscimok); if (!is_string($eeamcawaiqocomwy)) { goto esgyqksmcukeuwyk; } $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $msimssikcguyqcac["\160\x61\x74\x68"] = trailingslashit($msimssikcguyqcac["\x70\141\164\150"]); if (!('' !== $msimssikcguyqcac["\x71\x75\145\162\171"])) { goto yeaqsiqgakskoykg; } $msimssikcguyqcac["\161\165\145\162\171"] = "\43" . $msimssikcguyqcac["\161\165\145\162\x79"] . "\x2f"; yeaqsiqgakskoykg: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\x6d\157\x62\151\154\x65") ? "\55\155\157\142\x69\154\145" : ''; $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\x4f\x50\124\111\x4d\111\132\101\x54\x49\117\116\x5f\103\x41\103\110\105\x5f\x50\101\124\110") . $msimssikcguyqcac["\150\x6f\163\164"] . strtolower($msimssikcguyqcac["\x70\141\x74\150"] . $msimssikcguyqcac["\x71\165\145\x72\171"]) . "\151\156\x64\145\170" . $iomcqougosimesoq . $ueicioocowkieeme . "\56\150\x74\155\x6c"; $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); esgyqksmcukeuwyk: iigmgswcogqemgao: return $gkuksucqwuewkwws; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\143\141\x63\x68\145\137\145\156\141\142\x6c\145"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x63\141\x63\x68\x65\137\143\157\155\x6d\x65\x6e\x74\x5f\143\157\x6f\153\x69\x65\137\154\x69\146\145\x74\151\155\145"), 3 * MINUTE_IN_SECONDS); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\x49\115\x49\x5a\101\x54\x49\117\x4e\x5f\103\x41\x43\110\105\x5f\120\101\124\x48"); $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\x4f\120\x54\111\x4d\x49\132\x41\x54\x49\117\x4e\x5f\x43\x4f\x4e\106\x49\x47\x5f\120\x41\124\x48"); return $msyoeiaqaaseqiaw; } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if (!$is_nginx) { goto ycaqooeeseougumo; } $kewscequsakouquq[] = "\161"; ycaqooeeseougumo: return $kewscequsakouquq; } }
