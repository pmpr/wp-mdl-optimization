<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\x73\x70\x65\145\144"; const okeoeeywmosegiiy = "\146\x61\x69\x6c\x5f\x73\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ggoimgeeuugseiwk; } if (function_exists("\x67\x65\x74\137\156\145\164\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto qycsooiomiugimqc; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto qioswooukgoowsuc; qycsooiomiugimqc: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); qioswooukgoowsuc: ggoimgeeuugseiwk: return $ucaaeyusaoameywi; } }
