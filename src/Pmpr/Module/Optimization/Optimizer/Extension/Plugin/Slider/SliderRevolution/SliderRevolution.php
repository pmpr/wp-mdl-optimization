<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine\SR6; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine\SR7; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class SliderRevolution extends Container { use PageManagerEngineTrait; public function wigskegsqequoeks() { $this->cecaguuoecmccuse('revslider_get_slider_div', [$this, 'yocwgqeegceismag'], 0, 2)->cecaguuoecmccuse('revslider_get_slider_wrapper_div', [$this, 'yocwgqeegceismag'], 0, 2)->cecaguuoecmccuse('revslider_add_slider_base_post', [$this, 'gukysusoeycyuacg'], 999); $this->cecaguuoecmccuse('revslider_close_slider_wrapper_div', [$this, 'gkkusewqociyasiu'], 10, 2)->cecaguuoecmccuse('revslider_close_slider_div_and_call_prepare', [$this, 'hvwoeagkqimmycqq'], 10, 2); } public function ycwossousseoskog($wwqymgsmqsouaoos) { return $wwqymgsmqsouaoos->get_html_id(); } public function yocwgqeegceismag($ewgwqamkygiqaawc, $wwqymgsmqsouaoos) { if ($this->umqkmkaeckscsuqw($wwqymgsmqsouaoos) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $aokagokqyuysuksm = esc_attr($this->ycwossousseoskog($wwqymgsmqsouaoos)); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ewgwqamkygiqaawc, 'sr7-module') || $yyauwyaeewsickwk->skksumsyamssouqc($ewgwqamkygiqaawc, 'rs-module-wrap')) { $ewgwqamkygiqaawc = "<pr-sw id=\"pr_{$aokagokqyuysuksm}\">" . $ewgwqamkygiqaawc; } } return $ewgwqamkygiqaawc; } public function gukysusoeycyuacg($wwqymgsmqsouaoos) { if ($this->umqkmkaeckscsuqw($wwqymgsmqsouaoos) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { echo '</pr-sw>'; } } public function gkkusewqociyasiu($ewgwqamkygiqaawc, $wwqymgsmqsouaoos) : string { if ($this->umqkmkaeckscsuqw($wwqymgsmqsouaoos) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $goqqimcssiyagkwy = SR6::symcgieuakksimmu(); $goqqimcssiyagkwy->maqaiymckiuukses($wwqymgsmqsouaoos, $goqqimcssiyagkwy::csiimaowugwesqke); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $goqqimcssiyagkwy->suceocykemwuyiyg($wwqymgsmqsouaoos); if ($nsmgceoqaqogqmuw) { $ewgwqamkygiqaawc .= $nsmgceoqaqogqmuw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qiokaomckmywuwqo($kswaimykcacqyaay, ['class' => 'pr-sr6']); } } return $ewgwqamkygiqaawc; } public function hvwoeagkqimmycqq($ewgwqamkygiqaawc, $wwqymgsmqsouaoos) : string { if ($this->umqkmkaeckscsuqw($wwqymgsmqsouaoos) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $goqqimcssiyagkwy = SR7::symcgieuakksimmu(); $goqqimcssiyagkwy->maqaiymckiuukses($wwqymgsmqsouaoos, $goqqimcssiyagkwy::gwcwicqkomiaaqwm); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $goqqimcssiyagkwy->suceocykemwuyiyg($wwqymgsmqsouaoos); if ($nsmgceoqaqogqmuw) { $ewgwqamkygiqaawc .= $nsmgceoqaqogqmuw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qiokaomckmywuwqo($kswaimykcacqyaay, ['class' => 'pr-sr7']); } } return $ewgwqamkygiqaawc; } public function umqkmkaeckscsuqw($wwqymgsmqsouaoos) : bool { $msameyekicqaquew = $this->wkagassgcaqeosio()->mmosakwauqogckem(Constants::mayesweykoooyugy); return isset($msameyekicqaquew['sliders']) && in_array($this->ycwossousseoskog($wwqymgsmqsouaoos), $msameyekicqaquew['sliders'], true); } }
