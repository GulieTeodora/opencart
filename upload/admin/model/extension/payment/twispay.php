<?php
class ModelExtensionPaymentTwispay extends Model {
    public function getTransactions($user='0'){
        $query = (empty($user)) ? "SELECT t.*,s.`store_id` FROM `" . DB_PREFIX . "twispay_transactions` as t LEFT JOIN `".DB_PREFIX."order` AS s ON t.`order_id`=s.`order_id` ORDER BY t.`date` DESC" : "SELECT t.*,s.`store_id` FROM `" . DB_PREFIX . "twispay_transactions` as t LEFT JOIN `".DB_PREFIX."order` AS s ON t.`order_id`=s.`order_id`  WHERE `identifier`='".$user."' ORDER BY `date` DESC";
        $data = $this->db->query($query);
         $trans = array();
        if($data->num_rows){
            foreach($data->rows as $dt){
                array_push($trans, $dt);
            }
        }
        return $trans;
    }

    public function getCustomers(){
        $query = "SELECT `customer_id`,(CONCAT_WS(' ',`firstname`,`lastname`)) AS name,`email` FROM `" . DB_PREFIX . "customer`";
        $data = $this->db->query($query);
        $customers = array();
        if($data->num_rows){
            foreach($data->rows as $dt){
                array_push($customers, $dt);
            }
        }
        return $customers;
    }

    private function getOrderByTransaction($transid = 0,$status=''){
        $query = (empty($status)) ? "SELECT `orderId` FROM `" . DB_PREFIX . "twispay_transactions` WHERE `transactionId`='".$transid."'" : "SELECT `orderId` FROM `" . DB_PREFIX . "twispay_transactions` WHERE `transactionId`='".$transid."' AND `status`='" . $status. "'";
        $data = $this->db->query($query);
        $trans = array();
        if($data->num_rows){
            foreach($data->rows as $dt){
                array_push($trans, $dt);
            }
        }
        return $trans;
    }

    public function refund($transid=0){
        $orders = $this->getOrderByTransaction($transid);
        if(!empty($orders)){
            $log_file = $this->config->get('payment_twispay_logs').'/twispay_perm_log.txt';

            $query = "UPDATE `" . DB_PREFIX. "twispay_transactions` SET `status`='refunded',`refund_date`='" . date('Y-m-d H:i:s'). "' WHERE `orderId`='" . $orders[0]['orderId']. "' AND `status`!='refunded'";
            $this->db->query($query);
            $affected = $this->db->countAffected();
            $array = array (
                'query' => $query,
                'affected'  => $affected
            );
            @file_put_contents($log_file,json_encode($array).PHP_EOL, FILE_APPEND);
            return $affected;
        } else {
            return json_encode(0);
        }

    }



}