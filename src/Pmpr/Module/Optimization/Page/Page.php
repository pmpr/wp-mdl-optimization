<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0dd9fa068f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\x63\x68\145\x63\x6b\137\x62\165\144\x67\145\164\x5f\150\157\157\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\151\x6e\x69\x74"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\x69\156\x69\x74", [$this, "\171\145\x79\151\147\x75\171\x65\147\x6d\155\171\165\x73\x65\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\157\x65\157\141\167\x65\x65\x73\145\x71\151\171\x65\163\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x67\x65\164\137\142\x75\144\147\x65\164"), [$this, "\x71\x67\153\x67\155\x61\151\151\167\147\x73\x6f\165\x67\147\163"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto cigesysuauaiccms; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gwiaimosqoiquwkc; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto owgakkqgckqcegoi; gwiaimosqoiquwkc: Ajax::symcgieuakksimmu(); owgakkqgckqcegoi: cigesysuauaiccms: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto qumkwsqqocooyuoq; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); qumkwsqqocooyuoq: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto wsemeeocquawyauo; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto kkewoqqowugagwoy; } goto wwswmaewcaisauei; kkewoqqowugagwoy: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto gcskyqewysqaceeg; } $this->yoeoaweeseqiyesg(); gcskyqewysqaceeg: wwswmaewcaisauei: wsemeeocquawyauo: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto ocgkwqqmgasuoies; } ocgkwqqmgasuoies: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
