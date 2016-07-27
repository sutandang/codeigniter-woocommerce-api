##How to use

1. paste in codeigniter library
2. load in contructor controller
```
class Welcome extends CI_Controller {
	protected $woo;
	public function __construct()
	{
	    parent::__construct();// you have missed this line.
		$this->load->library('woocommerce');
		$this->woo = $this->woocommerce->request();
	}

	public function index()
	{
		print_r($this->woo->coupons->get());
	}
}
```
3. another request 
```
// coupons
	print_r( $this->woo->coupons->get() );
	print_r( $this->woo->coupons->get( $coupon_id ) );
	print_r( $this->woo->coupons->get_by_code( 'coupon-code' ) );
	print_r( $this->woo->coupons->create( array( 'code' => 'test-coupon', 'type' => 'fixed_cart', 'amount' => 10 ) ) );
	print_r( $this->woo->coupons->update( $coupon_id, array( 'description' => 'new description' ) ) );
	print_r( $this->woo->coupons->delete( $coupon_id ) );
	print_r( $this->woo->coupons->get_count() );

	// custom
	$this->woo->custom->setup( 'webhooks', 'webhook' );
	print_r( $this->woo->custom->get( $params ) );

	// customers
	print_r( $this->woo->customers->get() );
	print_r( $this->woo->customers->get( $customer_id ) );
	print_r( $this->woo->customers->get_by_email( 'help@woothemes.com' ) );
	print_r( $this->woo->customers->create( array( 'email' => 'woothemes@mailinator.com' ) ) );
	print_r( $this->woo->customers->update( $customer_id, array( 'first_name' => 'John', 'last_name' => 'Galt' ) ) );
	print_r( $this->woo->customers->delete( $customer_id ) );
	print_r( $this->woo->customers->get_count( array( 'filter[limit]' => '-1' ) ) );
	print_r( $this->woo->customers->get_orders( $customer_id ) );
	print_r( $this->woo->customers->get_downloads( $customer_id ) );
	//$customer = $this->woo->customers->get( $customer_id );
	//$customer->customer->last_name = 'New Last Name';
	print_r( $this->woo->customers->update( $customer_id, (array) $customer ) );

	// index
	print_r( $this->woo->index->get() );
	echo "<pre>";

	// orders
	print_r( $this->woo->orders->get() );
	print_r( $this->woo->orders->get( $order_id ) );
	print_r( $this->woo->orders->update_status( $order_id, 'pending' ) );

	// order notes
	print_r( $this->woo->order_notes->get( $order_id ) );
	print_r( $this->woo->order_notes->create( $order_id, array( 'note' => 'Some order note' ) ) );
	print_r( $this->woo->order_notes->update( $order_id, $note_id, array( 'note' => 'An updated order note' ) ) );
	print_r( $this->woo->order_notes->delete( $order_id, $note_id ) );

	// order refunds
	print_r( $this->woo->order_refunds->get( $order_id ) );
	print_r( $this->woo->order_refunds->get( $order_id, $refund_id ) );
	print_r( $this->woo->order_refunds->create( $order_id, array( 'amount' => 1.00, 'reason' => 'cancellation' ) ) );
	print_r( $this->woo->order_refunds->update( $order_id, $refund_id, array( 'reason' => 'who knows' ) ) );
	print_r( $this->woo->order_refunds->delete( $order_id, $refund_id ) );

	// products
	// print_r( $this->woo->products->get() );
	print_r( $this->woo->products->get( $product_id ) );
	print_r( $this->woo->products->get( $variation_id ) );
	print_r( $this->woo->products->get_by_sku( 'a-product-sku' ) );
	print_r( $this->woo->products->create( array( 'title' => 'Test Product', 'type' => 'simple', 'regular_price' => '9.99', 'description' => 'test' ) ) );
	print_r( $this->woo->products->update( $product_id, array( 'post_status' => 'Publish' ) ) );
	print_r( $this->woo->products->delete( $product_id, true ) );
	// print_r( $this->woo->products->get_count() );
	print_r( $this->woo->products->get_count( array( 'type' => 'simple' ) ) );
	print_r( $this->woo->products->get_categories() );
	print_r( $this->woo->products->get_categories( $category_id ) );

	// reports
	print_r( $this->woo->reports->get() );
	print_r( $this->woo->reports->get_sales( array( 'filter[date_min]' => '2014-07-01' ) ) );
	print_r( $this->woo->reports->get_top_sellers( array( 'filter[date_min]' => '2014-07-01' ) ) );

	// webhooks
	print_r( $this->woo->webhooks->get() );
	print_r( $this->woo->webhooks->create( array( 'topic' => 'coupon.created', 'delivery_url' => 'http://requestb.in/' ) ) );
	print_r( $this->woo->webhooks->update( $webhook_id, array( 'secret' => 'some_secret' ) ) );
	print_r( $this->woo->webhooks->delete( $webhook_id ) );
	print_r( $this->woo->webhooks->get_count() );
	print_r( $this->woo->webhooks->get_deliveries( $webhook_id ) );
	print_r( $this->woo->webhooks->get_delivery( $webhook_id, $delivery_id );

	// trigger an error
	print_r( $this->woo->orders->get( 0 ) );
```