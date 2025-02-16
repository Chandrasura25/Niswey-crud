<?php
include 'config/db.php';

$stmt = $pdo->query("SELECT * FROM contacts");
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">Contact Manager</h1>
            <div class="space-x-4">
                <a href="create.php" class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-100">Add New Contact</a>
                <a href="import.php" class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-100">Import Contacts</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Last Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($contacts as $contact): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700"><?= $contact['id'] ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?= $contact['name'] ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?= $contact['lastName'] ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?= $contact['phone'] ?></td>
                            <td class="px-6 py-4 text-sm">
                                <a href="edit.php?id=<?= $contact['id'] ?>" class="text-blue-600 hover:text-blue-800">Edit</a>
                                <span class="text-gray-300">|</span>
                                <a href="delete.php?id=<?= $contact['id'] ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>