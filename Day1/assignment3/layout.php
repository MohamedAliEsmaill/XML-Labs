<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f1f4f8; }
        .container {
            background-color: #ffffff;
            padding-top: 30px;
            padding-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        .form-control, .btn, .input-group-text, .form-select {
            border-radius: 0.5rem;
        }
        .btn { padding: 10px 24px; }
        .form-title {
            color: #333;
            margin-bottom: 30px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center form-title">Contact Manager</h1>
        <?php include 'form.php'; ?>
        <?php
            if (!empty($searchResults)) {
                displaySearchResults($searchResults);
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
