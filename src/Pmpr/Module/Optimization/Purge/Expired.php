<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631839907f5b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\x6f\160\x74\151\155\151\x7a\x61\164\151\157\156\x5f\x70\x75\162\147\x65\x5f\x74\x69\155\145\137\145\166\145\156\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\165\x77\165\x67\141\151\161\x79\x77\x6d\x73\x65\153\163\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto qosswumywsaeyqus; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\x70\164\x5f\x65\x78\x70\151\x72\145\144\137\143\x61\143\x68\x65\137\x63\162\x6f\156\137\x69\x6e\x74\145\162\x76\x61\x6c", static::swmaucwuymuqokiu); qosswumywsaeyqus: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto icoiqskygugkgmkm; } goto maguoggkqamaiuag; icoiqskygugkgmkm: return false; maguoggkqamaiuag: } swicauyqusmgeccu: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\100\136" . preg_quote($qogsmwakwacwqogk["\150\157\x73\x74"], "\100") . "\x40"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\x70\141\164\150"], "\57"); if (!$mcowwqgmkuemoumu) { goto cuayqmasemsqsume; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto kocaieyauyiqmyiy; } return false; kocaieyauyiqmyiy: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto gcqssckowmywoesw; } return false; gcqssckowmywoesw: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto eekkcooqswqouoei; } return false; eekkcooqswqouoei: return true; }); cuayqmasemsqsume: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto geyiosucqswaeasw; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\x61\x63\150\145\x5f\141\x75\164\157\155\141\164\151\143\137\143\x61\x63\x68\x65\x5f\x70\x75\162\147\145\x5f\165\162\x6c\x73", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto igmawmwssyskqqag; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; igmawmwssyskqqag: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\x73\x5f\163\164\162\151\x6e\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto omuemegmkesqgwys; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\141\143\150\x65\x5f\142\145\146\157\162\x65\x5f\141\165\x74\x6f\x6d\x61\x74\151\143\137\x63\x61\143\150\145\137\160\165\162\147\x65\x5f\x64\151\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto sgkqgucguyccaaki; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\x61\x74\x68"], "\57"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto gqaqamewqeaqwcia; } $oicyaaqouscyiycq[] = ["\x68\157\155\145\137\165\x72\x6c" => $eeamcawaiqocomwy, "\150\x6f\155\x65\x5f\x70\141\x74\150" => $qaisqkcgsgakqykq, "\x6c\x6f\147\147\x65\144\x5f\x69\x6e" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\157\x73\x74"], "\146\x69\154\x65\x73" => $ccykqsgoygiaowac]; gqaqamewqeaqwcia: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto okuqsqaiwwiigmyu; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); okuqsqaiwwiigmyu: gaskcgoeywuyukke: } ewsigoeswimiueqe: if (!$oicyaaqouscyiycq) { goto ksiwgckusukisueg; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); ksiwgckusukisueg: sgkqgucguyccaaki: $ywmkwiwkosakssii = ["\x75\162\x6c" => $eeamcawaiqocomwy, "\x6c\x69\x66\145\163\160\141\156" => $wumscqwikueeogok, "\x66\151\154\x65\137\x61\147\x65\137\154\x69\x6d\151\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\141\143\150\145\x5f\141\x66\164\145\x72\x5f\141\165\x74\157\x6d\141\x74\151\x63\x5f\x63\x61\x63\150\x65\x5f\x70\165\x72\x67\x65\x5f\144\x69\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); eussqkkimciywios: } iomwkkieqcswkkaw: $ywmkwiwkosakssii = ["\154\151\x66\x65\163\160\x61\x6e" => $wumscqwikueeogok, "\x66\x69\154\x65\x5f\x61\147\x65\x5f\x6c\x69\x6d\151\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\143\150\x65\137\141\x66\164\145\162\137\x61\x75\x74\157\x6d\x61\x74\151\x63\x5f\x63\x61\143\150\145\x5f\x70\x75\x72\147\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); omuemegmkesqgwys: geyiosucqswaeasw: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto ccgsycueagwegqeu; } goto qmqmskywcgiqgygm; ccgsycueagwegqeu: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto ycecaauekkiqacuu; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto qmguoqeawegcoeoa; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto gmeiuoeewucukque; } goto qmqmskywcgiqgygm; gmeiuoeewucukque: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto sayqggaieocmskko; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; sayqggaieocmskko: qmguoqeawegcoeoa: goto ceaamccscgcmqgka; ycecaauekkiqacuu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); ceaamccscgcmqgka: qmqmskywcgiqgygm: } cmsiuimsiycomyay: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto omumkeywqqogwwue; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); omumkeywqqogwwue: return $meisgakuwcmwosms; } }
