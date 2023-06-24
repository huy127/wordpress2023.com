<?php
class Wp2023Order
{
    private $_orders = '';

    public function __construct()
    {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'orders'; // Assuming 'orders' is the table name in the WordPress database
    }

    public function get_all()
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";
        $items = $wpdb->get_results($sql);
        return $items;
    }

    public function paginate($limit = 20){
        global $wpdb;

        $s = isset( $_REQUEST['s'] ) ? $_REQUEST['s'] : '';
        $status = isset( $_REQUEST['status'] ) ? $_REQUEST['status'] : '';
        $paged = isset( $_REQUEST['paged'] ) ? $_REQUEST['paged'] : 1;

        // Lấy tổng số records
        $sql = "SELECT count(id) FROM $this->_orders WHERE deleted = 0";
        // Tim kiếm
        if( $s ){
            $sql .= " AND ( customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        if( $status ){
            $sql .= " AND status = '$status'";
        }
        $total_items = $wpdb->get_var($sql);
        
        // Thuật toán phân trang
        /*
        Limit: limit
        Tổng số trang: total_pages
        Tính offset
        */
        $total_pages    = ceil( $total_items / $limit );
        $offset         = ( $paged * $limit ) - $limit;

        $sql = "SELECT * FROM $this->_orders WHERE deleted = 0";
        // Tim kiếm
        if( $s ){
            $sql .= " AND ( customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        if( $status ){
            $sql .= " AND status = '$status'";
        }
        $sql .= " ORDER BY id DESC";
        $sql .= " LIMIT $limit OFFSET $offset";


        $items = $wpdb->get_results($sql);
        return [
            'total_pages'   => $total_pages,
            'total_items'   => $total_items,
            'items'         => $items
        ];

    }



    public function Find($id)
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders WHERE id = $id";
        $item = $wpdb->get_row($sql);
        return $item;
    }

    public function save($data)
    {
        global $wpdb;
        $wpdb->insert($this->_orders, $data);
        $lastId = $wpdb->insert_id;
        $item = $this->Find($lastId);
        return $item;
    }

    public function update($id, $data){
        global $wpdb;
        $wpdb->update($this->_orders, $data, ['id' => $id]);
        return true;
    }
    
    public function destroy($id){
        global $wpdb;
        $wpdb->delete($this->_orders, ['id' => $id]);
        return true;
    }
    
}
