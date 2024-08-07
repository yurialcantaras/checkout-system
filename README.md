# Steps to Run the PayPal Payment System 🛠️💳

### 1. Install Dependencies 🛠️
Use Composer to install the PayPal SDK:
```bash
composer require paypal/paypal-checkout-sdk
```

### 2. Configure Credentials 🔑
- Obtain your `Client ID` and `Client Secret` from the [PayPal Developer Dashboard](https://developer.paypal.com/).
- Set these credentials in the `config.php` file.

### 3. Set Up Local Server 🌐
- Use XAMPP or another local server to host your project.

### 4. Test the Payment Process 💳
1. Open `http://localhost/project/public/index.php` in your browser.
2. Click the "Pay with PayPal" button to initiate the payment process.

### 5. Verify Results ✔️
- After payment, you will be redirected to `success.php` for successful payments or `cancel.php` for canceled payments.

Your PayPal payment system is now set up and ready to use! 🎉