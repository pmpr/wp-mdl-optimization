<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6318774774141             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\x6f\160\164\151\155\x69\172\x61\x74\151\157\x6e\137\160\165\162\147\x65\137\x74\x69\155\x65\137\145\166\145\x6e\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\165\167\165\147\141\x69\161\171\x77\x6d\x73\x65\x6b\163\x71\155"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto qosswumywsaeyqus; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\x6f\x70\164\x5f\145\170\x70\151\x72\145\144\x5f\x63\141\x63\x68\x65\137\143\x72\157\x6e\137\151\156\x74\x65\162\x76\x61\154", static::swmaucwuymuqokiu); qosswumywsaeyqus: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto icoiqskygugkgmkm; } goto maguoggkqamaiuag; icoiqskygugkgmkm: return false; maguoggkqamaiuag: } swicauyqusmgeccu: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\x40\136" . preg_quote($qogsmwakwacwqogk["\x68\x6f\x73\164"], "\x40") . "\100"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\141\164\x68"], "\57"); if (!$mcowwqgmkuemoumu) { goto cuayqmasemsqsume; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto kocaieyauyiqmyiy; } return false; kocaieyauyiqmyiy: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto gcqssckowmywoesw; } return false; gcqssckowmywoesw: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto eekkcooqswqouoei; } return false; eekkcooqswqouoei: return true; }); cuayqmasemsqsume: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto geyiosucqswaeasw; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\x61\143\x68\145\x5f\x61\165\164\x6f\155\x61\x74\151\x63\137\143\x61\143\150\145\137\x70\x75\162\147\x65\x5f\x75\x72\154\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto igmawmwssyskqqag; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; igmawmwssyskqqag: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\x73\x5f\x73\164\162\x69\x6e\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto omuemegmkesqgwys; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\141\x63\x68\145\x5f\142\x65\146\157\162\145\x5f\x61\165\164\157\x6d\141\164\151\143\x5f\x63\141\143\x68\x65\x5f\x70\x75\x72\147\x65\137\144\151\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto sgkqgucguyccaaki; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\160\x61\164\150"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto gqaqamewqeaqwcia; } $oicyaaqouscyiycq[] = ["\150\157\155\x65\137\x75\x72\154" => $eeamcawaiqocomwy, "\150\157\155\x65\137\160\x61\164\150" => $qaisqkcgsgakqykq, "\154\157\147\147\145\144\137\151\156" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\157\163\164"], "\x66\151\154\x65\x73" => $ccykqsgoygiaowac]; gqaqamewqeaqwcia: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto okuqsqaiwwiigmyu; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); okuqsqaiwwiigmyu: gaskcgoeywuyukke: } ewsigoeswimiueqe: if (!$oicyaaqouscyiycq) { goto ksiwgckusukisueg; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); ksiwgckusukisueg: sgkqgucguyccaaki: $ywmkwiwkosakssii = ["\165\x72\154" => $eeamcawaiqocomwy, "\154\151\146\x65\x73\x70\141\x6e" => $wumscqwikueeogok, "\x66\x69\x6c\x65\137\x61\x67\x65\x5f\154\x69\155\x69\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\141\143\150\145\137\x61\146\164\145\162\x5f\141\165\x74\x6f\x6d\141\164\x69\x63\137\143\141\143\x68\145\x5f\160\165\x72\147\145\137\x64\151\162", $oicyaaqouscyiycq, $ywmkwiwkosakssii); eussqkkimciywios: } iomwkkieqcswkkaw: $ywmkwiwkosakssii = ["\x6c\x69\x66\145\x73\x70\x61\x6e" => $wumscqwikueeogok, "\146\151\154\x65\x5f\141\147\145\137\x6c\151\155\x69\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\x61\x63\x68\145\x5f\x61\x66\164\x65\x72\137\141\165\x74\x6f\155\x61\164\151\143\137\143\x61\x63\150\145\137\160\x75\162\x67\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); omuemegmkesqgwys: geyiosucqswaeasw: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto ccgsycueagwegqeu; } goto qmqmskywcgiqgygm; ccgsycueagwegqeu: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto ycecaauekkiqacuu; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto qmguoqeawegcoeoa; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto gmeiuoeewucukque; } goto qmqmskywcgiqgygm; gmeiuoeewucukque: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto sayqggaieocmskko; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; sayqggaieocmskko: qmguoqeawegcoeoa: goto ceaamccscgcmqgka; ycecaauekkiqacuu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); ceaamccscgcmqgka: qmqmskywcgiqgygm: } cmsiuimsiycomyay: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto omumkeywqqogwwue; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); omumkeywqqogwwue: return $meisgakuwcmwosms; } }
