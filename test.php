<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo() {
        return "Product ID: {$this->id}, Name: {$this->name}, Price: {$this->price}";
    }

    public function getPrice() {
        return $this->price;
    }
}

$products = [
    new Product(1, "Product A", 10),
    new Product(2, "Product B", 15),
    new Product(3, "Product C", 20),
    new Product(4, "Product D", 25),
    new Product(5, "Product E", 30),
    new Product(6, "Product F", 35),
    new Product(7, "Product G", 40),
    new Product(8, "Product H", 50),
];

$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product->getPrice();
}

echo "Number of products: " . count($products) . " PHP\n";
echo "Total price: $totalPrice\n";

foreach ($products as $product) {
    echo $product->getInfo() . "\n";
}
?>



<?php
function areAnagrams($str1, $str2) {
   
    $str1 = str_replace(' ', '', strtolower($str1));
    $str2 = str_replace(' ', '', strtolower($str2));

    if (strlen($str1) !== strlen($str2)) {
        return false;
    }

    $str1Array = str_split($str1);
    $str2Array = str_split($str2);
    sort($str1Array);
    sort($str2Array);

    return $str1Array === $str2Array;
}

$str1 = "abed";
$str2 = "beda";

if (areAnagrams($str1, $str2)) {
    echo "$str1 and $str2 are anagrams.";
} else {
    echo "$str1 and $str2 are not anagrams.";
}
?>


<?php
function isPalindrome($str) {
    $str = str_replace(' ', '', strtolower($str));

    $reversedStr = strrev($str);

}

$testStrings = ["eye", "madam", "hello", "A man a plan a canal Panama"];

foreach ($testStrings as $str) {
    if (isPalindrome($str)) {
        echo "$str is a palindrome.\n";
    } else {
        echo "$str is not a palindrome.\n";
    }
}
?>

<?php
trait TraitA {
    public function methodA() {
        echo "Method A from TraitA\n";
    }
}

trait TraitB {
    public function methodB() {
        echo "Method B from TraitB\n";
    }
}

class MyClass {
    use TraitA, TraitB;
}

$obj = new MyClass();
$obj->methodA();  
$obj->methodB();  
?>
  

