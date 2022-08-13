<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62f7cb380fe9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\x70\145\145\x64"; const okeoeeywmosegiiy = "\x66\141\151\x6c\137\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto imgagmqusgiqissi; } if (function_exists("\147\x65\164\137\x6e\145\x74\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto qikmwaessamuueoe; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto aeekgeqawgsmgiqw; qikmwaessamuueoe: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\x70\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); aeekgeqawgsmgiqw: imgagmqusgiqissi: return $ucaaeyusaoameywi; } }
