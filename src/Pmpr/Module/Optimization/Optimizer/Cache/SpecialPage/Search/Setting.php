<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Section; class Setting extends Section { const ussmyewuqswwkcma = Constants::yayciqueeakqwese . Constants::wassgkgmoyygyaya; const ckekocwocaogoeye = self::ussmyewuqswwkcma . 'term_scope'; const okomcksyqygykaoo = self::ussmyewuqswwkcma . 'result_scope'; const mwcsquoskuckeweg = self::ussmyewuqswwkcma . 'min_searched_per_month'; public function ykwqaukkycogooii() { $kqwkcgkesygcagqo = __('Search Page', PR__MDL__OPTIMIZATION); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::yayciqueeakqwese)->gswweykyogmsyawy($kqwkcgkesygcagqo)->saemoowcasogykak(IconInterface::ymyiywwagwqmmuuk)->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::ckekocwocaogoeye)->gswweykyogmsyawy(__('Search terms scope', PR__MDL__OPTIMIZATION))->eumecwmqmukqgyea()->eyygsasuqmommkua(Constants::yuwueyysmgkecygw)->kesomeowemmyygey(Constants::ALL, __('All searched terms', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::yuwueyysmgkecygw, __('Just most searched terms', PR__MDL__OPTIMIZATION))->qyucewwiggkyeaso(Constants::yuwueyysmgkecygw, self::mwcsquoskuckeweg))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::mwcsquoskuckeweg)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Minimum monthly search of term', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(10, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(10))->kesomeowemmyygey(20, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(20))->kesomeowemmyygey(50, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(50))->kesomeowemmyygey(100, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(100)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::okomcksyqygykaoo)->gswweykyogmsyawy(__('Search result scope', PR__MDL__OPTIMIZATION))->eumecwmqmukqgyea()->eyygsasuqmommkua(Constants::qwssyugmmaoeqiei)->kesomeowemmyygey(Constants::ALL, __('All search pages regardless of result', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::qwssyugmmaoeqiei, __('Only search pages with results', PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yqgagqgesqyuyuqq('search_optimize_page')->mkmssscwmeekwgqo()->gswweykyogmsyawy(sprintf(__('Optimize %s', PR__MDL__OPTIMIZATION), $kqwkcgkesygcagqo))->oguessuismosauuu($this->wiyiegaqccicueem($kqwkcgkesygcagqo, Constants::yayciqueeakqwese)))); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $qiouiwasaauyaaue[self::ckekocwocaogoeye] = Constants::yuwueyysmgkecygw; $qiouiwasaauyaaue[self::okomcksyqygykaoo] = Constants::qwssyugmmaoeqiei; $qiouiwasaauyaaue[self::mwcsquoskuckeweg] = 10; return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } }
