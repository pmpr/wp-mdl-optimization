<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Optimization\Container; class Common extends Container { const OPT_CF = "\x6f\160\x74\x2d\143\146"; const HOOK_PREFIX = "\x6f\x70\164\x5f\x63\154\157\165\x64\x66\x6c\141\162\x65\x5f"; const CACHE_POST_METADATA = self::OPT_CF . "\x63\141\x63\x68\145\x5f\x6d\145\x74\x61\144\x61\164\x61"; public function gskqygiceygcguyo() : string { $skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\111\115\111\x5a\x41\124\x49\117\116\137\x43\x4c\117\x55\x44\x46\114\x41\122\x45\x5f\x50\x41\124\x48", ''); if ($skacuygeqykiwiwy) { goto oqwwacmigasucsoc; } $this->saqqeqmcyyoeqici("\x4f\x50\124\x49\115\x49\x5a\x41\124\x49\x4f\x4e\x5f\x43\x4c\x4f\125\104\x46\114\x41\122\x45\x5f\120\101\124\x48\40\x69\x73\40\145\155\x70\x74\171"); oqwwacmigasucsoc: return untrailingslashit($skacuygeqykiwiwy); } public function yskoeokmmyoamaky() { return $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID); } public function yayksoygskcuaygq() : array { return (array) $this->weysguygiseoukqw(Setting::CF_ZONEID_LIST); } public function oywimmyysigqkeqa() : ?string { return (string) $this->weysguygiseoukqw(Setting::CF_ZONEID); } public function yusooeuwemoqcwmm() : bool { return $this->weysguygiseoukqw(Setting::CF_CACHE_ENABLED) && $this->weysguygiseoukqw(Setting::CF_ZONEID); } public function caoeycyeiakamams() : bool { return (bool) $this->weysguygiseoukqw(Setting::CF_PURGE_ONLY_HTML); } public function wysmaqwyyqeymuoq() : bool { return (bool) $this->weysguygiseoukqw(Setting::CF_DISABLE_CACHE_PURGING_QUEUE); } public function yoaiuuuwwssswyqa() { return DecoratorOption::get(Setting::CF_DEV_MODE, "\x6f\146\146"); } public function awwuyycwuuuggkqy($eqgoocgaqwqcimie) { DecoratorOption::update(Setting::CF_DEV_MODE, $eqgoocgaqwqcimie); } public function eisusiekaciioueg() : bool { return $this->yoaiuuuwwssswyqa() === "\157\156"; } }
