<?php
require '../../vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now()->format('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html>
<body>
  <p>現在時刻：<?= $now ?></p>
</body>
</html>