<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; class Cache extends Common { public function __construct() { goto eauwuykuucsasmyi; ckkceskqiksqckms: $this->iemaakgqgqosiecm(); goto cqssqgewmeeiyqss; eauwuykuucsasmyi: if (!$this->cyowaaeywssoooeo()) { goto ikwqycaoqgesokkm; } goto iqyocsmgummccuso; iqyocsmgummccuso: parent::__construct(); goto ckkceskqiksqckms; cqssqgewmeeiyqss: ikwqycaoqgesokkm: goto yuuqgqawgsycgggg; yuuqgqawgsycgggg: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\157\x70\164\x69\155\151\172\x61\x74\151\x6f\x6e\x5f\143\162\x6f\156\x5f\145\166\145\156\x74\163", [$this, "\x75\x71\x65\x6d\x67\141\x79\167\x63\141\147\171\x77\155\x79\141"])->cecaguuoecmccuse("\x6f\160\x74\151\x6d\151\x7a\141\x74\151\x6f\156\x5f\151\x73\137\157\160\164\151\155\151\172\145\x64", [$this, "\x77\x77\x73\x79\x61\x6d\x6b\153\171\x61\x75\167\163\x65\171\x67"], 2)->cecaguuoecmccuse("\x63\x6f\x6d\155\x65\156\164\x5f\143\157\x6f\x6b\151\x65\137\x6c\151\146\145\x74\151\x6d\145", [$this, "\141\x61\x63\147\x75\x69\161\153\x67\171\x79\151\155\x79\x67\153"])->cecaguuoecmccuse("\x6f\x70\164\151\x6d\x69\x7a\141\164\x69\x6f\156\x5f\x63\157\156\x66\151\x67\x75\x72\141\x74\x69\x6f\x6e\163", [$this, "\x6d\x6b\x6f\x73\171\163\165\x79\x75\x6f\x79\x71\x6b\x73\161\x6f"])->cecaguuoecmccuse("\x66\151\154\x65\x73\171\x73\164\x65\x6d\137\x72\145\x71\165\x69\x72\x65\x5f\x64\151\162\x65\x63\x74\x6f\x72\x69\x65\x73", [$this, "\x69\x77\165\x71\147\171\x67\x6d\153\x63\163\x69\x61\153\147\x6b"])->cecaguuoecmccuse("\x6f\160\x74\x69\x6d\151\172\141\164\x69\157\156\x5f\x63\141\156\137\x70\162\x65\154\157\141\144", [$this, "\x79\x73\x75\x69\161\153\x67\x79\x63\155\141\x67\161\161\171\x75"], 2)->cecaguuoecmccuse("\x6f\x70\x74\151\x6d\x69\172\141\x74\x69\x6f\156\x5f\x63\x61\x63\x68\x65\x5f\161\x75\145\162\x79\x5f\163\164\162\x69\x6e\x67\x73", [$this, "\x65\153\141\x79\x61\143\x65\153\163\171\171\171\x6f\141\x79\x65"]); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { goto mwyiogaoucouuymy; gmcgckcqceckmacq: goto aokygwoioiokcaoc; goto qmuyumaoyqiiqqki; ycyigosuicckquco: return $ksaameoqigiaoigg; goto ygawggoccwiqyaqy; mwyiogaoucouuymy: $ksaameoqigiaoigg = false; goto aossqywwekqqikqg; omkocsuyieykumsw: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\x50\x54\x49\x4d\x49\x5a\101\124\x49\117\x4e\137\x43\101\x43\110\x45\x5f\120\101\124\x48", "{$skacuygeqykiwiwy}\57\x77\160\55\x63\141\143\150\x65"); goto iwoueqiswogoyeuk; qmuyumaoyqiiqqki: kmsoucccawegguwq: goto omkocsuyieykumsw; okimiwmewgssqemo: Notice::ymqcyaqqcyuicwqu("\157\160\164\151\155\151\x7a\x61\164\x69\157\156\55\143\x61\143\x68\x65\55\160\x61\x74\x68", __("\117\160\x74\x69\155\x69\x7a\x61\164\x69\157\x6e\x20\103\x61\x63\x68\x65\40\120\141\164\150", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto gmcgckcqceckmacq; iwoueqiswogoyeuk: aokygwoioiokcaoc: goto ycyigosuicckquco; aossqywwekqqikqg: if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms(self::PR__CACHE__PATH)) { goto kmsoucccawegguwq; } goto okimiwmewgssqemo; ygawggoccwiqyaqy: } public function iemaakgqgqosiecm() { goto umuseoycuocwmkwq; aakuioygmuqkiueu: WPCache::symcgieuakksimmu(); goto sceaocsemeoiyuge; cygwqimwgaceaogu: if (!is_admin()) { goto wiiyoqsikgcqqygi; } goto aakuioygmuqkiueu; umuseoycuocwmkwq: Purge::symcgieuakksimmu(); goto cygwqimwgaceaogu; sceaocsemeoiyuge: Advanced::symcgieuakksimmu(); goto sugmesswcyyuwame; sugmesswcyyuwame: wiiyoqsikgcqqygi: goto kgkuyiqwqsyqques; kgkuyiqwqsyqques: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { goto deigmocesygywwwq; rkqioecyciickiga: return $geyqgckicikewwke; goto hkcqsqgccmogcyim; awcawqaigquqqywo: $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); goto rkqioecyciickiga; deigmocesygywwwq: $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); goto awcawqaigquqqywo; hkcqsqgccmogcyim: } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\x6f\x70\164\x69\x6d\151\172\141\164\x69\157\156\137\x70\x75\x72\x67\x65\137\x74\151\155\145\137\x65\166\145\x6e\x74"] = __("\123\x63\150\x65\x64\x75\154\145\x64\x20\x43\141\143\150\x65\x20\120\165\162\147\145", PR__PKG__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { goto ygasycygmaumayys; cwcegeayeuuqccgs: if (!$gkuksucqwuewkwws) { goto omusesiokggskasg; } goto egcsgekkgiikcmsc; aoyasgammyaegmqk: $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); goto wwagacmausicisuq; yoggkcicgggcyesq: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\x6d\x6f\x62\151\154\x65") ? "\55\x6d\x6f\142\151\154\x65" : ''; goto uqucqgwcgoqomyuk; igkaiscayyickgkg: mkqikqqsikqoqgwy: goto cmkiiseesikwqgou; wwagacmausicisuq: $msimssikcguyqcac["\160\x61\x74\x68"] = trailingslashit($msimssikcguyqcac["\160\141\x74\x68"]); goto omgqccwciyuekagc; uqucqgwcgoqomyuk: $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\x4f\120\x54\111\x4d\111\x5a\101\124\x49\117\x4e\x5f\103\101\103\x48\105\137\120\x41\x54\x48") . $msimssikcguyqcac["\150\x6f\x73\x74"] . strtolower($msimssikcguyqcac["\x70\141\x74\150"] . $msimssikcguyqcac["\161\x75\x65\162\x79"]) . "\151\x6e\144\x65\x78" . $iomcqougosimesoq . $ueicioocowkieeme . "\x2e\x68\x74\x6d\154"; goto eacucucugqmmwees; omgqccwciyuekagc: if (!('' !== $msimssikcguyqcac["\161\165\145\x72\x79"])) { goto egukkoceuuaqqwqu; } goto wuiecqogyoemkmyo; egcsgekkgiikcmsc: $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\165\162\x6c", $igqsaukqcqscimok); goto somiowsyicsqgggg; ygasycygmaumayys: static $ueicioocowkieeme; goto cwcegeayeuuqccgs; nmkyycyeioimqmcc: egukkoceuuaqqwqu: goto yoggkcicgggcyesq; cmkiiseesikwqgou: omusesiokggskasg: goto kwyiqscekoommuog; eacucucugqmmwees: $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); goto igkaiscayyickgkg; wuiecqogyoemkmyo: $msimssikcguyqcac["\161\x75\145\162\x79"] = "\43" . $msimssikcguyqcac["\x71\x75\145\162\171"] . "\57"; goto nmkyycyeioimqmcc; kwyiqscekoommuog: return $gkuksucqwuewkwws; goto geuasysqogwouqaa; somiowsyicsqgggg: if (!is_string($eeamcawaiqocomwy)) { goto mkqikqqsikqoqgwy; } goto aoyasgammyaegmqk; geuasysqogwouqaa: } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\x63\x61\143\150\145\x5f\x65\x6e\x61\142\x6c\145"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { $uagwomscgeccywsq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\141\143\x68\x65\x5f\x63\x6f\x6d\x6d\145\x6e\164\137\143\x6f\157\x6b\x69\145\x5f\154\x69\x66\145\x74\x69\x6d\x65"), 3 * MINUTE_IN_SECONDS); return $uagwomscgeccywsq; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) { goto uwoyauwaiqakumuy; aaiwsawyuaucyeas: return $msyoeiaqaaseqiaw; goto ecoikiciouuikmgs; yauywgkiwqgwmoge: $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\120\124\x49\115\x49\x5a\101\x54\x49\x4f\x4e\137\103\x4f\x4e\x46\x49\107\x5f\120\x41\x54\x48"); goto aaiwsawyuaucyeas; uwoyauwaiqakumuy: $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\x50\124\111\115\111\132\x41\124\111\117\116\x5f\103\101\103\x48\105\137\120\x41\124\110"); goto yauywgkiwqgwmoge; ecoikiciouuikmgs: } public function ekayaceksyyyoaye($kewscequsakouquq) { goto cskuqsmksmimaewq; cskuqsmksmimaewq: global $is_nginx; goto macuoqyigoeqkkwa; awqyqyqeqkciygcg: yawqcawaywkgqkkq: goto eakqkewcgqyewkee; eakqkewcgqyewkee: return $kewscequsakouquq; goto ggmkcyyawgwomqmo; macuoqyigoeqkkwa: if (!$is_nginx) { goto yawqcawaywkgqkkq; } goto asgweagmgkwuaeey; asgweagmgkwuaeey: $kewscequsakouquq[] = "\x71"; goto awqyqyqeqkciygcg; ggmkcyyawgwomqmo: } }