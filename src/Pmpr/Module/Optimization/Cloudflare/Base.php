<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5223571c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Cloudflare; class Base extends Common { const gcqgqqsiqcaosqqk = "\x57\120\55\x4f\x70\164\55\x43\x6c\157\165\144\x66\x6c\141\162\x65"; const ceoukesuuuqaoaqa = self::yyeseoqwcecweeii . "\143\141\143\x68\x65\137\160\x75\162\147\x65\x5f\143\x72\157\x6e"; protected ?API $api = null; public function auamgqiwisysomsa() : ?API { return $this->api; } public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function yckiegaseygiwiey() { insert_with_markers($this->kockkiymkccassgi(), "\x4f\160\x74\x69\x6d\x69\172\141\x74\151\157\156\x20\103\x6c\x6f\165\144\146\154\x61\x72\145", []); } public function aayykckyqcieayqc(&$iswcokucwmiosiaq = null) { $this->qsiwaqwsyasqsqcq(true); $this->auamgqiwisysomsa()->mwiqewoumqkqqaos($this->weysguygiseoukqw(Setting::aiooimoyskeuggsu), $iswcokucwmiosiaq); if (!($sowkswowciayawwu = $this->weysguygiseoukqw(Setting::myguioueuiaacsko, ''))) { goto ssagcgqaucssyego; } $this->auamgqiwisysomsa()->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq); ssagcgqaucssyego: if (!($iowmousgcuymioua = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg, ''))) { goto mqgeseysuwcaqwiy; } $this->auamgqiwisysomsa()->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); mqgeseysuwcaqwiy: $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::aygoyiggsequgiua, 0); if (!($yiuogaeewyockeak = wp_next_scheduled(self::ceoukesuuuqaoaqa))) { goto ekoqieigyoeyauqa; } wp_unschedule_event($yiuogaeewyockeak, self::ceoukesuuuqaoaqa); wp_clear_scheduled_hook(self::ceoukesuuuqaoaqa); ekoqieigyoeyauqa: $this->oaumimwssciwumys("\122\145\163\145\x74\40\x63\157\x6d\x70\x6c\145\x74\145"); } }
