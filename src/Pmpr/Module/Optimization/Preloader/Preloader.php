<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\x72\x65\x6c\x6f\x61\x64\x5f\x73\x74\x61\x72\164\137\157\160\x74\151\x6f\156"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\160\162\x65\x6c\x6f\141\x64\145\162\x5f\x63\162\157\x6e\x5f\152\157\142\x5f\x68\x6f\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\156\x69\x74", [$this, "\x79\145\x79\151\147\x75\171\x65\147\x6d\x6d\171\x75\x73\x65\x61"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\x61\161\157\x73\157\143\x69\161\x63\153\x6f\x63\157\x73\145"]); $this->waqewsckuayqguos("\x6f\160\164\137\165\x70\x64\x61\x74\145\x5f\162\x65\x6d\157\164\x65\137\x61\x70\160\163", [$this, "\x79\153\151\x71\x61\141\x6b\155\153\x73\x77\151\x73\161\x6b\x63"]); } public function iemaakgqgqosiecm() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto mqoygcuqwacgycek; } Ajax::symcgieuakksimmu(); mqoygcuqwacgycek: } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto agyycikucwgmysee; } $igcseousimqsewkw->uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); agyycikucwgmysee: } public function yeyiguyegmmyusea() { if ($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ikmkgmwegyasgqmo)) { goto aiukiwqmikscoswm; } $this->ykiqaakmkswisqkc(); aiukiwqmikscoswm: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto mcmkqgkwyqoiikcq; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\145\x6c\x6f\141\x64", ["\x61\152\141\170" => Ajax::myikkigscysoykgy]); mcmkqgkwyqoiikcq: Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); } public function ykiqaakmkswisqkc() { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto yyieomeeqycmikqw; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto ssyukuseoymackeo; } $qkqgcaykemoiecma->delete(self::ikmkgmwegyasgqmo); goto gskacikgkwcuauko; ssyukuseoymackeo: $qkqgcaykemoiecma->update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); gskacikgkwcuauko: yyieomeeqycmikqw: } }
