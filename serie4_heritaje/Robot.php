<?php
class Robot {
    public $x;
    public $y;
    public $direction;

    public function __construct($x, $y, $direction) {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction; // 'N', 'S', 'E', 'W'
    }

    public function step($map) {
        $color = $map[$this->y][$this->x];

        if ($color === 'green') {
            $this->moveForward();
        } elseif ($color === 'red') {
            $this->turnRight();
        }
    }

    private function moveForward() {
        switch ($this->direction) {
            case 'N': $this->y--; break;
            case 'S': $this->y++; break;
            case 'E': $this->x++; break;
            case 'W': $this->x--; break;
        }
    }

    private function turnRight() {
        switch ($this->direction) {
            case 'N': $this->direction = 'E'; break;
            case 'E': $this->direction = 'S'; break;
            case 'S': $this->direction = 'W'; break;
            case 'W': $this->direction = 'N'; break;
        }
    }

    public function position() {
        return "Position: (x={$this->x}, y={$this->y}) Facing {$this->direction}";
    }
}

// إنشاء الخريطة
$map = [
    ['green', 'green', 'red'],
    ['green', 'red', 'green'],
    ['green', 'green', 'green']
];

// إنشاء الروبوت أول مرة
session_start();
if (!isset($_SESSION['robot'])) {
    $_SESSION['robot'] = new Robot(0, 0, 'E');
}
$robot = $_SESSION['robot'];

// خطوة جديدة
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['step'])) {
    $robot->step($map);
    $_SESSION['robot'] = $robot;
}

// عرض الخريطة
function displayMap($map, $robot) {
    echo "<table border='1' cellpadding='10'>";
    for ($y = 0; $y < count($map); $y++) {
        echo "<tr>";
        for ($x = 0; $x < count($map[$y]); $x++) {
            $color = $map[$y][$x];
            $isRobot = ($robot->x === $x && $robot->y === $y);
            echo "<td style='background-color:$color;'>";
            echo $isRobot ? "🤖" : "&nbsp;";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Robot Game</title>
</head>
<body>
    <h1>Robot Game</h1>
    <p><?= $robot->position() ?></p>
    <form method="post">
        <button name="step">Step</button>
    </form>
    <?php displayMap($map, $robot); ?>
</body>
</html>
