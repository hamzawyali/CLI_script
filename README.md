

## CLI Script

This project create CLI script with PHP Laravel which will read JSON based data from a specific endpoint via HTTP. The script will contain several sub-
commands to filter and output the loaded data. The commands should be:

- Find objects by price range (given price_from and price_to as arguments).
- Find objects by a certain sub-object definition.

For Example:
- php run.php count_by_price_range 12.00 145.80
- php run.php count_by_vendor_id 42
