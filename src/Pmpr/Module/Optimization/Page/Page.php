<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5223571c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\137\x63\x68\x65\143\153\x5f\x62\x75\144\x67\145\164\x5f\150\157\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\151\156\151\x74", [$this, "\171\x65\x79\151\147\x75\x79\x65\147\x6d\x6d\x79\x75\163\145\141"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\x6f\145\x6f\x61\x77\145\145\163\145\161\151\x79\x65\x73\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137\147\145\164\137\x62\x75\x64\x67\x65\164"), [$this, "\x71\147\x6b\147\155\x61\151\x69\167\x67\163\157\x75\x67\147\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!is_admin()) { goto qwiyicoywcekgyce; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto ooooceiweeackgie; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto gkeymcqqsewayscs; ooooceiweeackgie: Ajax::symcgieuakksimmu(); gkeymcqqsewayscs: qwiyicoywcekgyce: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto tagquiiokseckkqs; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); tagquiiokseckkqs: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto gcaykgmmmqomsyis; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto swuggqyiaiqywgge; } goto ocwouquuwsaqakae; swuggqyiaiqywgge: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto qoacckkkwsqkokye; } $this->yoeoaweeseqiyesg(); qoacckkkwsqkokye: ocwouquuwsaqakae: gcaykgmmmqomsyis: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto yccuomocgmewkeca; } yccuomocgmewkeca: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
