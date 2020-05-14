<?php
class ModelExtensionDashboardChart extends Model {
	public function getTotalOrdersByDay() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		for ($i = 0; $i < 24; $i++) {
			$order_data[$i] = array(
				'hour'  => $i,
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, HOUR(date_added) AS hour FROM `" . DB_PREFIX . "order` WHERE order_status_id IN(" . implode(",", $implode) . ") AND DATE(date_added) = DATE(NOW()) GROUP BY HOUR(date_added) ORDER BY date_added ASC");

		foreach ($query->rows as $result) {
			$order_data[$result['hour']] = array(
				'hour'  => $result['hour'],
				'total' => $result['total']
			);
		}

		return $order_data;
	}

	public function getTotalOrdersByWeek() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		$date_start = strtotime('-' . date('w') . ' days');

		for ($i = 0; $i < 7; $i++) {
			$date = date('Y-m-d', $date_start + ($i * 86400));

			$order_data[date('w', strtotime($date))] = array(
				'day'   => date('D', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "order` WHERE order_status_id IN(" . implode(",", $implode) . ") AND DATE(date_added) >= DATE('" . $this->db->escape(date('Y-m-d', $date_start)) . "') GROUP BY DAYNAME(date_added)");

		foreach ($query->rows as $result) {
			$order_data[date('w', strtotime($result['date_added']))] = array(
				'day'   => date('D', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $order_data;
	}

/* *********************************** */
	public function getTotalOrdersByMonthFarsi() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		for ($i = 1; $i <= jdate('t'); $i++) {
			$jdate = jdate('Y') . '-' . jdate('m') . '-' . $i;
			$date = jtg($jdate);

			$order_data[jdate('j', strtotime($date))] = array(
				'day'   => jdate('d', strtotime($date)),
				'total' => 0
			);
		}

		$jmdate = jdate('Y') . '-' . jdate('m') . '-1';
		$gmdate = jtg($jmdate);
		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND DATE(date_added) >= '" . $this->db->escape($gmdate) . "' GROUP BY DATE(date_added)");

		foreach ($query->rows as $result) {
			$order_data[jdate('j', strtotime($result['date_added']))] = array(
				'day'   => jdate('d', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $order_data;
	}
/* *********************************** */
	public function getTotalOrdersByMonth() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		for ($i = 1; $i <= date('t'); $i++) {
			$date = date('Y') . '-' . date('m') . '-' . $i;

			$order_data[date('j', strtotime($date))] = array(
				'day'   => date('d', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "order` WHERE order_status_id IN(" . implode(",", $implode) . ") AND DATE(date_added) >= '" . $this->db->escape(date('Y') . '-' . date('m') . '-1') . "' GROUP BY DATE(date_added)");

		foreach ($query->rows as $result) {
			$order_data[date('j', strtotime($result['date_added']))] = array(
				'day'   => date('d', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $order_data;
	}

/* *********************************** */
	public function getTotalOrdersByYearFarsi() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		for ($i = 1; $i <= 12; $i++) {
			$jmonth = gregorian_to_jalali(date('Y'), $i, date('d')); 
			$jmonth = $jmonth[1];
			$jyear = jdate('Y');
			
			$order_data[$jmonth] = array(
				'month' => jdate('F', jmktime(0, 0, 0, $jmonth)),//M or F
				'total' => 0
			);

			$jmdate = jdate('Y') . '-' . $jmonth . '-1';
			$gmdate = jtg($jmdate);
			$query = $this->db->query("SELECT YEAR(date_added) AS year, MONTH(date_added) AS month, DAY(date_added) AS day, date_added FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND DATE(date_added) >= '" . $this->db->escape($gmdate) . "' GROUP BY DATE(date_added)");
			$total_rows = 0;
			$date_add = '';
					
			if ($query->num_rows) {
				foreach ($query->rows as $result) {
					$order_jdate = gregorian_to_jalali($result['year'], $result['month'], $result['day']);
					
					if ($order_jdate[0] == $jyear && $order_jdate[1] == $jmonth) {
						if($total_rows == 0) {$date_add = $result['date_added'];}
						$total_rows = $total_rows + 1;
					}
				}
				
				$order_data[jdate('n', strtotime($date_add))] = array(
					'month' => jdate('F', strtotime($date_add)),//M or F
					'total' => $total_rows
				);
			}
		}

		return $order_data;
	}
/* *********************************** */
	public function getTotalOrdersByYear() {
		$implode = array();

		foreach ($this->config->get('config_complete_status') as $order_status_id) {
			$implode[] = "'" . (int)$order_status_id . "'";
		}

		$order_data = array();

		for ($i = 1; $i <= 12; $i++) {
			$order_data[$i] = array(
				'month' => date('M', mktime(0, 0, 0, $i)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "order` WHERE order_status_id IN(" . implode(",", $implode) . ") AND YEAR(date_added) = YEAR(NOW()) GROUP BY MONTH(date_added)");

		foreach ($query->rows as $result) {
			$order_data[date('n', strtotime($result['date_added']))] = array(
				'month' => date('M', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $order_data;
	}
	
	public function getTotalCustomersByDay() {
		$customer_data = array();

		for ($i = 0; $i < 24; $i++) {
			$customer_data[$i] = array(
				'hour'  => $i,
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, HOUR(date_added) AS hour FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) = DATE(NOW()) GROUP BY HOUR(date_added) ORDER BY date_added ASC");

		foreach ($query->rows as $result) {
			$customer_data[$result['hour']] = array(
				'hour'  => $result['hour'],
				'total' => $result['total']
			);
		}

		return $customer_data;
	}

	public function getTotalCustomersByWeek() {
		$customer_data = array();

		$date_start = strtotime('-' . date('w') . ' days');

		for ($i = 0; $i < 7; $i++) {
			$date = date('Y-m-d', $date_start + ($i * 86400));

			$customer_data[date('w', strtotime($date))] = array(
				'day'   => date('D', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) >= DATE('" . $this->db->escape(date('Y-m-d', $date_start)) . "') GROUP BY DAYNAME(date_added)");

		foreach ($query->rows as $result) {
			$customer_data[date('w', strtotime($result['date_added']))] = array(
				'day'   => date('D', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $customer_data;
	}

/* *********************************** */
	public function getTotalCustomersByMonthFarsi() {
		$customer_data = array();

		for ($i = 1; $i <= jdate('t'); $i++) {
			$jdate = jdate('Y') . '-' . jdate('m') . '-' . $i;
			$date = jtg($jdate);

			$customer_data[jdate('j', strtotime($date))] = array(
				'day'   => jdate('d', strtotime($date)),
				'total' => 0
			);
		}
		
		$jmdate = jdate('Y') . '-' . jdate('m') . '-1';
		$gmdate = jtg($jmdate);
		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) >= '" . $this->db->escape($gmdate) . "' GROUP BY DATE(date_added)");

		foreach ($query->rows as $result) {
			$customer_data[jdate('j', strtotime($result['date_added']))] = array(
				'day'   => jdate('d', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $customer_data;
	}
/* *********************************** */
	public function getTotalCustomersByMonth() {
		$customer_data = array();

		for ($i = 1; $i <= date('t'); $i++) {
			$date = date('Y') . '-' . date('m') . '-' . $i;

			$customer_data[date('j', strtotime($date))] = array(
				'day'   => date('d', strtotime($date)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) >= '" . $this->db->escape(date('Y') . '-' . date('m') . '-1') . "' GROUP BY DATE(date_added)");

		foreach ($query->rows as $result) {
			$customer_data[date('j', strtotime($result['date_added']))] = array(
				'day'   => date('d', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $customer_data;
	}

/* *********************************** */
	public function getTotalCustomersByYearFarsi() {
		$customer_data = array();

		for ($i = 1; $i <= 12; $i++) {
			$jmonth = gregorian_to_jalali(date('Y'), $i, date('d')); 
			$jmonth = $jmonth[1];
			$jyear = jdate('Y');
			
			$customer_data[$jmonth] = array(
				'month' => jdate('F', jmktime(0, 0, 0, $jmonth)),//M or F
				'total' => 0
			);

			$jmdate = jdate('Y') . '-' . $jmonth . '-1';
			$gmdate = jtg($jmdate);
			$query = $this->db->query("SELECT YEAR(date_added) AS year, MONTH(date_added) AS month, DAY(date_added) AS day, date_added FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) >= '" . $this->db->escape($gmdate) . "' GROUP BY DATE(date_added)");
			$total_rows = 0;
			$date_add = '';

			if ($query->num_rows) {
				foreach ($query->rows as $result) {
					$customer_jdate = gregorian_to_jalali($result['year'], $result['month'], $result['day']);
					
					if ($customer_jdate[0] == $jyear && $customer_jdate[1] == $jmonth) {
						if($total_rows == 0) {$date_add = $result['date_added'];}
						$total_rows = $total_rows + 1;
					}
				}
				
				$customer_data[jdate('n', strtotime($date_add))] = array(
					'month' => jdate('F', strtotime($date_add)),//M or F
					'total' => $total_rows
				);
			}
		}

		return $customer_data;
	}
/* *********************************** */
	public function getTotalCustomersByYear() {
		$customer_data = array();

		for ($i = 1; $i <= 12; $i++) {
			$customer_data[$i] = array(
				'month' => date('M', mktime(0, 0, 0, $i)),
				'total' => 0
			);
		}

		$query = $this->db->query("SELECT COUNT(*) AS total, date_added FROM `" . DB_PREFIX . "customer` WHERE YEAR(date_added) = YEAR(NOW()) GROUP BY MONTH(date_added)");

		foreach ($query->rows as $result) {
			$customer_data[date('n', strtotime($result['date_added']))] = array(
				'month' => date('M', strtotime($result['date_added'])),
				'total' => $result['total']
			);
		}

		return $customer_data;
	}	
}