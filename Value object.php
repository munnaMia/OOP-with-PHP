<?php
readonly class Price {
    public function __construct(
        public int $amount,
        public string  $currency = 'USD'
    ) {
        if ($amount < 0) {
            throw new Exception("Price cannot be negative!");
        }
    }

    // To "change" the price, we return a NEW object
    public function add(int $extraAmount): Price {
        return new Price($this->amount + $extraAmount, $this->currency);
    }
}

$fiveBucks = new Price(500); // $5.00
$tenBucks = $fiveBucks->add(500); // Returns a NEW object

echo $fiveBucks->amount; // Still 500 (Original is untouched!)
echo $tenBucks->amount;  // 1000