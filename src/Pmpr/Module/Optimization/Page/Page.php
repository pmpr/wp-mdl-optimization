<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\143\150\x65\143\153\137\142\165\x64\x67\145\164\x5f\x68\157\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\x69\x6e\151\x74", [$this, "\171\145\x79\151\147\x75\x79\145\x67\x6d\155\x79\x75\163\145\141"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\x79\x6f\x65\157\x61\167\145\145\x73\145\161\x69\x79\x65\x73\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\x67\x65\x74\137\142\165\144\147\145\164"), [$this, "\x71\147\x6b\147\155\141\151\151\167\x67\163\x6f\165\147\147\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto gwiaimosqoiquwkc; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qiaaqkymeuuueoqk; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto ugswokwmkumcmigc; qiaaqkymeuuueoqk: Ajax::symcgieuakksimmu(); ugswokwmkumcmigc: gwiaimosqoiquwkc: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto owgakkqgckqcegoi; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); owgakkqgckqcegoi: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto kkewoqqowugagwoy; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto qumkwsqqocooyuoq; } goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto cigesysuauaiccms; } $this->yoeoaweeseqiyesg(); cigesysuauaiccms: gcskyqewysqaceeg: kkewoqqowugagwoy: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto wwswmaewcaisauei; } wwswmaewcaisauei: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }