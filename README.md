# Drinks

Die Klasse `Random Drink` verfügt über eine Methode namens `getDrink()`, welche ein zufälliges Getränk zurückliefert.

## Verwendung

```php
<?php
// composer hinzufügen
 require 'vendor/autoload.php'

// Objekt erstellen
$drinkMachine = new \Gitprofi\Drinks\RandomDrink();

// Aufruf der Methode
$drink = $drinkMachine->getDrink();

echo '<p>Sie trinken: ' . $drink . '</p>'
?>
```