$x = "";
for ($x = 0; $x <= 200; $x++) {
$randomFloat = chr(floor(rand(0, 10000000000000000) / 10000000000000000*0x1D300)+0x800);
}
echo $randomFloat;
