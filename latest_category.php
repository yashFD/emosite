<?php
class ControllerModuleLatestcategory extends Controller {
	protected function index($setting) {
		$this->language->load('module/latest_category');
		
		$this->data['heading_title'] = $this->language->get('heading_title');
		
		$this->data['button_cart'] = $this->language->get('button_cart');
				
		$this->load->model('catalog/product');
		
		$this->load->model('tool/image');
		
		$this->load->model('catalog/category');
		
		$this->data['categories_product'] = array();
		$catsArray = array("273","203","261","211","257","259","268","266","202","207","264","208","248");
		$categories_product = $this->model_catalog_category->getCategoriesEmotiongiftHomePage($catsArray);
		if ($categories_product) {
			foreach ($categories_product as $category_product) {
				$data = array(
				'filter_category_id' => $category_product['category_id'],
				'sort'               => 'p.date_added',
				'order'              => 'DESC',
				'start'              => 0,
				'limit'              => $setting['limit'],
				'filter_sub_category'=> true
				);
				$category_product_1 = array();
				$results = $this->model_catalog_product->getProducts($data);
			    foreach ($results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['image_width'], $setting['image_height']);
					} else {
						$image = false;
					}	
								
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
		
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
		
					} else {
		
						$price = false;
		
					}
		
							
		
					if ((float)$result['special']) {
		
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
		
					} else {
		
						$special = false;
		
					}
		
					
		
					if ($this->config->get('config_review_status')) {
		
						$rating = $result['rating'];
		
					} else {
		
						$rating = false;
		
					}
		
					$category_product_1[] = array(
						'product_id' => $result['product_id'],
						'thumb'   	 => $image,
						'name'    	 => $result['name'],
						'price'   	 => $price,
						'special' 	 => $special,
						'rating'     => $rating,
						'reviews'    => sprintf($this->language->get('text_reviews'), (int)$result['reviews']),
						'href'    	 => $this->url->link('product/product', 'product_id=' . $result['product_id']),

					);
			    }
				$category_info = $this->model_catalog_category->getCategory($category_product['category_id']);

				$this->data['categories_product'][] = array(
					'category_product'=> $category_product_1,
					'category_name'=> $category_info['name'],
					'href'    	 => $this->url->link('product/category', 'path=' . $category_product['category_id'])
				);
			}
		}
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/latest_category.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/latest_category.tpl';
		} else {
			$this->template = 'default/template/module/latest_category.tpl';
		}

		$this->render();
	}
}
?>