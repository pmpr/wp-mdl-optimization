<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor; use Elementor\Core\Base\Document; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VBSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; class Elementor extends Container { const tgiykmsgkmeacgia = 'popup'; protected string $type = ''; protected ?Document $document = null; public function qiccuiwooiquycsg(Document $cmckowaakauyescq) : self { $this->type = $cmckowaakauyescq->get_name(); $this->document = $cmckowaakauyescq; return $this; } public function wkoeqacyucowqiau() : ?Document { return $this->document; } public function uyokqiimmwaekses() : self { $this->type = ''; return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('elementor/frontend/before_get_builder_content', [$this, 'cwuciokumumkamwi'])->qcsmikeggeemccuu('elementor/frontend/get_builder_content', [$this, 'cqcsqocisycyoksu']); $this->qcsmikeggeemccuu('elementor/core/files/clear_cache', [$this, 'sqmcyegkigweiwks'])->qcsmikeggeemccuu('delete_option__elementor_global_css', [$this, 'sqmcyegkigweiwks'])->qcsmikeggeemccuu('update_option__elementor_global_css', [$this, 'sqmcyegkigweiwks'])->qcsmikeggeemccuu('elementor/maintenance_mode/mode_changed', [$this, 'sqmcyegkigweiwks']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('elementor/frontend/the_content', [$this, 'aimycmkwossgasgs'])->cecaguuoecmccuse('elementor/document/wrapper_attributes', [$this, 'aicaiommyggoqoks'], 10, 2); $this->cecaguuoecmccuse('option_elementor_lazy_load_background_images', [$this, 'cwymgqwaayskymyu'])->cecaguuoecmccuse('default_option_elementor_lazy_load_background_images', [$this, 'cwymgqwaayskymyu']); $this->cecaguuoecmccuse('option_elementor_optimized_image_loading', [$this, 'ewqgqgqekqyasiuo'])->cecaguuoecmccuse('default_option_elementor_optimized_image_loading', [$this, 'ewqgqgqekqyasiuo']); if (!empty($this->weysguygiseoukqw(Setting::ceoiqegoyougggms))) { $this->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'asset_delay_excludes', [$this, 'isiwqsgwgkeuwiyy'], 10, 2); } } public function ewqgqgqekqyasiuo($eqgoocgaqwqcimie) { if ($this->weysguygiseoukqw(LazyLoadSetting::wsksomawosgqayso)) { $eqgoocgaqwqcimie = '0'; } return $eqgoocgaqwqcimie; } public function cwymgqwaayskymyu($eqgoocgaqwqcimie) { if ($this->weysguygiseoukqw(LazyLoadSetting::owqmaigscwikmwgg)) { $eqgoocgaqwqcimie = '0'; } return $eqgoocgaqwqcimie; } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Setting::symcgieuakksimmu(); } } public function isiwqsgwgkeuwiyy($couiucmsqaieciue, $amakmumgguksgmum) { if ('excluded_delay_styles' === $amakmumgguksgmum && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc()) { $qiouiwasaauyaaue = $this->weysguygiseoukqw(Setting::ceoiqegoyougggms); foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { switch ($omkysikckkcieckq) { case Setting::uymyaaikuaomguga: $couiucmsqaieciue[] = "/elementor/css/post-{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu()}"; break; } } } return $couiucmsqaieciue; } private function suyuqmqcakoaiscy() : bool { return 'internal' !== $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('elementor_css_print_method'); } public function sqmcyegkigweiwks() { if ($this->suyuqmqcakoaiscy()) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_html_cache'); } } public function ycucekgqqeikgqcw() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ogwesogckacoyggy()) { $gmuyswmqskwwgqqe = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms('ELEMENTOR_ASSETS_URL'); if ($gmuyswmqskwwgqqe) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'elementor-dialog', "{$gmuyswmqskwwgqqe}css/conditionals/dialog.css")); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'elementor-lightbox', "{$gmuyswmqskwwgqqe}css/conditionals/lightbox.css")); } } } public function aicaiommyggoqoks($siquossayskcwkea, $cmckowaakauyescq) { if (is_array($siquossayskcwkea) && $cmckowaakauyescq instanceof Document && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { switch ($this->gueasuouwqysmomu()) { case self::tgiykmsgkmeacgia: $siquossayskcwkea = Popup::symcgieuakksimmu()->aicaiommyggoqoks($siquossayskcwkea, $cmckowaakauyescq); break; } } return $siquossayskcwkea; } public function cwuciokumumkamwi($cmckowaakauyescq) { if ($cmckowaakauyescq instanceof Document && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $this->qiccuiwooiquycsg($cmckowaakauyescq); switch ($this->gueasuouwqysmomu()) { case self::tgiykmsgkmeacgia: echo Popup::symcgieuakksimmu()->eweuqkioyiiiqgcw($cmckowaakauyescq); break; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (is_string($ewgwqamkygiqaawc) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { switch ($this->gueasuouwqysmomu()) { case self::tgiykmsgkmeacgia: $ewgwqamkygiqaawc = Popup::symcgieuakksimmu()->aimycmkwossgasgs($ewgwqamkygiqaawc, $this->wkoeqacyucowqiau()); break; } } return $ewgwqamkygiqaawc; } public function cqcsqocisycyoksu($cmckowaakauyescq) { if ($cmckowaakauyescq instanceof Document && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $sqeykgyoooqysmca = $cmckowaakauyescq->get_name(); switch ($sqeykgyoooqysmca) { case self::tgiykmsgkmeacgia: echo Popup::symcgieuakksimmu()->ieoqyoeecukogies($cmckowaakauyescq); break; } if ($sqeykgyoooqysmca === $this->gueasuouwqysmomu()) { $this->uyokqiimmwaekses(); } } } }
