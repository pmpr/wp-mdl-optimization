<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643273713ba62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\157\x70\x74\151\155\x69\172\141\x74\151\157\x6e\x5f\160\x75\162\x67\145\137\164\x69\155\145\x5f\x65\x76\x65\156\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\165\x77\165\147\x61\151\161\171\x77\155\163\x65\x6b\163\161\155"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto yimeskeioamqmuwg; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\160\x74\x5f\x65\170\160\151\162\145\x64\x5f\143\x61\143\150\x65\137\143\x72\157\156\x5f\x69\x6e\164\x65\162\166\141\154", static::swmaucwuymuqokiu); yimeskeioamqmuwg: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto cwugokqsmiomgmqg; } goto wkaoyycsoeoyqcae; cwugokqsmiomgmqg: return false; wkaoyycsoeoyqcae: } yeemsgmumygmumqw: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\100\x5e" . preg_quote($qogsmwakwacwqogk["\x68\x6f\x73\x74"], "\x40") . "\x40"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\x70\141\x74\150"], "\57"); if (!$mcowwqgmkuemoumu) { goto akeoaicoieaiekcw; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto uuuceqkseqkqawko; } return false; uuuceqkseqkqawko: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto ekoegocuqoycoeyq; } return false; ekoegocuqoycoeyq: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto yksamaucqkqsawkk; } return false; yksamaucqkqsawkk: return true; }); akeoaicoieaiekcw: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto weouocwmwicayyiy; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\143\141\143\x68\x65\x5f\x61\165\x74\x6f\x6d\x61\164\x69\143\x5f\143\141\x63\x68\145\x5f\160\165\162\147\x65\137\165\162\x6c\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto kskqquqsegiiogek; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; kskqquqsegiiogek: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\x73\x5f\x73\164\162\x69\156\x67"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto iuysqgmmgqiywssm; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\143\x61\143\150\145\x5f\x62\145\146\x6f\x72\145\x5f\x61\x75\x74\157\x6d\141\164\151\x63\x5f\x63\x61\x63\150\145\137\x70\165\162\147\145\x5f\x64\151\162", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto ugiqiewymimqecsu; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\x61\x74\x68"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto becceuuwokgoaewy; } $oicyaaqouscyiycq[] = ["\150\x6f\x6d\x65\137\165\x72\x6c" => $eeamcawaiqocomwy, "\150\x6f\155\x65\x5f\x70\x61\164\150" => $qaisqkcgsgakqykq, "\x6c\157\x67\x67\x65\x64\x5f\x69\156" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\150\x6f\x73\x74"], "\146\x69\154\145\163" => $ccykqsgoygiaowac]; becceuuwokgoaewy: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto wyugqoowakyicyic; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); wyugqoowakyicyic: qgkiguggkyiycwow: } wwcwmkowgooocaem: if (!$oicyaaqouscyiycq) { goto aeaciamekuqyieys; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); aeaciamekuqyieys: ugiqiewymimqecsu: $ywmkwiwkosakssii = ["\x75\162\x6c" => $eeamcawaiqocomwy, "\x6c\151\x66\x65\x73\160\x61\x6e" => $wumscqwikueeogok, "\x66\151\154\x65\137\x61\147\145\x5f\154\151\x6d\x69\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\143\150\145\137\x61\x66\x74\x65\x72\137\141\165\164\157\x6d\x61\x74\151\143\137\x63\141\143\150\x65\x5f\160\165\x72\x67\145\x5f\144\x69\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); ygskksomysgaokek: } mocaoayiouggauiy: $ywmkwiwkosakssii = ["\x6c\x69\146\145\163\x70\141\x6e" => $wumscqwikueeogok, "\146\x69\x6c\x65\137\141\147\145\137\154\x69\155\151\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\x63\x61\143\150\145\137\x61\x66\164\145\162\x5f\141\165\164\x6f\155\141\x74\x69\x63\x5f\x63\141\x63\150\x65\x5f\160\165\162\x67\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); iuysqgmmgqiywssm: weouocwmwicayyiy: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto kucqcgeesiccuuia; } goto gkkwmqoacciwomqs; kucqcgeesiccuuia: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto iwgmywqocewwgoeo; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto amqgiisymksuuuss; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto oycuaqewsskgkqci; } goto gkkwmqoacciwomqs; oycuaqewsskgkqci: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto ocmagamuyawyiyka; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; ocmagamuyawyiyka: amqgiisymksuuuss: goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); syoeqaqkseguwmgy: gkkwmqoacciwomqs: } ggyoywwggggekycs: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto sgiouaqukyycswqm; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); sgiouaqukyycswqm: return $meisgakuwcmwosms; } }
