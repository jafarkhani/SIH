<?php
class ControllerStartupSeoUrl extends Controller {

	private $url_list = array (
		'common/home' => '',
		'account/wishlist' => 'wishlist',
		'account/account' => 'my-account',
		'account/edit' => 'edit-account',
		'account/password' => 'change-password',
		'account/address' => 'address-book',
		'account/address/edit' => 'address-book-edit',
		'account/reward' => 'reward-points',
		'account/login' => 'login',
		'account/logout' => 'logout',
		'account/order' => 'order-history',
		'account/order/info' => 'order-history-details',
		'account/newsletter' => 'newsletter',
		'account/forgotten' => 'forgot-password',
		'account/download' => 'downloads',
		'account/return' => 'my-returns',
		'account/return/add' => 'return-add',
		'account/transaction' => 'transactions',
		'account/register' => 'register',
		'account/recurring' => 'recurring',
		'account/voucher' => 'gift-vouchers',
		'account/voucher/success' => 'voucher-success',
		'affiliate/account' => 'affiliates',
		'affiliate/edit' => 'edit-affiliate-account',
		'affiliate/password' => 'change-affiliate-password',
		'affiliate/payment' => 'affiliate-payment',
		'affiliate/tracking' => 'affiliate-tracking-code',
		'affiliate/transaction' => 'affiliate-transactions',
		'affiliate/logout' => 'affiliate-logout',
		'affiliate/forgotten' => 'affiliate-forgot-password',
		'affiliate/register' => 'register-affiliate',
		'affiliate/login' => 'affiliate-login',
		'checkout/cart' => 'cart',
		'checkout/checkout' => 'checkout',
		'checkout/success' => 'checkout-success',
		'information/contact' => 'contact',
		'information/sitemap' => 'sitemap',
		'product/special' => 'specials',
		'product/manufacturer' => 'brands',
		'product/compare' => 'compare-products',
		'product/search' => 'search'
	);
			
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
		if (isset($this->request->get['_route_'])) {
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);

					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}

			if ( $_s = $this->setURL($this->request->get['_route_']) ) {
				$this->request->get['route'] = $_s;
			}
			

			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}
		}
	}

	public function rewrite($link) {
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}

				if( $_u = $this->getURL($data['route']) ){
					$url .= $_u;
					unset($data[$key]);
				}
			
			}
		}

		if ($url) {
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}

			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}

	public function getURL($route) {
			if( count($this->url_list) > 0) {
				 foreach ($this->url_list as $key => $value) {
					if($route == $key) {
						return '/'.$value;
					}
				 }
			}
			return false;
	}
	public function setURL($_route) {
			if( count($this->url_list) > 0 ){
				 foreach ($this->url_list as $key => $value) {
					if($_route == $value) {
						return $key;
					}
				 }
			}
			return false;
	}
			
}
