<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6648bed4e3da1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\151\155\x69\x7a\x61\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::wwgqqgayyagycysu); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\137\151\x6e\x69\x74", [$this, "\171\145\x79\x69\x67\x75\171\x65\147\x6d\155\x79\x75\x73\x65\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\154\154\x6f\167\x5f\x74\157\x5f\141\144\x64\137\142\141\x63\x6b\x6c\x69\156\153", [$this, "\163\x65\x69\x61\x69\157\x6b\165\x73\147\x79\163\155\163\171\x71"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cwcmwogseemgqgqq; } Subscription::symcgieuakksimmu(); cwcmwogseemgqgqq: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto yuoyackaoigyyyso; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\156", $eygsasmqycagyayw->get("\x61\x64\x6d\x69\x6e\x2e\x6a\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\155\x69\x6e", $eygsasmqycagyayw->get("\x61\144\155\x69\x6e\x2e\143\x73\x73"))); yuoyackaoigyyyso: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kcqieuukskyiywss; } $cuakwceieagskoaa = false; kcqieuukskyiywss: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto bgoygegmogcmeaou; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto ioacywuoyuskqmwy; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto geugsymgsiuuqccg; } $this->syiuacooagmooima("\x63\x6f\156\x66\151\147", __("\x43\x6f\156\146\x69\x67\x75\162\141\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto mgwgiesscqoaqcau; geugsymgsiuuqccg: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto quewwumogiocouii; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); quewwumogiocouii: eyuoecmogqwkmomi: } gqywcowiigceimaw: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\x6e\x66\x69\x67\x2e\160\150\160", ["\x63\157\156\146\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\x61\171\x5c\x73\53\x5c\50\100\x69", "\x61\x72\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\141\x79\134\x28\134\x73\53\134\x29\100\x69", "\141\x72\162\141\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\164\151\x6d\151\172\141\x74\x69\x6f\156\40\x63\x6f\156\146\151\x67\40\x66\151\x6c\x65\40\x25\x73\40\147\x65\x6e\145\162\141\164\145\x64\40\151\156\40\45\x73", PR__MDL__OPTIMIZATION), "\x3c\x63\157\144\x65\x3e{$qogsmwakwacwqogk}\x3c\57\143\x6f\x64\145\x3e", "\74\x63\x6f\x64\145\x3e{$mkomwsiykqigmqca}\74\x2f\x63\157\144\x65\x3e"), "\x6f\160\x74\151\x6d\x69\172\141\x74\x69\157\156\x2d\143\x6f\156\146\x69\x67", self::smkwuwawwaqyimcq); mgwgiesscqoaqcau: ioacywuoyuskqmwy: gsimeiqkoyqkuecq: } wukuisoeoeomgegu: bgoygegmogcmeaou: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\x62\x75\147\x5f\x6d\157\144\x65" => false, "\143\x6f\x6f\x6b\x69\x65\137\x68\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\x4f\113\111\105\x48\x41\123\110"), "\162\x65\x6a\x65\143\164\137\x63\157\157\x6b\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\x65\144\137\151\x6e\x5f\x63\x6f\x6f\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\107\107\105\x44\x5f\x49\116\137\x4b\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\x6e\x66\151\x67\165\162\x61\164\151\157\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\x65\147\137\x71\x75\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\x70\157\163\x74\x70\141\x73\x73\137"; $osqkgokmuiasuukg[] = "\167\160\x74\157\x75\x63\150\x5f\x73\167\x69\x74\143\150\x5f\164\x6f\x67\147\154\145"; $osqkgokmuiasuukg[] = "\143\157\x6d\x6d\x65\x6e\164\137\141\165\164\150\157\162\137"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\x6e\164\137\x61\165\x74\150\x6f\x72\x5f\145\155\141\151\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\x6a\x65\x63\x74\137\x63\157\157\153\x69\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
