# php-webhook-groovesell
In GrooveSell a webhook can be configured in the Fulfillment step. This is a test webhook to explode the JSON values sent via GrooveSell.

- Upload the file **rmm-groovesell.php** to a web hosting server - Siteground, Hostgator, GoDaddy etc. 
- Save the URL to this file.    Example - https://www.yourdomain.com/rmm-groovesell.php
- In GrooveSell go to your **Product Funnels**. 
- Select **Actions** -> **Manage Products** for the corresponding Product Funnel you wish to configure the webhook.
- Click the **Edit** icon of the Product you wish to edit.
- Click on the **Fulfillment** tab.
- In the Fulfillment section click on the **Webhook** tab.
- Enter the URL you saved above in the **Webhook URL** field and click on the **Save** button.
- Click on the **Exit** button.

To execute the webhook you will need to complete a checkout process using either the GrooveSell Hosted Checkout or the Embedded Checkout.

The JSON values will be written to a file called request.log on your web hosting server.

Here is a sample data of the JSON:

>{
    "event": "sales",
    "mode": "live",
    "payment_processor": "stripe",
    "is_rebill": 0,
    "amount": "35.95",
    "buyer_ip": "",
    "buyer_first_name": "John",
    "buyer_last_name": "Doe",
    "buyer_email": "johndoe@fakeemail.com",
    "buyer_phone": null,
    "billing_address": "123 Main St",
    "billing_city": "New York",
    "billing_state": "NY",
    "billing_zip": "12345",
    "billing_country": "CA",
    "transaction_id": "0123456789",
    "invoice_id": "0123456789",
    "transaction_time": 1598324081,
    "product_id": 12345,
    "product_name": "Groovy Product",
    "funnel_id": 10396,
    "funnel_name": "Groove Product Funnel",
    "affiliate_name": "",
    "affiliate_email": "",
    "affiliate_commission_amount": 0,
    "ref_affiliate_name": "",
    "ref_affiliate_email": "",
    "ref_affiliate_commission_amount": 0,
    "coupon_code": "",
    "coupon_type": "",
    "coupon_rate": "",
    "subscription_type": "N\/A"
}: 

