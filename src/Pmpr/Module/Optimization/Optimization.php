<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Extension\Extension; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\PreOpt\PreOpt; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\160\164\151\155\x69\x7a\x61\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\145\x6e\x61\x62\154\145\144")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\144\x69\x73\x61\142\154\145\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x70\x75\x72\147\145\137\x63\x61\143\150\145")); }); if (!$this->gmiyqqaekqcsoime()) { goto ggewkaiwwgkmkwgc; } parent::__construct(); $this->cyowaaeywssoooeo(); ggewkaiwwgkmkwgc: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\171\x65\x79\151\x67\x75\171\145\x67\155\155\x79\165\x73\145\141"])->qcsmikeggeemccuu("\160\154\165\147\151\x6e\x73\x5f\154\157\141\144\145\144", [$this, "\x69\x65\x6d\x61\141\x6b\x67\161\147\161\x6f\163\151\145\143\x6d"])->qcsmikeggeemccuu("\x74\145\155\160\x6c\141\164\x65\x5f\162\x65\144\151\x72\145\143\x74", [$this, "\147\151\x77\171\163\153\x77\x77\x6d\x63\151\145\165\141\143\x71"], 9999); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\x6f\x77\x5f\164\157\137\141\144\x64\137\x62\x61\x63\153\x6c\x69\156\153", [$this, "\163\145\x69\x61\151\x6f\153\165\163\147\x79\163\x6d\163\171\x71"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); PreOpt::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Extension::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\x5f\137\x43\x41\x43\110\x45\137\x5f\x50\x41\x54\x48")) { goto kkieqqwwascekcmo; } $this->syiuacooagmooima("\x63\157\x6e\146\x69\x67\x2d\160\x61\x74\150", __("\103\157\156\x66\151\x67\x20\x50\141\x74\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto ycueoqkeakismiqw; kkieqqwwascekcmo: $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\143\x6f\x6e\146\x69\x67"); ycueoqkeakismiqw: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto awimwukcyiceackk; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\151\156", $eygsasmqycagyayw->get("\x61\144\x6d\151\156\x2e\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\144\x6d\151\156\56\x63\x73\x73"))); awimwukcyiceackk: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto mugeiwyysiemwaym; } $cuakwceieagskoaa = false; mugeiwyysiemwaym: return $cuakwceieagskoaa; } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\164\x68" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\157\x67\147\x65\162" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto euymeegkukskiowq; } $auwuoyyagaiegwae = $kymsmcekmemqmews; euymeegkukskiowq: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = $okguqgiiewywyoaq->gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto uwscegkmmumymoaq; } $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\160\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\141\x74\150"] . "\56\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uwscegkmmumymoaq: cyymeyomuakqakwo: } cquikgykuscqmigw: return $this->ocksiywmkyaqseou("\x6f\160\x74\x5f\x63\157\156\x66\x69\147\x75\162\141\164\151\x6f\156\137\146\151\x6c\145\163\137\160\x61\164\x68", $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->ymioscmsquoqmasi()) && ($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk()))) { goto simkiasocoimioew; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto sieykcqauaygcais; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto yukacyeckkwagusw; } $this->syiuacooagmooima("\x63\157\x6e\146\x69\147", __("\103\x6f\156\146\x69\147\165\x72\141\x74\151\157\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto qgyaeoqgekocwkmw; yukacyeckkwagusw: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto wgeueumgacuuuama; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); wgeueumgacuuuama: ewoqyogcaksucksk: } auaywaskqooasiuq: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\x66\x69\x67\56\x70\150\160", ["\x63\157\156\146\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\x61\171\x5c\x73\53\134\x28\x40\151", "\x61\162\162\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\x61\171\134\x28\134\x73\53\x5c\x29\100\151", "\141\162\x72\x61\171\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\x69\x6d\151\172\x61\x74\x69\157\x6e\40\x63\157\156\146\151\147\40\x66\x69\x6c\x65\40\45\163\40\x67\145\156\x65\162\141\x74\145\144\40\151\x6e\40\x25\x73", PR__MDL__OPTIMIZATION), "\74\143\x6f\144\145\x3e{$qogsmwakwacwqogk}\74\57\143\157\x64\145\76", "\x3c\x63\x6f\144\x65\x3e{$mkomwsiykqigmqca}\x3c\x2f\143\157\x64\145\x3e"), "\157\x70\x74\x69\x6d\151\x7a\x61\164\x69\x6f\x6e\x2d\x63\x6f\156\x66\151\147", self::smkwuwawwaqyimcq); qgyaeoqgekocwkmw: sieykcqauaygcais: ouaoyqugwsagkqaa: } gkwoqoeaecgkymeu: simkiasocoimioew: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\x62\x75\x67\137\155\x6f\x64\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\x6f\x6f\153\151\x65\x5f\150\x61\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\117\113\x49\105\110\x41\123\x48"), "\x72\x65\x6a\145\143\164\x5f\x63\x6f\157\x6b\151\145\x73" => $this->mukwwwucwusmmqau(), "\x6c\x6f\x67\147\145\x64\137\x69\156\137\143\x6f\x6f\x6b\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\x47\107\x45\x44\x5f\x49\x4e\137\113\x45\131")]; return $this->ocksiywmkyaqseou("\x6f\x70\x74\137\x63\x6f\156\146\151\147\x75\x72\x61\x74\x69\x6f\156\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\145\147\x5f\161\165\x6f\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\x2d\160\x6f\163\164\x70\141\x73\163\137"; $osqkgokmuiasuukg[] = "\167\160\x74\157\x75\x63\150\x5f\x73\167\x69\x74\x63\150\x5f\x74\x6f\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\157\x6d\155\145\x6e\x74\x5f\x61\165\x74\150\x6f\162\137"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\145\x6e\x74\x5f\141\165\164\x68\157\162\x5f\x65\155\141\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou("\157\160\x74\137\x72\145\x6a\145\x63\x74\137\x63\x6f\157\153\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
