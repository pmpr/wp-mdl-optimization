<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec8032739             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\162\137\157\160\164\151\x6d\151\172\x61\x74\151\157\156\137"; const eaegumogucmwsmsk = "\120\122\x5f\117\120\x54\111\115\x49\132\101\x54\x49\117\116\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\x70\x74\151\x6d\x69\x7a\141\164\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\x67\145\x5f\x63\141\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\151\156\x69\164", [$this, "\161\141\x79\x69\145\165\x73\x63\163\x73\x6b\151\161\141\143\163"]); $this->waqewsckuayqguos("\142\145\x66\157\x72\145\x5f\145\x6e\x71\165\145\x75\x65\x5f\142\141\143\x6b\145\x6e\x64\x5f\141\163\163\145\164\163", [$this, "\x65\156\161\165\145\165\x65"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\157\x77\137\164\x6f\137\141\x64\x64\137\x62\141\143\x6b\x6c\151\156\153", [$this, "\x73\145\151\x61\x69\157\x6b\165\x73\147\x79\x73\x6d\x73\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gqeoaceyoiicoaec; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); gqeoaceyoiicoaec: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\141\x63\x6b\145\x6e\144", $eygsasmqycagyayw->get("\142\141\x63\153\145\156\144\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\x61\x63\153\145\x6e\144", $eygsasmqycagyayw->get("\142\x61\143\153\x65\156\x64\x2e\143\x73\x73"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kkckyqmcyussauma; } $cuakwceieagskoaa = false; kkckyqmcyussauma: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto kocaieyauyiqmyiy; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto icoiqskygugkgmkm; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto maguoggkqamaiuag; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qosswumywsaeyqus; } $this->syiuacooagmooima("\x63\x6f\x6e\146\x69\x67", __("\103\157\x6e\146\151\147\165\x72\x61\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto swicauyqusmgeccu; qosswumywsaeyqus: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mieoguuqiwqioeqa; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mieoguuqiwqioeqa: gscyiqmmegqmqcoe: } uckusgwkoycmkeam: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\x6f\156\x66\151\x67\56\x70\x68\160", ["\143\157\x6e\146\151\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\162\141\x79\x5c\163\x2b\134\50\100\151", "\141\162\162\x61\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\x61\x79\x5c\x28\x5c\x73\53\134\51\x40\x69", "\141\x72\162\141\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\x69\x6d\151\172\x61\x74\x69\x6f\x6e\40\x63\x6f\156\146\x69\x67\40\146\151\154\145\40\45\163\x20\147\145\156\x65\162\141\x74\x65\x64\40\x69\x6e\40\45\163", PR__MDL__OPTIMIZATION), "\74\143\x6f\144\x65\x3e{$qogsmwakwacwqogk}\x3c\57\x63\x6f\144\x65\x3e", "\x3c\143\x6f\x64\x65\x3e{$mkomwsiykqigmqca}\74\57\143\157\x64\145\76"), "\x6f\160\x74\x69\155\151\x7a\141\x74\151\157\156\x2d\143\157\156\146\151\x67", Constants::smkwuwawwaqyimcq); swicauyqusmgeccu: maguoggkqamaiuag: cciakcwuweqmcose: } ikukqooiowqywyqo: icoiqskygugkgmkm: kocaieyauyiqmyiy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\166\137\x6d\x6f\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\x64\x65\142\165\147\137\155\157\144\145" => false, "\x63\157\157\153\x69\145\137\x68\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\x4f\113\111\x45\110\x41\123\110"), "\162\x65\x6a\145\x63\164\137\143\157\157\x6b\x69\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\147\x67\145\x64\137\151\156\137\143\x6f\x6f\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\105\x44\x5f\111\x4e\x5f\x4b\105\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\156\146\x69\147\165\162\x61\x74\151\157\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\147\137\161\165\x6f\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\x70\157\163\x74\160\x61\163\163\x5f"; $osqkgokmuiasuukg[] = "\167\160\x74\157\x75\x63\150\x5f\x73\x77\151\x74\x63\150\x5f\x74\157\147\x67\154\x65"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\145\156\164\137\x61\x75\x74\x68\157\162\137"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\x6d\145\x6e\x74\137\141\x75\x74\150\x6f\162\137\145\x6d\x61\151\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\x6a\145\x63\x74\137\143\x6f\x6f\153\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
