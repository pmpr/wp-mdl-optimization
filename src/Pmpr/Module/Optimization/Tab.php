<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c1ef6c8776             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\x73\160\145\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto qsyqcokomswykyso; } if (function_exists("\147\x65\164\137\x6e\x65\x74\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto iacwyogogoccmwsg; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto wqmwcuggcisqieao; iacwyogogoccmwsg: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wqmwcuggcisqieao: qsyqcokomswykyso: return $ucaaeyusaoameywi; } }
