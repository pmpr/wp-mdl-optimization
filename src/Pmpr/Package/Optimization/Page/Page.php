<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Package\Optimization\Page\Basic\Basic; use Pmpr\Package\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\137\143\x68\x65\143\153\x5f\x62\165\144\147\x65\x74\x5f\150\157\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\x69\156\x69\x74", [$this, "\x79\x65\171\151\x67\x75\x79\x65\147\155\x6d\x79\165\x73\145\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\x6f\145\157\141\167\145\145\163\145\161\x69\x79\145\163\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x67\145\x74\x5f\142\x75\x64\x67\x65\x74"), [$this, "\x71\147\153\147\x6d\x61\x69\x69\x77\x67\163\157\x75\x67\x67\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!is_admin()) { goto qwiyicoywcekgyce; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto ooooceiweeackgie; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto gkeymcqqsewayscs; ooooceiweeackgie: Ajax::symcgieuakksimmu(); gkeymcqqsewayscs: qwiyicoywcekgyce: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto tagquiiokseckkqs; } DecoratorCron::uwugaiqywmseksqm(time(), self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); tagquiiokseckkqs: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto gcaykgmmmqomsyis; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto swuggqyiaiqywgge; } goto ocwouquuwsaqakae; swuggqyiaiqywgge: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto qoacckkkwsqkokye; } $this->yoeoaweeseqiyesg(); qoacckkkwsqkokye: ocwouquuwsaqakae: gcaykgmmmqomsyis: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto yccuomocgmewkeca; } yccuomocgmewkeca: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
