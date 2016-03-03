# Currency Converter

## Convert using Google's currency converter

```PHP
require_once "vendor/autoload.php";

use Currency\CurrencyConverter;
use Currency\Handler\GoogleCurrency;

$currencyConverter = new CurrencyConverter(new GoogleCurrency);
echo $currencyConverter
    ->convert(20)
    ->from('USD')
    ->to('EUR');
```
