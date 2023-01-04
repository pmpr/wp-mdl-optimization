<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b5db635063d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\137\163\x70\x65\x65\144"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\137\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto iuuuususuuuaieem; } if (function_exists("\x67\145\x74\x5f\x6e\x65\164\x77\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto uykousayyomcaeaa; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto uimeeckqksqeekqq; uykousayyomcaeaa: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uimeeckqksqeekqq: iuuuususuuuaieem: return $ucaaeyusaoameywi; } }
