<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; class CDNData extends Model { const gycwocuuococmiqw = 'jsdeliver'; const equemyqwoqoousqq = 'last_loaded_datetime'; public function register() { $this->muuwuqssqkaieqge(__('CDN Data Items', PR__MDL__OPTIMIZATION))->guiaswksukmgageq(__('CDN Data Item', PR__MDL__OPTIMIZATION)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::igecewwoemccgwsq)->gswweykyogmsyawy(__('Origin', PR__MDL__RATING))->kesomeowemmyygey(1, self::gycwocuuococmiqw, __('JSDeliver', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__('Status', PR__MDL__RATING))->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __('Active', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::sgoswgskyiiwkyuo, __('Pending', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, Constants::uucoeqmmykkwsmqc, __('Inactive', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::ascagqcquwgmygkm)->gswweykyogmsyawy(__('Key', PR__MDL__RATING)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::acyomymuuygeoqks)->gswweykyogmsyawy(__('Handle', PR__MDL__RATING)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::iocouekmygsaocuo)->gswweykyogmsyawy(__('Source', PR__MDL__RATING)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(self::equemyqwoqoousqq)->gswweykyogmsyawy(__('Last Loaded Datetime', PR__MDL__RATING))); parent::uwmqacgewuauagai(); } public function cyyqcumykgmwakcs(string $iakkeikwceeomgyq, ?string $iueymcwwscwqkiyq = null) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $iakkeikwceeomgyq)]; if ($iueymcwwscwqkiyq) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } return $this->iekyeyicoyyawomk()->cieaqygkucwoqwke($gqgemcmoicmgaqie); } }
