<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689580cbf1c8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\164\x69\x6d\x69\x7a\x61\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\x72\147\145\137\x63\x61\x63\150\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\x5f\151\x6e\x69\164", [$this, "\171\x65\171\151\x67\x75\x79\145\147\155\155\171\x75\163\x65\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\157\x77\x5f\164\157\x5f\141\144\x64\137\142\141\x63\x6b\154\151\156\153", [$this, "\x73\145\151\141\151\x6f\x6b\x75\x73\x67\x79\x73\x6d\163\171\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kiwqkcaekqqyuegq; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); kiwqkcaekqqyuegq: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto quwcqmyokicssyew; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\156", $eygsasmqycagyayw->get("\x61\144\155\151\156\56\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\151\x6e", $eygsasmqycagyayw->get("\141\x64\155\x69\x6e\x2e\x63\163\x73"))); quwcqmyokicssyew: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto iqcogmsguwoikame; } $cuakwceieagskoaa = false; iqcogmsguwoikame: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto iggyqogweyosuikc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto kqksuugcgsyeoayy; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto omugkkesagcyagmk; } $this->syiuacooagmooima("\143\157\x6e\146\x69\x67", __("\x43\x6f\156\146\x69\x67\165\162\141\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mosqsmqimqgqoase; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mosqsmqimqgqoase: ayyweymyuuiauamo: } yqykqysmiquwoasu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\146\x69\x67\x2e\x70\x68\x70", ["\x63\157\156\146\x69\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\x79\x5c\x73\x2b\x5c\50\x40\x69", "\x61\162\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\162\141\171\x5c\x28\134\x73\53\134\51\x40\151", "\x61\162\162\141\x79\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\x69\172\x61\164\x69\x6f\156\x20\143\157\156\146\151\x67\40\146\151\x6c\145\x20\45\x73\x20\147\x65\x6e\145\x72\x61\x74\x65\144\x20\151\156\x20\45\163", PR__MDL__OPTIMIZATION), "\x3c\143\157\x64\x65\x3e{$qogsmwakwacwqogk}\x3c\x2f\143\x6f\x64\145\x3e", "\x3c\143\157\144\x65\76{$mkomwsiykqigmqca}\74\x2f\x63\157\144\145\76"), "\x6f\x70\164\x69\x6d\151\x7a\x61\164\151\157\x6e\55\x63\x6f\156\x66\x69\x67", self::smkwuwawwaqyimcq); ygcsmkuycoagwyou: kqksuugcgsyeoayy: cmqucgoewuyieoyk: } gimmuoqwckiseaik: iggyqogweyosuikc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\x76\x5f\x6d\x6f\x64\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\144\x65\x62\165\147\137\x6d\x6f\x64\x65" => false, "\143\157\157\x6b\151\x65\137\150\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\x4f\x4b\x49\x45\x48\101\123\x48"), "\162\145\x6a\145\143\x74\x5f\143\x6f\157\153\151\145\x73" => $this->mukwwwucwusmmqau(), "\x6c\x6f\x67\x67\145\x64\137\x69\156\137\143\x6f\x6f\153\x69\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\107\x47\105\104\x5f\111\116\137\113\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\146\x69\147\x75\162\141\x74\x69\x6f\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\x65\x67\137\161\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\x70\x6f\x73\164\160\141\163\x73\137"; $osqkgokmuiasuukg[] = "\x77\160\164\157\165\x63\x68\x5f\x73\x77\151\164\x63\x68\x5f\164\x6f\147\x67\154\145"; $osqkgokmuiasuukg[] = "\143\157\x6d\155\x65\x6e\x74\137\141\x75\164\x68\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\164\137\x61\165\x74\150\157\x72\137\145\155\141\151\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\145\143\x74\x5f\x63\x6f\157\x6b\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
