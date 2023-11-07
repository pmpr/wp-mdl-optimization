<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a156d8f54b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\x73\x70\x65\145\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\x5f\163\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto oksqsucimimsswcg; } if (function_exists("\x67\145\164\x5f\x6e\x65\x74\167\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto gcecieuocqawmgci; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto msmmiaumiasmsiog; gcecieuocqawmgci: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\160\x73\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); msmmiaumiasmsiog: oksqsucimimsswcg: return $ucaaeyusaoameywi; } }
