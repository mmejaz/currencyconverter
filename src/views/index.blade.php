<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Currency Converter</h4>
                    </div>
                    <div class="card-body">
                        <!-- Update the form action to point to the 'converter' route and add the @csrf directive -->
                        <form method="POST" action="{{ route('converter') }}">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="from_currency">From Currency:</label>
                                <select class="form-control" id="from_currency" name="from_currency" required>
                                    <!-- Add options for different currencies -->
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <!-- Add more currency options as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="to_currency">To Currency:</label>
                                <select class="form-control" id="to_currency" name="to_currency" required>
                                    <!-- Add options for different currencies -->
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <!-- Add more currency options as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Convert</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
