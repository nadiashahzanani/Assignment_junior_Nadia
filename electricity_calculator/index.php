<!DOCTYPE html>
<html>
<head>
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h2>Electricity Consumption Calculator</h2>

<form method="POST" action="">
    <div class="form-group">
        <label>Voltage (V)</label>
        <input type="number" name="voltage" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Current (A)</label>
        <input type="number" step="0.01" name="current" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Usage Hours</label>
        <input type="number" name="hours" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Current Rate (sen per kWh)</label>
        <input type="number" step="0.01" name="rate" class="form-control" required>
    </div>

    <button type="submit" name="calculate" class="btn btn-primary">
        Calculate
    </button>
</form>

<?php include 'calculate.php'; ?>

</body>
</html>

