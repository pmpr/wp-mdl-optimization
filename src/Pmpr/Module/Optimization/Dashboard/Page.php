<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d8c783a6833             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\x72\x67\x65\x5f\x63\x61\x63\150\145"; const wwkyymgusywcykuk = "\x70\162\145\154\x6f\x61\x64\x5f\160\141\x67\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\x70\x74\x5f\144\x61\x73\150\x62\x6f\141\x72\x64", Constants::ysgwugcqguggmigq => __("\x44\x61\163\150\x62\157\x61\x72\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\x61\x73\x68\x62\157\141\162\144", $gaumukogkkgkiiuo->get("\144\141\163\x68\x62\x6f\141\162\144\56\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\x61\163\150\142\x6f\x61\162\x64", ["\141\152\x61\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\162\147\x65\x20\103\141\143\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\x69\x73\x61\142\x6c\x65\x20\x44\x65\x76\145\x6c\157\x70\155\145\x6e\x74\40\x4d\x6f\x64\145", PR__MDL__OPTIMIZATION) : __("\x45\x6e\x61\142\x6c\145\40\104\x65\x76\x65\x6c\x6f\160\155\x65\156\x74\40\x4d\157\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\x79\156\x63\137\x64\141\164\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\40\x79\157\165\x20\x73\165\x72\145\40\x61\142\157\165\164\40\x70\x75\x72\x67\145\x20\143\x61\x63\x68\x65\77", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\x72\x65\154\157\x61\x64\x20\151\163\x20\x65\156\x61\142\154\x65\x20\141\x6e\144\x20\141\x66\x74\145\x72\40\x70\165\x72\x67\145\x20\143\141\x63\150\x65\x2c\40\x72\145\x67\x65\156\145\x72\x61\164\145\40\143\x61\x63\x68\x65\40\x66\x69\x6c\145\40\x73\164\141\162\x74\145\144\40\141\165\x74\157\x6d\x61\164\x69\143\141\154\154\171\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\x73\163" => "\157\160\x74\x2d\160\165\162\147\145\55\141\x6c\154\x2d\143\141\x63\x68\x65\40\160\162\55\x62\164\x6e\40\x62\164\156\x2d\144\x61\156\147\145\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\x6c\x61\163\163" => "\167\x2d\61\60\x30\40\x70\x72\x2d\142\x74\156\40\x62\x74\156\x2d\x61\x63\x74\x69\x6f\x6e\40\142\x74\x6e\55\x6f\165\164\154\151\x6e\145\55\x70\162\151\155\x61\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\x73\x61\142\154\151\156\147\x20\x44\145\x76\x65\x6c\157\x70\155\145\156\164\x20\115\157\144\145\40\164\165\x72\156\x73\x20\157\156\x20\x63\141\143\x68\151\156\x67\x20\146\157\162\x20\171\x6f\x75\x72\x20\163\x69\x74\x65\56\40\101\x72\145\40\171\x6f\165\40\x73\165\x72\145\x20\x79\x6f\x75\40\x77\141\x6e\x74\40\x74\157\x20\x63\157\156\164\x69\x6e\165\145\x3f", PR__MDL__OPTIMIZATION) : __("\105\x6e\141\142\x6c\x69\156\147\x20\x44\145\166\x65\x6c\157\160\x6d\145\156\164\x20\115\157\144\145\x20\x74\x75\162\x6e\x73\x20\157\x66\x66\40\143\141\143\150\x69\156\x67\40\x66\x6f\x72\40\171\157\x75\162\x20\163\x69\x74\x65\x2e\x20\x41\x72\145\40\171\157\165\40\x73\x75\x72\x65\40\x79\x6f\165\40\167\141\x6e\164\x20\x74\x6f\40\x63\157\156\164\151\x6e\x75\145\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\163\163" => "\x6f\x70\164\55\143\150\141\156\147\145\x2d\x64\x65\x76\x2d\x6d\x6f\144\x65\40\x70\162\55\142\x74\156\40\x62\x74\x6e\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\x61\164\141\x2d\x64\x65\x76\55\155\157\x64\145" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\x65\166\145\154\157\160\155\145\156\x74\x20\x4d\x6f\144\145", PR__MDL__OPTIMIZATION), ["\143\154\141\163\163" => "\167\x2d\61\60\x30\40\x70\162\x2d\142\164\x6e\x20\x62\x74\156\x2d\141\x63\x74\151\157\156\40\x62\x74\156\x2d\157\165\x74\x6c\151\x6e\145\x2d\x70\x72\x69\155\x61\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto wwgikwuigiiqsswq; } wwgikwuigiiqsswq: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\x61\x73\150\142\157\x61\x72\144\x5f\x72\x65\x70\157\162\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\165\x72\x63\150\x61\163\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\x20\160\x74\x2d\62")->gswweykyogmsyawy(__("\120\x75\x72\x63\150\141\x73\145\40\x52\145\160\157\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\x61\157\x73\147\x63\163\157\x69\x77\155\x79\x65\x6f\163\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\x61\147\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\x30\x20\x70\x74\x2d\x32")->gswweykyogmsyawy(__("\125\163\x61\x67\145\x20\x52\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\153\143\x61\x75\x6d\x6d\163\x63\x6b\165\153\x6f\147\x63\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\x70\141\156\145\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\x73\137\x77\x72\x61\x70" => false, "\166\145\x72\164\151\x63\x61\x6c" => false]), Constants::qescuiwgsyuikume => __("\x50\x75\162\143\150\141\163\x65\40\141\156\144\40\103\157\x6e\163\x75\x6d\160\164\x69\157\156\40\x52\145\x70\157\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\x75\x69\x63\x6b\137\x61\143\x74\151\x6f\156\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\x69\143\153\137\x61\x63\164\151\x6f\156\137\x74\151\x74\154\145"] = __("\121\x75\x69\143\153\x20\x41\143\164\151\157\x6e\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
