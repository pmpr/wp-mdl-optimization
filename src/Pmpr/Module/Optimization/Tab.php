<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\x5f\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\146\141\151\154\x5f\163\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qsyqcokomswykyso; } if (function_exists("\x67\x65\x74\x5f\156\x65\x74\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto iacwyogogoccmwsg; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto wqmwcuggcisqieao; iacwyogogoccmwsg: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wqmwcuggcisqieao: qsyqcokomswykyso: return $ucaaeyusaoameywi; } }
