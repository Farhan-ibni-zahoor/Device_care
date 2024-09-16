<!-- customer-details.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center">Enter Your Details</h2>

            <!-- Form for customer details -->
            <form action="send-email.php" method="POST">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" required>
                </div>
                <div class="mb-3">
                    <label for="customerEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="customerEmail" name="customerEmail" required>
                </div>
                <div class="mb-3">
                    <label for="customerPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="customerPhone" name="customerPhone" required>
                </div>
                <div class="mb-3">
                    <label for="customerAddress" class="form-label">Address</label>
                    <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="customerPincode" class="form-label">Pincode</label>
                    <input type="text" class="form-control" id="customerPincode" name="customerPincode" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
