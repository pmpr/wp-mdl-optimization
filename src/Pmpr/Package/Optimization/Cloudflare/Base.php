<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; class Base extends Common { const HEADER = "\x57\120\55\117\160\164\x2d\103\x6c\157\x75\144\146\x6c\141\x72\x65"; const CRONE_SCHEDULE = self::OPT_CF . "\x63\141\143\x68\145\x5f\160\165\x72\x67\x65\x5f\x63\x72\157\x6e"; protected ?API $api = null; public function auamgqiwisysomsa() : ?API { return $this->api; } public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function yckiegaseygiwiey() { insert_with_markers($this->kockkiymkccassgi(), "\117\x70\x74\151\155\151\172\141\x74\151\x6f\x6e\40\103\x6c\x6f\165\144\x66\x6c\141\162\x65", []); } public function aayykckyqcieayqc(&$iswcokucwmiosiaq = null) { goto yyymkoaumewsqoum; eegyoesmeiassqwe: if (!($yiuogaeewyockeak = wp_next_scheduled(self::CRONE_SCHEDULE))) { goto eekswukgkqgmecuk; } goto mwwiiacsqqgmaoso; cummaumcqioogqei: $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::CF_CACHE_ENABLED, 0); goto eegyoesmeiassqwe; yiwmwceouauueusw: wp_clear_scheduled_hook(self::CRONE_SCHEDULE); goto iesqwciwsqiwqoga; iwioqeqiwwuqmakq: $this->auamgqiwisysomsa()->mwiqewoumqkqqaos($this->weysguygiseoukqw(Setting::CF_OLD_BC_TTL), $iswcokucwmiosiaq); goto wyksgeyiosqccake; gckkewigoacuoekm: euimwgmwmmaogkcw: goto cummaumcqioogqei; iesqwciwsqiwqoga: eekswukgkqgmecuk: goto yyaeqgumuoaseuiu; muuwgqsusiswkams: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); goto gckkewigoacuoekm; qoaagigyswamkmwg: if (!($iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID, ''))) { goto euimwgmwmmaogkcw; } goto muuwgqsusiswkams; yqgoeeuaasekacys: ceecqioeaaiqgqsu: goto qoaagigyswamkmwg; yyaeqgumuoaseuiu: $this->oaumimwssciwumys("\x52\x65\x73\x65\x74\40\x63\157\x6d\160\154\145\164\x65"); goto qiayqwouwmkgkgsa; mwwiiacsqqgmaoso: wp_unschedule_event($yiuogaeewyockeak, self::CRONE_SCHEDULE); goto yiwmwceouauueusw; wyksgeyiosqccake: if (!($sowkswowciayawwu = $this->weysguygiseoukqw(Setting::CF_PAGE_RULE_ID, ''))) { goto ceecqioeaaiqgqsu; } goto qowiysuioeqesgwc; yyymkoaumewsqoum: $this->qsiwaqwsyasqsqcq(true); goto iwioqeqiwwuqmakq; qowiysuioeqesgwc: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq); goto yqgoeeuaasekacys; qiayqwouwmkgkgsa: } }
