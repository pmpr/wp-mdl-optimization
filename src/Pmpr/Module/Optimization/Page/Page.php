<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\137\143\150\145\x63\153\x5f\142\x75\144\x67\145\164\x5f\150\x6f\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\151\156\151\x74", [$this, "\x79\x65\171\x69\147\165\171\x65\x67\x6d\155\171\x75\163\145\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\x79\x6f\x65\157\141\x77\x65\x65\x73\145\x71\151\x79\x65\163\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137\147\x65\164\137\x62\165\144\x67\x65\x74"), [$this, "\161\147\x6b\x67\155\141\151\x69\x77\x67\163\x6f\x75\147\x67\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto agyycikucwgmysee; } Tool::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wiiqigwgyuiuksia; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); goto mqoygcuqwacgycek; wiiqigwgyuiuksia: Ajax::symcgieuakksimmu(); mqoygcuqwacgycek: agyycikucwgmysee: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto aiukiwqmikscoswm; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); aiukiwqmikscoswm: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto yyieomeeqycmikqw; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto ssyukuseoymackeo; } goto gskacikgkwcuauko; ssyukuseoymackeo: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto mcmkqgkwyqoiikcq; } $this->yoeoaweeseqiyesg(); mcmkqgkwyqoiikcq: gskacikgkwcuauko: yyieomeeqycmikqw: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto kwiuqqwamsimqgme; } kwiuqqwamsimqgme: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
