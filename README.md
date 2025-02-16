# Contact Management System

This is a simple **CRUD (Create, Read, Update, Delete)** application built with **PHP, MySQL, and Tailwind CSS** for managing contacts. It also includes a feature to **bulk import contacts from an XML file**.

## Features
- ✅ Add new contacts
- ✅ View all contacts
- ✅ Edit existing contacts
- ✅ Delete contacts
- ✅ Import contacts from an XML file

## Tech Stack
- **PHP** (Core PHP with PDO for database operations)
- **MySQL** (Database for storing contacts)
- **Tailwind CSS** (For styling the UI)

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/Chandrasura25/Niswey-crud
   cd niswey-crud
   ```
2. Set up the database:
   - Import the `contacts.sql` file into MySQL.
   - Update database credentials in `config/db.php`.

3. Start the XAMPP control panel and ensure that Apache and MySQL are running.
4. Open your browser and go to `http://localhost/niswey`.

## Usage
### Add a New Contact
- Click the **"Add Contact"** button.
- Fill in the details and submit.

### Edit or Delete a Contact
- Click **"Edit"** to modify a contact.
- Click **"Delete"** to remove a contact permanently.

### Import Contacts from XML
- Click the **"Import XML"** button.
- Upload an XML file containing contact details.
- Contacts will be added to the database.

## Sample XML Format
<contacts>
    <contact>
        <name>John</name>
        <lastName>Doe</lastName>
        <phone>+1234567890</phone>
    </contact>
    <contact>
        <name>Jane</name>
        <lastName>Smith</lastName>
        <phone>+0987654321</phone>
    </contact>
</contacts>