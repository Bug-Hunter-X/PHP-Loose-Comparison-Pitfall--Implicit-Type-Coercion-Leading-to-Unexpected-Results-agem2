The solution uses strict comparison (`===`) to avoid implicit type coercion:
```php
<?php
$value = "10";
if ($value === 10) {
  echo "Value is equal to 10";
} else {
  echo "Value is not equal to 10";
}
?>
```
This code will now output "Value is not equal to 10", correctly reflecting the difference in types between string and integer.  Using strict comparison ensures that the comparison considers both the value and the type, thus avoiding the subtle bugs that can arise from implicit type coercion.