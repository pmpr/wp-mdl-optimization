<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d83b2421d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Notice; class Cache extends Common { public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto saiuoomgskwgyeya; } parent::__construct(); $this->iemaakgqgqosiecm(); saiuoomgskwgyeya: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\x6f\155\x6d\x65\x6e\164\137\143\157\157\153\151\x65\137\x6c\x69\146\145\x74\x69\155\145", [$this, "\141\141\143\x67\165\x69\161\153\147\x79\171\x69\x6d\x79\147\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\x72\x6f\x6e\137\x65\166\145\156\164\163"), [$this, "\165\x71\145\x6d\x67\141\x79\x77\x63\141\147\171\x77\155\x79\141"])->cecaguuoecmccuse("\x66\x69\154\x65\x73\x79\163\164\x65\155\x5f\x72\145\x71\x75\151\162\145\137\144\x69\x72\145\143\x74\x6f\162\151\145\163", [$this, "\151\x77\165\161\x67\171\147\155\153\143\x73\x69\141\x6b\147\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\x63\157\x6e\x66\151\147\165\162\141\x74\x69\x6f\x6e\x73"), [$this, "\155\153\x6f\163\171\x73\165\171\x75\x6f\x79\x71\153\x73\161\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x61\x63\150\145\x5f\161\x75\x65\162\171\x5f\163\x74\x72\x69\x6e\x67\x73"), [$this, "\145\153\141\x79\x61\x63\x65\153\x73\x79\171\171\157\x61\x79\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\151\x73\x5f\x6f\160\x74\151\155\151\172\x65\x64"), [$this, "\x77\167\x73\x79\141\155\153\x6b\171\141\165\x77\163\x65\x79\147"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x63\141\x6e\137\x70\x72\x65\154\157\x61\x64"), [$this, "\x79\163\165\x69\x71\x6b\x67\171\x63\x6d\x61\x67\x71\161\x79\165"], 10, 2); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\137\137\x43\x41\x43\x48\105\x5f\x5f\x50\x41\124\110")) { goto kuuawiosmkgqsscy; } $this->syiuacooagmooima("\143\x61\143\150\x65\x2d\160\141\x74\150", __("\103\x61\143\150\145\40\x50\141\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto kwocaqggwcksesce; kuuawiosmkgqsscy: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\x50\124\x49\115\111\x5a\x41\x54\111\x4f\x4e\x5f\x43\101\103\x48\x45\x5f\x50\101\124\x48", "{$skacuygeqykiwiwy}\57\x77\x70\55\x63\x61\143\150\x65"); kwocaqggwcksesce: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); if (!is_admin()) { goto momuweiasiwskekw; } WPCache::symcgieuakksimmu(); Advanced::symcgieuakksimmu(); momuweiasiwskekw: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); return $geyqgckicikewwke; } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\x6f\x70\x74\151\155\151\172\141\x74\x69\157\156\137\x70\x75\x72\147\145\x5f\x74\x69\x6d\145\x5f\x65\x76\x65\x6e\x74"] = __("\x53\143\150\x65\144\165\154\145\x64\40\103\141\143\x68\145\40\120\x75\162\147\145", PR__MDL__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { static $ueicioocowkieeme; if (!$gkuksucqwuewkwws) { goto aucwccaiqwsmyuaq; } $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\x75\x72\154", $igqsaukqcqscimok); if (!is_string($eeamcawaiqocomwy)) { goto bgakaasgwwygosyi; } $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $msimssikcguyqcac["\x70\141\164\150"] = trailingslashit($msimssikcguyqcac["\160\141\164\150"]); if (!('' !== $msimssikcguyqcac["\161\x75\145\x72\x79"])) { goto qaewauyekqucciyc; } $msimssikcguyqcac["\x71\x75\x65\162\x79"] = "\x23" . $msimssikcguyqcac["\161\x75\145\x72\x79"] . "\57"; qaewauyekqucciyc: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\x6d\x6f\142\x69\x6c\145") ? "\x2d\x6d\157\142\151\154\x65" : ''; $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\x49\115\111\x5a\x41\124\111\x4f\x4e\x5f\103\x41\x43\110\x45\x5f\120\x41\124\x48") . $msimssikcguyqcac["\x68\x6f\x73\x74"] . strtolower($msimssikcguyqcac["\160\141\x74\150"] . $msimssikcguyqcac["\x71\x75\x65\x72\171"]) . "\x69\x6e\144\145\x78" . $iomcqougosimesoq . $ueicioocowkieeme . "\x2e\x68\164\155\154"; $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); bgakaasgwwygosyi: aucwccaiqwsmyuaq: return $gkuksucqwuewkwws; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\143\141\x63\150\145\x5f\145\156\x61\x62\154\145"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\143\141\143\x68\145\137\x63\157\155\155\x65\x6e\x74\137\143\157\157\153\x69\145\x5f\154\151\146\x65\x74\151\x6d\145"), 3 * MINUTE_IN_SECONDS); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\x4d\111\x5a\101\124\x49\117\116\137\x43\101\103\x48\x45\x5f\120\101\124\x48"); $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\120\124\111\x4d\x49\x5a\101\x54\111\x4f\x4e\137\103\117\x4e\106\x49\107\137\120\x41\124\x48"); return $msyoeiaqaaseqiaw; } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if (!$is_nginx) { goto agyooskogigyayws; } $kewscequsakouquq[] = "\161"; agyooskogigyayws: return $kewscequsakouquq; } }
