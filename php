$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";
$count = preg_match_all('/[aeiou]/i', $str, $matches);
echo "Количество гласных букв: $count";
