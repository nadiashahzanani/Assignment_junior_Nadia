<?php

function calculateElectricity($voltage, $current, $hours, $rate)
{
    // Power in Wh
    $power = $voltage * $current;

    // Energy in kWh
    $energy = ($power * $hours) / 1000;

    // Total charge
    $total = $energy * ($rate / 100);

    return [
        'power' => $power,
        'energy' => $energy,
        'total' => $total
    ];
}

if (isset($_POST['calculate'])) {

    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $hours   = $_POST['hours'];
    $rate    = $_POST['rate'];

    $result = calculateElectricity($voltage, $current, $hours, $rate);

    // Per day calculation (24 hours)
    $daily = calculateElectricity($voltage, $current, 24, $rate);
?>
<hr>

<h4>Result (Per Hour Usage)</h4>
<ul>
    <li>Power: <?php echo $result['power']; ?> Wh</li>
    <li>Energy: <?php echo number_format($result['energy'], 4); ?> kWh</li>
    <li>Total Charge: RM <?php echo number_format($result['total'], 2); ?></li>
</ul>

<h4>Result (Per Day Usage – 24 Hours)</h4>
<ul>
    <li>Energy: <?php echo number_format($daily['energy'], 4); ?> kWh</li>
    <li>Total Charge: RM <?php echo number_format($daily['total'], 2); ?></li>
</ul>

<?php } ?>

