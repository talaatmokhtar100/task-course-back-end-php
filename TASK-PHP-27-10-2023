//1.1

class Circle {

    private folat $radius;
    private String $color;

    public function __construct(folat $radius , string $color ) 
    {
        $this->radius = $radius;
        $this->color = $color;
    }



  

    // Public getter methods
    public function getRadius(): folat {
        return $this->radius;
    }

    public function getColor(): string {
        return $this->color;
    }

{
    public function setRadius(folat $radius): void 
        $this->radius = $radius;
    }
 
  public function setColor(string $color): void {
        $this->color = $color;
    }
        

    public function getArea(): folat {
        return pi() * pow ($this->radius ,2 );

    }
  

    public function __toString(): string {
        echo "Radius= {$this->radius}, <br> Area ={$this->get Area()}]";
    }

}
$cir = new Circle ("red" ,2);
$cir->setRadius(4);
$cir->topstring();




1.2  Ex: Yet Another Circle Class
class Circle {
    // Private instance variable
    private float $radius;

    // Public constructor
    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    // Public methods
    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }

    public function getCircumference(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[radius={$this->radius}]";
    }
}


1.3  Ex: The Rectangle Class

class Rectangle {
    // Private instance variables
    private float $length;
    private float $width;

    // Public constructor
    public function __construct(float $length, float $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Public methods
    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getArea(): float {
        return $this->length * $this->width;
    }

    public function getPerimeter(): float {
        return 2 * ($this->length + $this->width);
    }

    public function __toString(): string {
        return "Rectangle[length={$this->length}, width={$this->width}]";
    }
}


1.4  Ex: The Employee Class

class Employee {
    // Private instance variables
    private int $id;
    private string $name;
    private float $salary;

    // Public constructor
    public function __construct(int $id, string $name, float $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    // Public methods
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function raiseSalary(float $percent): void {
        $this->salary *= (1 + $percent / 100);
    }

    public function __toString(): string {
        return "Employee[id={$this->id}, name={$this->name}, salary={$this->salary}]";
    }
}


1.5  Ex: The InvoiceItem Class

class InvoiceItem {
    // Private instance variables
    private $id;
    private $desc;
    private $qty;
    private $unitPrice;

    // Public constructor
    public function __construct(string $id, string $desc, int $qty, float $unitPrice) {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    // Public methods
    public function getId(): string {
        return $this->id;
    }

    public function getDesc(): string {
        return $this->desc;
    }

    public function getQty(): int {
        return $this->qty;
    }

    public function setQty(int $qty): void {
        $this->qty = $qty;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function setUnitPrice(float $unitPrice): void {
        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float {
        return $this->qty * $this->unitPrice;
    }

    public function __toString(): string {
        return "InvoiceItem[id={$this->id}, desc={$this->desc}, qty={$this->qty}, unitPrice={$this->unitPrice}]";
    }
}


1.6  Ex: The Account Class

class Account {
    // Private instance variables
    private string $id;
    private string $name;
    private float $balance;

    // Public constructor
    public function __construct(string $id, string $name, float $balance) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    // Public methods
    public function getId(): string {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function credit(float $amount): void {
        $this->balance += $amount;
    }

    public function debit(float $amount): void {
        if ($amount > $this->balance) {
            throw new Exception("Insufficient balance.");
        }

        $this->balance -= $amount;
    }

    public function transferTo(Account $anotherAccount, float $amount): void {
        if ($amount > $this->balance) {
            throw new Exception("Insufficient balance.");
        }

        $this->debit($amount);
        $anotherAccount->credit($amount);
    }

    public function __toString(): string {
        return "Account[id={$this->id}, name={$this->name}, balance={$this->balance}]";
    }
}
