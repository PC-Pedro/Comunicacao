<?php 

class Company {
    public $id;
    public $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

function executeCode(Company $company) {
    if (!empty($company->id) && !empty($company->name)) {
        echo "ID da empresa: " . htmlspecialchars($company->id) . "<br>";
        echo "Nome da empresa: " . htmlspecialchars($company->name) . "<br>";

        $escapedId = escapeshellarg($company->id);
        $escapedName = escapeshellarg($company->name);
        $command = "python3 receber.py $escapedId $escapedName";

        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    } else {
        echo "Empresa não cadastrada. <br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? trim($_POST['id']) : '';
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';

    if ($id !== '' && $name !== '') {
        $company = new Company($id, $name);
        executeCode($company);
    } else {
        
        echo "Dados incompletos.";
    }
} else {
    echo "Nenhum dado enviado. <br>";
}
?>
