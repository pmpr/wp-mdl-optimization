<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; use WP_Post; use WP_Term; class Purge extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\151\156\151\164", [$this, "\x79\145\x79\151\x67\165\x79\x65\x67\155\x6d\171\x75\163\145\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\x75\162\x67\145\137\160\x61\x67\x65"), [$this, "\x79\x77\x75\167\x61\x69\145\x75\x63\145\163\x73\x61\x6d\x6d\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x70\165\x72\147\145\x5f\160\141\x67\145\163"), [$this, "\153\x71\x6d\153\165\x63\171\155\x6d\x6f\163\x77\157\x69\155\161"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\x75\162\x67\145\x5f\143\x61\143\x68\x65"), [$this, "\163\161\155\x63\171\145\x67\x6b\x69\147\x77\145\x69\x77\x6b\x73"]); $this->dsosiquyawswqycu(); $this->ioemsuoaygymoeik(); $this->gseeuwuicaeciwwm(); $this->ysmmwcgigqqaegem(); $this->qiguiacmuqqummcy(); $this->qmkyyeqeusuaimgy(); } public function dsosiquyawswqycu() { if (!$this->weysguygiseoukqw(Setting::iamiyykuiqwgqwss)) { goto qcywwqceiqogcoyo; } $this->qcsmikeggeemccuu("\x75\x70\147\x72\141\144\145\x72\137\160\162\x6f\143\x65\163\163\x5f\143\157\x6d\160\154\145\x74\145", [$this, "\161\163\x69\x77\x61\x71\167\163\171\x61\163\x71\163\x71\x63\161"]); qcywwqceiqogcoyo: } public function ioemsuoaygymoeik() { $ccowyogiqwikkkie = ["\x65\x64\151\164\137\164\x65\x72\x6d", "\143\x72\145\141\164\145\137\164\x65\162\x6d", "\144\x65\x6c\145\x74\145\x5f\164\145\162\x6d"]; foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $this->qcsmikeggeemccuu($aiamqeawckcsuaou, [$this, "\145\x77\171\x6d\x69\x69\x6d\167\167\x6d\x75\163\x71\157\155\161"], 10, 3); awikkaqmmuqkukma: } giiucsyqgcooaima: $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas([self::wuccaoymmygisoku => true, self::aisguagukaewucii => self::emgcgiseaoouacge, self::oiyqeoicceecwscs => true]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\162\x6f\x77\137\x61\x63\x74\x69\157\x6e\x73", [$this, "\x73\x73\171\143\x79\x69\151\167\x6f\x75\x6b\x75\x69\171\x6d\147"], 10, 2); mieeugiewckceagc: } uckeuuaqimqamuyc: } public function gseeuwuicaeciwwm() { $ccowyogiqwikkkie = [ "\145\144\x69\164\137\160\x6f\x73\x74", "\x64\145\154\x65\164\x65\144\137\160\157\163\x74", "\x77\160\137\164\162\x61\x73\x68\137\x70\x6f\163\x74", "\143\x6c\x65\141\x6e\x5f\160\x6f\x73\164\x5f\143\x61\x63\x68\x65", "\x64\x65\x6c\x65\x74\x65\137\141\164\164\141\x63\150\155\x65\x6e\x74", $this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\157\x73\x74\x5f\145\x64\151\164\145\x64"), ]; foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $this->qcsmikeggeemccuu($aiamqeawckcsuaou, [$this, "\x79\x6d\171\x6b\165\x69\x63\x77\x63\141\165\151\157\165\x61\143"], PHP_INT_MAX); cceyoumkiicaguio: } uqkqmseoeemyaqck: $this->qcsmikeggeemccuu("\160\x72\145\x5f\x70\x6f\163\164\x5f\x75\160\x64\141\x74\x65", [$this, "\155\x65\165\157\165\163\x73\151\x61\161\171\x67\x73\x63\153\171"], PHP_INT_MAX, 2)->qcsmikeggeemccuu("\164\x72\141\x6e\163\151\x74\x69\x6f\156\x5f\160\157\x73\x74\x5f\x73\x74\x61\164\165\163", [$this, "\x6f\157\x6b\141\151\x79\165\163\141\x79\x67\141\145\143\x75\171"], PHP_INT_MAX, 3); $sciomagaqmgggsiu = [self::mswoacegomcucaik, self::imywcsggckkcywgk]; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $this->qcsmikeggeemccuu("{$useksmwkuswkwcqg}\x5f\x72\x6f\x77\137\x61\x63\164\151\x6f\x6e\163", [$this, "\163\x73\x79\143\x79\151\151\x77\x6f\165\153\x75\151\x79\x6d\x67"], 10, 2); yuiouamaogkkqmck: } yayykakkyeoieicm: } public function ysmmwcgigqqaegem() { $uccyimuwqccawaaq = DecoratorOption::get("\163\x74\171\x6c\145\163\150\145\145\x74"); $ccowyogiqwikkkie = [ "\163\x77\151\164\143\x68\x5f\164\150\x65\155\145", "\167\160\x5f\165\160\144\x61\x74\145\x5f\156\141\166\137\x6d\x65\156\165", "\x63\165\x73\164\157\x6d\x69\172\145\x5f\163\141\x76\x65\x5f\141\x66\x74\145\162", "\x70\145\162\x6d\141\154\151\156\x6b\137\163\164\x72\x75\143\164\165\x72\145\137\143\150\x61\156\x67\x65\x64", "\141\x76\141\x64\141\137\143\x6c\x65\x61\x72\137\144\171\156\141\x6d\x69\x63\137\143\x73\163\x5f\143\x61\x63\x68\x65", "\x75\x70\x64\x61\164\x65\137\157\160\164\x69\x6f\156\x5f\x73\151\x64\145\142\141\x72\x73\x5f\x77\151\144\147\145\164\163", "\x75\x70\144\141\164\x65\137\x6f\x70\x74\151\157\156\137\x74\x68\x65\x6d\x65\137\x6d\157\x64\163\x5f{$uccyimuwqccawaaq}", ]; foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $this->qcsmikeggeemccuu($aiamqeawckcsuaou, [$this, "\163\x6d\163\161\x73\x69\143\153\x67\x79\157\x6b\167\167\157\x69"], PHP_INT_MAX); wsckacayikksiswo: } mmwqwowqcaseyyki: $this->cecaguuoecmccuse("\x77\x69\x64\x67\145\x74\x5f\x75\160\144\x61\164\145\137\x63\141\x6c\x6c\142\141\x63\153", [$this, "\147\145\143\x73\143\x75\x6f\145\153\153\x77\x67\x67\171\x79\x6b"]); } public function qmkyyeqeusuaimgy() { $this->qcsmikeggeemccuu("\x77\160\x5f\165\x70\144\x61\164\145\137\143\157\x6d\x6d\x65\x6e\x74\x5f\143\157\x75\156\x74", [$this, "\161\x63\155\153\x6f\x6f\157\161\153\x6d\x67\145\161\x63\145\x69"])->qcsmikeggeemccuu("\x64\x65\154\x65\164\145\x5f\143\157\x6d\x6d\x65\156\x74", [$this, "\x6d\x75\145\x79\171\161\157\155\x6f\x77\x79\167\x61\x71\x61\x73"], PHP_INT_MAX)->qcsmikeggeemccuu("\x63\x6f\155\155\145\x6e\x74\x5f\160\157\x73\164", [$this, "\x6b\x69\x6f\147\167\x6d\x65\x67\155\x79\x77\x6f\151\143\161\x63"], PHP_INT_MAX, 3)->qcsmikeggeemccuu("\164\x72\141\x6e\163\x69\164\x69\x6f\156\x5f\x63\x6f\155\x6d\x65\x6e\x74\x5f\x73\164\x61\x74\x75\163", [$this, "\153\157\x77\x77\x6f\143\x67\141\x79\x6d\163\x79\x65\x77\x63\x6f"], PHP_INT_MAX, 3); } public function qiguiacmuqqummcy() { $ccowyogiqwikkkie = ["\141\144\x64\137\154\x69\156\153", "\x65\x64\151\164\x5f\x6c\x69\156\x6b", "\144\145\154\x65\164\x65\x5f\x6c\x69\156\x6b", "\165\160\x64\141\164\x65\137\x6f\x70\164\151\157\x6e\x5f\x74\x61\x67\137\x62\x61\x73\x65", "\165\160\144\x61\164\145\x5f\x6f\160\164\x69\x6f\156\x5f\x63\141\x74\145\x67\x6f\162\x79\137\142\141\163\145"]; foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $this->qcsmikeggeemccuu($aiamqeawckcsuaou, [$this, "\x77\x63\165\151\x69\x6f\155\147\x73\153\143\163\165\153\x67\145"]); ngagwiymmmycgscu: } qiawociayswicugw: } public function ksmuqagksoesaqcy($icwicymcioeyeyek) { if (!($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto qimomesqamyyicmo; } $acoioasmiqcwagsa->mykuoqakuiwsoiss($icwicymcioeyeyek)->save()->ieyosyaaisyquesq(); qimomesqamyyicmo: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto kkacggiosquqagew; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\x75\x72\147\x65", ["\141\x6a\x61\170" => Ajax::myikkigscysoykgy]); kkacggiosquqagew: } public function gecscuoekkwggyyk($owgumcsyqsamiemg) { $this->qsiwaqwsyasqsqcq(); return $owgumcsyqsamiemg; } public function iemaakgqgqosiecm() { Process::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto augqweqsqioesmim; } Ajax::symcgieuakksimmu(); augqweqsqioesmim: } public function wcuiiomgskcsukge() { if (!$this->siwumcgggquiyyiu()) { goto aescssauecumgwso; } $this->qsiwaqwsyasqsqcq(); aescssauecumgwso: } public function ugcygqcsgkcuwmye() { if (!$this->quycagwoqskgemms(self::wowuwuigyoceikas . "\55\x70\165\x72\147\145\55\x61\x6c\x6c")) { goto cooeoemccqiyewks; } $this->qsiwaqwsyasqsqcq(); $this->oaumimwssciwumys("\x43\x61\143\x68\145\40\x70\165\162\x67\151\x6e\147\40\x63\x6f\x6d\x70\x6c\x65\x74\145"); die("\x43\x61\x63\x68\x65\40\x70\165\162\x67\x65\144"); cooeoemccqiyewks: } public function sqmcyegkigweiwks($auwuoyyagaiegwae = []) { if (!is_array($auwuoyyagaiegwae) || count($auwuoyyagaiegwae) === 0) { goto qcceyyqiuiqcyqqm; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); goto ssesmiwwmsayksum; qcceyyqiuiqcyqqm: $this->qsiwaqwsyasqsqcq(); ssesmiwwmsayksum: } public function kiogwmegmywoicqc($aqqmosqmsuueyaes, $swyywyqesisooayc, $icwicymcioeyeyek) { if (!$this->ciqymiuuasygmkqc()) { goto qkwckeqowgaokkuy; } $post = ManipulateArray::get($icwicymcioeyeyek, "\x63\x6f\155\x6d\x65\x6e\164\x5f\160\157\x73\x74\137\111\x44"); $this->qcmkoooqkmgeqcei($post); qkwckeqowgaokkuy: } public function kowwocgaymsyewco($uwomkgseoiegeume, $msqkueqksqwmskak, $aqqmosqmsuueyaes) { if (!($msqkueqksqwmskak !== $uwomkgseoiegeume && self::iiismwgquaowosqw === $uwomkgseoiegeume && $this->ciqymiuuasygmkqc())) { goto kqkymieyyqaoeymw; } $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); $this->qcmkoooqkmgeqcei($post); kqkymieyyqaoeymw: } public function mueyyqomowywaqas($aqqmosqmsuueyaes) { if (!$this->ciqymiuuasygmkqc()) { goto gqyyccceswkqcmaa; } $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); $this->qcmkoooqkmgeqcei($post); gqyyccceswkqcmaa: } public function smsqsickgyokwwoi() { if (!$this->siwumcgggquiyyiu()) { goto sykuuisikqcwuaqu; } $this->qsiwaqwsyasqsqcq(); sykuuisikqcwuaqu: } public function ymykuicwcauiouac($post) { if (!Setting::siwumcgggquiyyiu()) { goto mgieeyuyuoeccaog; } $post = ManipulatePost::get($post); $cwoekuisuwismgyu = [self::wmmucsiyiyusmssm, self::scwmgoegsukauoku]; $euosoakesygqesgc = ManipulatePost::ucwmcwqmqwaymkkc($post); if (!(ManipulatePost::ycqquoiyyuesegsy($post) && in_array($euosoakesygqesgc, $cwoekuisuwismgyu, true) && !is_int(DecoratorPost::somkqoqeimmeemuq($post)) && !is_int(DecoratorPost::uiwesgekcwiicksy($post)))) { goto bagkewioewygysea; } if (Setting::siwumcgggquiyyiu(Setting::ayeokkuakcuqemya)) { goto mquyemuqcqeassqc; } $this->qcmkoooqkmgeqcei($post); goto weiaigyyigkusucy; mquyemuqcqeassqc: $this->qsiwaqwsyasqsqcq($post); weiaigyyigkusucy: bagkewioewygysea: mgieeyuyuoeccaog: } public function qcmkoooqkmgeqcei($post) : bool { $ksaameoqigiaoigg = false; if (!$post) { goto amgsicqmemeuuaem; } $auwuoyyagaiegwae = ManipulatePost::sewesguyaqwccksa($post); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae); amgsicqmemeuuaem: return $ksaameoqigiaoigg; } public function meuoussiaqygscky($yekqqesogweecqyc, $icwicymcioeyeyek) { $iueymcwwscwqkiyq = ManipulatePost::ucwmcwqmqwaymkkc($yekqqesogweecqyc); if (in_array($iueymcwwscwqkiyq, [self::ywskismomwmcsqam, self::sgoswgskyiiwkyuo, self::iuemaweiggauysws], true)) { goto sgkwaiuukkaqyqki; } $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($yekqqesogweecqyc); if (!($aaokuekaimigoyue && $aaokuekaimigoyue !== $icwicymcioeyeyek[self::uiaeiwkkmoayqasu])) { goto gwksywaoeowkesei; } $this->qcmkoooqkmgeqcei($yekqqesogweecqyc); gwksywaoeowkesei: sgkwaiuukkaqyqki: } public function ookaiyusaygaecuy($uwomkgseoiegeume, $msqkueqksqwmskak, $post) { if (!($msqkueqksqwmskak !== self::wmmucsiyiyusmssm && $uwomkgseoiegeume === self::wmmucsiyiyusmssm)) { goto gusgywuaimwooawc; } if ($this->siwumcgggquiyyiu()) { goto emagssesowicacoa; } $this->qcmkoooqkmgeqcei($post); goto cauqmacqkssciwyq; emagssesowicacoa: $this->qsiwaqwsyasqsqcq(); cauqmacqkssciwyq: gusgywuaimwooawc: } public function ueakqseaucsqegmi() : bool { return $this->siwumcgggquiyyiu(Setting::ukcoqoawagmcmoym); } public function siwumcgggquiyyiu($wmekckkyoiyickmk = Setting::ayeokkuakcuqemya) : bool { return Setting::siwumcgggquiyyiu($wmekckkyoiyickmk); } public function ciqymiuuasygmkqc() : bool { return Setting::ocyemqkgwaiyeioe(); } public function ewymiimwwmusqomq($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto uugwoygiyecgymgw; } $this->qsiwaqwsyasqsqcq($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya); uugwoygiyecgymgw: } public function ssycyiiwoukuiymg($ccowyogiqwikkkie, $ccamueccusigaaio) { $aokagokqyuysuksm = $uusmaiomayssaecw = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto awaaowoqskgokwiy; } if (!$ccamueccusigaaio instanceof WP_Term) { goto acmgueaoaaweiqqu; } $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($ccamueccusigaaio); $uusmaiomayssaecw = self::yoayaissyomokiui; acmgueaoaaweiqqu: goto uqiekawkwcegsumy; awaaowoqskgokwiy: $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($ccamueccusigaaio); $uusmaiomayssaecw = self::mswoacegomcucaik; uqiekawkwcegsumy: if (!($uusmaiomayssaecw && $aokagokqyuysuksm)) { goto kgikoagqwkuocesg; } $ccowyogiqwikkkie["\157\160\x74\x5f\x70\165\162\147\145\137\143\141\x63\150\x65"] = $this->iwiqycmucceckwcq(__("\x72\x65\x4f\x70\164\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION), $aokagokqyuysuksm, $uusmaiomayssaecw); kgikoagqwkuocesg: return $ccowyogiqwikkkie; } }
