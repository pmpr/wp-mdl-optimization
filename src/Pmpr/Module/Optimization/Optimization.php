<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             666957c99839f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\x74\x69\155\151\172\x61\164\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\147\x65\137\143\x61\143\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\x6e\151\x74", [$this, "\x79\145\x79\151\x67\x75\171\145\x67\155\155\171\x75\163\x65\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\157\x77\137\164\x6f\x5f\141\144\x64\137\x62\141\143\x6b\x6c\151\156\153", [$this, "\x73\x65\151\141\151\x6f\153\165\163\147\171\163\155\x73\171\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto seaiwkkgyyegiyug; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); seaiwkkgyyegiyug: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto uauuoyigkmqoasaq; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\156", $eygsasmqycagyayw->get("\141\x64\155\x69\x6e\56\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\144\155\x69\156\56\x63\x73\x73"))); uauuoyigkmqoasaq: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kmwwqgiacsoksgcy; } $cuakwceieagskoaa = false; kmwwqgiacsoksgcy: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto icmsyimgycuocisu; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto oeeasouoaaoaaemm; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto mmqkuymyyycywmqu; } $this->syiuacooagmooima("\x63\157\156\x66\151\147", __("\103\157\x6e\x66\151\147\165\162\141\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto iaockwkwaiqgeuyu; mmqkuymyyycywmqu: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto woaoeyaowkuukkqm; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); woaoeyaowkuukkqm: aemoyqueimayqcaw: } sequgigsgkqaikmq: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\x6f\x6e\x66\x69\x67\56\x70\x68\x70", ["\143\157\156\146\151\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\141\x79\134\163\x2b\x5c\x28\x40\151", "\141\x72\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\x72\x61\171\134\x28\x5c\163\x2b\134\51\x40\x69", "\141\162\x72\141\171\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\x69\x6d\151\172\x61\164\151\x6f\x6e\x20\143\157\156\146\151\x67\x20\x66\151\x6c\x65\40\x25\163\40\x67\145\x6e\x65\x72\141\x74\145\144\40\151\x6e\x20\45\x73", PR__MDL__OPTIMIZATION), "\x3c\143\157\x64\145\x3e{$qogsmwakwacwqogk}\x3c\57\143\x6f\x64\145\76", "\x3c\x63\157\x64\145\76{$mkomwsiykqigmqca}\74\57\143\157\x64\x65\x3e"), "\x6f\160\164\x69\155\x69\x7a\x61\x74\151\x6f\x6e\55\143\x6f\156\146\x69\147", self::smkwuwawwaqyimcq); iaockwkwaiqgeuyu: oeeasouoaaoaaemm: ugqucegcucyyayga: } akieeaeqiwugimie: icmsyimgycuocisu: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\166\x5f\155\x6f\x64\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\x64\x65\142\165\x67\137\x6d\x6f\x64\145" => false, "\x63\157\x6f\153\151\145\137\150\x61\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\117\x4b\111\x45\x48\x41\123\x48"), "\162\x65\x6a\145\143\x74\137\143\157\157\x6b\x69\145\163" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\x65\x64\137\151\156\137\143\157\x6f\153\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\107\107\x45\104\x5f\111\116\x5f\x4b\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\x66\151\x67\165\x72\x61\164\151\157\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\x65\147\137\x71\165\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\55\x70\157\163\x74\160\141\163\163\x5f"; $osqkgokmuiasuukg[] = "\x77\160\164\157\165\143\150\137\163\167\151\164\x63\150\137\x74\157\x67\x67\x6c\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\x6e\164\x5f\x61\x75\164\x68\x6f\162\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\155\155\145\156\x74\137\141\x75\x74\x68\x6f\x72\x5f\145\x6d\x61\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\145\x6a\x65\x63\x74\137\x63\157\157\153\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
