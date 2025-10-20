for ($i = 7; $i <= 70; $i += 7) {
  echo $i, ' ';
}
echo PHP_EOL;

$sum = 0; $n = 1;
while ($sum <= 100) {
  $sum += $n;
  $n++;
}
echo "First n where sum>100 is $n, sum=$sum\n";

$count = 0;
do {
  $count++;
} while ($count < 1);
echo "do...while ran $count time(s)\n";

$cart = ['pen'=>1.2, 'notebook'=>2.5, 'bag'=>12.0, 'gum'=>0.5];
$subtotal = 0.0;
foreach ($cart as $item=>$price) {
  if ($price < 1.0) continue;
  $subtotal += $price;
}
echo "Subtotal (skip < 1): $subtotal\n";

for ($i = 1; $i <= 30; $i++) {
  if ($i === 13) continue;
  $out = '';
  if ($i % 3 === 0) $out .= 'Fizz';
  if ($i % 5 === 0) $out .= 'Buzz';
  echo $out !== '' ? $out : $i, PHP_EOL;
}
