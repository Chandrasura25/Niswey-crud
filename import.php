<?php
include 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xml = simplexml_load_file($_FILES['xml_file']['tmp_name']);

    foreach ($xml->contact as $contact) {
        $name = (string)$contact->name;
        $lastName = (string)$contact->lastName;
        $phone = (string)$contact->phone;

        $stmt = $pdo->prepare("INSERT INTO contacts (name, lastName, phone) VALUES (?, ?, ?)");
        $stmt->execute([$name, $lastName, $phone]);
    }

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Contacts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Import Contacts</h1>
            <form method="POST" enctype="multipart/form-data" class="space-y-6">
                <div>
                    <label for="xml_file" class="block text-sm font-medium text-gray-700">Upload XML File</label>
                    <div class="mt-1">
                        <input type="file" name="xml_file" id="xml_file" accept=".xml" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>