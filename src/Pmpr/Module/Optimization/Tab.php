<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\x73\x70\x65\x65\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\137\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto iuwccksomkkouogy; } if (function_exists("\147\x65\x74\x5f\156\145\164\x77\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto aqwoykqaquewcaki; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mesesokuoomcioom; aqwoykqaquewcaki: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\x70\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mesesokuoomcioom: iuwccksomkkouogy: return $ucaaeyusaoameywi; } }
