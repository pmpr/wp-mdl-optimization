<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\x63\x68\x65\143\153\137\x62\x75\x64\x67\145\164\x5f\150\157\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\x69\156\151\x74", [$this, "\x79\x65\x79\x69\147\x75\171\145\147\x6d\155\171\165\x73\x65\141"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\x6f\x65\157\141\x77\145\145\x73\145\161\151\x79\x65\163\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\137\147\x65\x74\137\142\x75\x64\x67\145\x74"), [$this, "\x71\147\153\147\155\x61\151\151\x77\x67\163\157\165\147\x67\163"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto ngagwiymmmycgscu; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wsckacayikksiswo; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto qiawociayswicugw; wsckacayikksiswo: Ajax::symcgieuakksimmu(); qiawociayswicugw: ngagwiymmmycgscu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto qimomesqamyyicmo; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); qimomesqamyyicmo: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto cooeoemccqiyewks; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto augqweqsqioesmim; } goto aescssauecumgwso; augqweqsqioesmim: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto kkacggiosquqagew; } $this->yoeoaweeseqiyesg(); kkacggiosquqagew: aescssauecumgwso: cooeoemccqiyewks: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto qcceyyqiuiqcyqqm; } qcceyyqiuiqcyqqm: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
