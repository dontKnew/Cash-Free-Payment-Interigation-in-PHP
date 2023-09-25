<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Free Payment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<style>
body {
    background-color:black;
}
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class='col-12 my-2 d-flex justify-content-center'>
                <div class="spinner-border text-danger mx-2" role="status" style="width:1.8rem;height:1.8rem">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <h4 class='text-center text-danger'> Cash Free Payment Processing... </h4>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4 text-success"><u>Order Payment</u></h3>
                        <form id="paymentForm" action="request.php" method="POST">
                        
                        <div class='row'>
                            <div class="mb-3 col-md-6">
                                <label for="order_id" class="form-label">Order ID <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control" id="order_id" name="order_id" value="<?php echo 'order_' . uniqid(); ?>" readonly>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="order_amount" class="form-label">Order Amount <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control" id="order_amount" name="order_amount"  required>
                            </div>
                            
                            
                            <div class="mb-3 col-md-6">
                                <label for="order_amount" class="form-label">Amount Currency <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control"  name="order_currency" value="INR" required>
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label for="customer_name" class="form-label">Customer ID <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control"  name="customer_details[customer_id]" value="<?php echo 'customer_' . uniqid(); ?>" required>
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label for="customer_name" class="form-label">Customer Name <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control"  name="customer_details[customer_name]" required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="customer_email" class="form-label">Customer Email <span class='text-danger'>*</span></label>
                                <input type="email" class="form-control" name="customer_details[customer_email]" required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="customer_phone" class="form-label">Customer Phone <span class='text-danger'>*</span></label>
                                <input type="tel" placeholder="Ex. 7065221377" class="form-control" name="customer_details[customer_phone]" required >
                            </div>
                            
                            
                            <div class="mb-3 col-md-6">
                                <label for="customer_phone" class="form-label">Order Note <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control" name="order_note" value="Testing Order" required>
                            </div>
                            
                            <div class="mb-3 col-12">
                                <label for="customer_phone" class="form-label">Return URL <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control" name="order_meta[return_url]" value="https://www.shipmiles.com/test/response.php?order_id={order_id}" required>
                            </div>
                            
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Make Payment</button>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
