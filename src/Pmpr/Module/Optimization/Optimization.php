<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c10d873e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\x69\155\151\172\x61\x74\151\x6f\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\162\x67\x65\137\143\x61\x63\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\151\x6e\151\164", [$this, "\171\145\x79\151\x67\165\x79\145\147\155\x6d\x79\165\x73\145\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\154\x6c\x6f\167\137\164\x6f\x5f\141\144\x64\137\142\141\143\x6b\154\x69\x6e\x6b", [$this, "\163\145\151\x61\151\x6f\153\x75\x73\x67\171\x73\x6d\163\171\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto uugekiumuwemyuyc; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); uugekiumuwemyuyc: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qoameasiqwaqgmca; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\155\x69\156", $eygsasmqycagyayw->get("\141\x64\x6d\151\156\x2e\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\155\x69\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\151\156\56\143\163\x73"))); qoameasiqwaqgmca: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto osoqssymqqoqcuky; } $cuakwceieagskoaa = false; osoqssymqqoqcuky: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto yuiouamaogkkqmck; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto yayykakkyeoieicm; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto uqkqmseoeemyaqck; } $this->syiuacooagmooima("\x63\157\156\x66\151\147", __("\x43\x6f\156\x66\151\147\x75\162\x61\x74\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto cceyoumkiicaguio; uqkqmseoeemyaqck: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mieeugiewckceagc; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mieeugiewckceagc: uckeuuaqimqamuyc: } awikkaqmmuqkukma: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\x66\x69\x67\x2e\x70\150\160", ["\143\x6f\x6e\x66\151\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\141\x79\x5c\163\53\134\50\100\x69", "\141\x72\162\x61\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\x61\x79\134\50\134\x73\x2b\x5c\51\100\x69", "\141\162\x72\x61\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\164\x69\x6d\x69\x7a\141\164\x69\157\156\x20\143\x6f\x6e\146\151\147\40\x66\x69\154\145\40\x25\163\40\147\145\x6e\x65\x72\x61\x74\145\144\x20\x69\156\x20\45\x73", PR__MDL__OPTIMIZATION), "\x3c\143\157\144\x65\76{$qogsmwakwacwqogk}\x3c\x2f\x63\157\x64\145\x3e", "\74\143\x6f\x64\145\x3e{$mkomwsiykqigmqca}\x3c\x2f\x63\157\144\x65\76"), "\x6f\x70\x74\151\155\x69\172\141\164\x69\x6f\156\x2d\143\157\156\x66\151\x67", self::smkwuwawwaqyimcq); cceyoumkiicaguio: yayykakkyeoieicm: giiucsyqgcooaima: } qcywwqceiqogcoyo: yuiouamaogkkqmck: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\x76\137\155\x6f\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\x64\x65\x62\x75\147\x5f\155\157\144\x65" => false, "\x63\x6f\157\153\x69\145\x5f\150\x61\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\x4f\x4b\x49\x45\x48\101\123\x48"), "\162\x65\x6a\x65\x63\x74\137\x63\157\x6f\x6b\151\145\163" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\x65\x64\x5f\151\156\x5f\143\x6f\x6f\153\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\x47\105\104\137\x49\x4e\x5f\113\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\x66\151\147\x75\x72\141\164\x69\x6f\156\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\x65\x67\x5f\161\165\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\x2d\160\x6f\163\x74\160\x61\x73\x73\137"; $osqkgokmuiasuukg[] = "\167\x70\164\x6f\165\x63\x68\137\163\167\151\164\x63\x68\137\164\157\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\x6f\155\x6d\x65\x6e\164\x5f\141\x75\x74\x68\157\x72\137"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\155\x65\156\164\x5f\141\165\164\150\157\162\137\x65\155\141\x69\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\143\x74\x5f\x63\157\157\153\151\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
