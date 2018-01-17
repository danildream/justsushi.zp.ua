<?php
global $sgrb;
define('TEMPLATE_PATH', $sgrb->asset('core/templates/'));

$sgrb->includeController('Controller');
$sgrb->includeView('Admin');
$sgrb->includeView('Review');
$sgrb->includeModel('Template');
$sgrb->includeModel('Review');

class Template
{
	protected $id;
	protected $name;
	private $autoIncrement = 0;

	public function __construct($name,$id = false)
	{
		$this->id = $id;
		$this->name = $name;
	}

	public function findImage()
	{
		global $sgrb;
		$this->autoIncrement++;
		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
			return '<div class="sgrb-image-review" style="background-image:url('.@$options['images'][($this->autoIncrement-1)].');">
						<div class="sgrb-icon-wrapper">
							<div class="sgrb-image-review-plus"><span class="sgrb-upload-btn" name="upload-btn_'.$this->autoIncrement.'"><i><img class="sgrb-plus-icon" src="'.$sgrb->app_url.'assets/page/img/add.png"></i></span>
								<input type="hidden" class="sgrb-img-num" data-auto-id="'.$this->autoIncrement.'">
								<input type="hidden" class="sgrb-current-template" value="'.$this->id.'">
								<input type="hidden" class="sgrb-images" id="sgrb_image_url_'.$this->autoIncrement.'" name="image_url[]" value="'.@$options['images'][($this->autoIncrement-1)].'">
							</div>
							<div class="sgrb-image-review-minus">
								<span class="sgrb-remove-img-btn" name="remove-btn_'.$this->autoIncrement.'">
									<i>
										<img class="sgrb-minus-icon" src="'.$sgrb->app_url.'assets/page/img/remove_image.png">
									</i>
								</span>
							</div>
						</div>
					</div>';	
		}
		return '<div class="sgrb-image-review" style="">
				<div class="sgrb-icon-wrapper">
					<div class="sgrb-image-review-plus"><span class="sgrb-upload-btn" name="upload-btn_'.$this->autoIncrement.'"><i><img class="sgrb-plus-icon" src="'.$sgrb->app_url.'assets/page/img/add.png"></i></span>
						<input type="hidden" class="sgrb-img-num" data-auto-id="'.$this->autoIncrement.'"> 
						<input type="hidden" class="sgrb-images" id="sgrb_image_url_'.$this->autoIncrement.'" name="image_url[]" value="">
					</div>
					<div class="sgrb-image-review-minus">
						<span class="sgrb-remove-img-btn" name="remove-btn_'.$this->autoIncrement.'">
							<i>
								<img class="sgrb-minus-icon" src="'.$sgrb->app_url.'assets/page/img/remove_image.png">
							</i>
						</span>
					</div>
				</div>
				</div>';
	}

	public function findHtmlTitle()
	{
		$this->autoIncrement++;
		$tag = 'title';
		$placeholder = 'Title';
		$styleClass = 'sgrb-title';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlBy()
	{
		$this->autoIncrement++;
		$tag = 'by';
		$placeholder = 'by';
		$styleClass = 'sgrb-product-by';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlPrice()
	{
		$this->autoIncrement++;
		$tag = 'price';
		$placeholder = 'price';
		$styleClass = 'sgrb-price';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlShipping()
	{
		$this->autoIncrement++;
		$tag = 'shipping';
		$placeholder = 'shipping information';
		$styleClass = 'sgrb-shipping';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlSubtitle()
	{
		$this->autoIncrement++;
		$tag = 'subtitle';
		$placeholder = 'Subtitle';
		$styleClass = 'sgrb-subtitle';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlShortDesc()
	{
		$this->autoIncrement++;
		$tag = 'shortDesc';
		$placeholder = 'Short description';
		$styleClass = 'sgrb-shortdesc';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findHtmlLongDesc()
	{
		$this->autoIncrement++;
		$tag = 'longDesc';
		$placeholder = 'Long description';
		$styleClass = 'sgrb-longdesc';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);
		}
		return '<textarea rows="8" class="'.$styleClass.'" placeholder="'.$placeholder.'" name="input_html['.$tag.'][]">'.@$options['html'][$tag][($this->autoIncrement-1)].'</textarea>';
	}

	public function findUrl()
	{
		$placeholder = 'link title';
		$placeholderLink = 'url-link';

		if ($this->id) {
			$template = SGRB_TemplateModel::finder()->findByPk($this->id);
			$options = $template->getOptions();
			$options = json_decode($options,true);

			static $linkCount = 0;

			return '<textarea rows="8" class="sgrb-link" placeholder="'.$placeholder.'" name="input_url[]">'.@$options['url'][$linkCount++].'</textarea>
					<textarea rows="8" class="sgrb-link-title" placeholder="'.$placeholderLink.'" name="input_url[]">'.@$options['url'][$linkCount++].'</textarea>';
			
		}
		return '<textarea rows="8" class="sgrb-link" placeholder="'.$placeholder.'" name="input_url[]"></textarea>
				<textarea rows="8" class="sgrb-link-title" placeholder="'.$placeholderLink.'" name="input_url[]"></textarea>';
	}

	public function adminRender()
	{
		global $sgrb;
		$sgrb->includeStyle('core/templates/'.$this->name);
		$htmlElements = '';
		if ($this->name == 'post_review') {
			return;
		}
		$this->autoIncrement = 0;
		$html = file_get_contents(TEMPLATE_PATH.$this->name.'.html',true);
		$html = preg_replace_callback('#\[sgrbimg]#',array($this,'findImage'), $html);
		
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbtitle]#', array($this,'findHtmlTitle'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbproductby]#', array($this,'findHtmlBy'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbprice]#', array($this,'findHtmlPrice'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbshipping]#', array($this,'findHtmlShipping'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbsubtitle]#', array($this,'findHtmlSubtitle'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbshortdescription]#', array($this,'findHtmlShortDesc'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrblongdescription]#', array($this,'findHtmlLongDesc'), $html);
		$urlArr = array('#\[sgrblink]#');
		$html = preg_replace_callback($urlArr, array($this,'findUrl'), $html);

		return '<div class="sgrb-change-template">'.$html.'</div>';
	}

	public function findFrontImage()
	{
		global $sgrb;
		$this->autoIncrement++;
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		if (!@$options['images'][($this->autoIncrement-1)]) {
			@$options['images'][($this->autoIncrement-1)] = $sgrb->app_url.'assets/page/img/no-image.png';
		}
		foreach ($options['images'] as $option) {
			return '<div class="sgrb-image-review" style="background-image:url('.@$options['images'][($this->autoIncrement-1)].');">
				<input type="hidden" class="sgrb-img-num" data-auto-id="'.$this->autoIncrement.'"> 
				<input type="hidden" class="sgrb-images" id="sgrb_image_url_'.$this->autoIncrement.'" name="image_url[]" value=""></div>';
		}
	}

	public function findFrontHtmlTitle()
	{
		$this->autoIncrement++;
		$tag = 'title';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlBy()
	{
		$this->autoIncrement++;
		$tag = 'by';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlPrice()
	{
		$this->autoIncrement++;
		$tag = 'price';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlShipping()
	{
		$this->autoIncrement++;
		$tag = 'shipping';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlSubtitle()
	{
		$this->autoIncrement++;
		$tag = 'subtitle';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlShortDesc()
	{
		$this->autoIncrement++;
		$tag = 'shortDesc';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontHtmlLongDesc()
	{
		$this->autoIncrement++;
		$tag = 'longDesc';
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);
		return @$options['html'][$tag][($this->autoIncrement-1)];
		
	}

	public function findFrontUrl()
	{
		$this->autoIncrement++;
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		$options = $template->getOptions();
		$options = json_decode($options,true);

		static $linkCount = 0;

		$linkTitle = $options['url'][$linkCount++];
		$linkUrl = $options['url'][$linkCount++];

		return '<a href="'.$linkUrl.'">'.$linkTitle.'</a>';
	}

	public function render()
	{
		global $sgrb;
		$sgrb->includeStyle('core/templates/'.$this->name);

		if ($this->name == 'post_review') {
			return;
		}
		$html = file_get_contents(TEMPLATE_PATH.$this->name.'.html',true);
		$html = preg_replace_callback('#\[sgrbimg]#',array($this,'findFrontImage'),$html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbtitle]#', array($this,'findFrontHtmlTitle'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbproductby]#', array($this,'findFrontHtmlBy'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbprice]#', array($this,'findFrontHtmlPrice'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbshipping]#', array($this,'findFrontHtmlShipping'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbsubtitle]#', array($this,'findFrontHtmlSubtitle'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrbshortdescription]#', array($this,'findFrontHtmlShortDesc'), $html);
		$this->autoIncrement = 0;
		$html = preg_replace_callback('#\[sgrblongdescription]#', array($this,'findFrontHtmlLongDesc'), $html);
		$arr = array('#\[sgrblink]#');
		$html = preg_replace_callback($arr, array($this,'findFrontUrl'), $html);
		return $html;
	}

	public function save($data)
	{
		global $sgrb;
		global $wpdb;
		$options = array();
		$options['images'] = $data['images'];
		$options['html'] = $data['html'];
		$options['url'] = $data['url'];

		$options = json_encode($options);
		$tempName = $data['name'];
		$template = SGRB_TemplateModel::finder()->findByPk($this->id);
		if (!$this->id) {
			$template = new SGRB_TemplateModel();
		}

		$template->setName(sanitize_text_field($tempName));
		$template->setOptions($options);
		$template->save();

		$lastTemId = $wpdb->insert_id;
		if (!$lastTemId && $this->id) {
			$lastTemId = $template->getId();
		}

		return $lastTemId;

	}

	public function getTemplateOptions($options)
	{

	}	

	


}

?>