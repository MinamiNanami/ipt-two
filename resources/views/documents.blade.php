<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brgy. Sta Barbara Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/06/FvfBaliuag0060_36.JPG');
            background-size: cover;
            background-position: center;
            color: black;
            overflow-x: hidden;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #ffc107;
            padding: 15px 20px;
            color: black;
            font-weight: bold;
            font-size: 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }

        .header .profile-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: gray;
        }

        .main-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            color: white;
            position: fixed;
            height: 100%;
        }

        .sidebar ul {
            list-style: none;
            margin-top: 20px;
        }

        .sidebar ul li {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover {
            background-color: #ffc107;
            color: black;
        }

        .sidebar ul li img {
            width: 20px;
            height: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            margin: 10px;
            margin-left: 270px;
        }

        .section-header {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
            margin-top: 30px;
        }

        .cards-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .card {
            width: 100px;
            text-align: center;
            cursor: pointer;
            margin-left: 20px;
            margin: 10px;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .card p {
            font-size: 12px;
            margin-top: 5px;
        }

        .create-form {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border: 2px dashed #aaa;
            width: 100px;
            height: 100px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 24px;
        }
        
        .table-container .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .table-container input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 240px;
        }

        /* View Button */
        .view-btn {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        .view-btn:hover {
            background-color: #e67e22;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #ffc107;
            color: black;
        }

        table td {
            border-bottom: 1px solid #ddd;
        }

    </style>
</head>
<body>
    <div class="header">
        <div>BRGY. STA BARBARA MANAGEMENT SYSTEM</div>
        <div class="search-container">
            <input type="text" placeholder="Search">
            <div class="profile-icon"></div>
        </div>
    </div>
    <div class="main-container">
        <div class="sidebar">
            <ul>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Dashboard</li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> List of Residents</li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Barangay Certificate</li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Blotter Record</li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Brgy Officials | Staff</li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Settings</li>
            </ul>
        </div>
        <div class="content">
            <div class="section-header">BLOTTER SUMMARY</div>
            <!-- Divs for documents -->
            <div class="cards-container">
                <div class="card create-form" onclick="createNewForm()">+</div>
                <div class="card" onclick="openForm('clearance')">
                    <img src="document-icon.png" alt="Brgy. Clearance">
                    <p>BGRY. CLEARANCE</p>
                </div>
                <div class="card" onclick="openForm('indigency')">
                    <img src="document-icon.png" alt="Brgy. Indigency">
                    <p>BGRY. INDIGENCY</p>
                </div>
                <div class="card" onclick="showMore()">
                    <img src="document-icon.png" alt="See More">
                    <p>SEE MORE...</p>
                </div>
            </div>
            <div class="section-header"> ISSUED FORMS | DOCUMENTS </div>

            <!-- Table for issued forms -->
            <div class="table-container">
                <div class="search-container">
                    <input type="text" placeholder="Search">
                </div>
                <table>
                    <tr>
                        <th> Name </th>
                        <th> Form </th>
                        <th> Date </th>
                        <th> </th>
                    </tr>
                    <tr>
                        <td> Juan Dela Cruz </td>
                        <td> Brgy. clearance </td>
                        <td> 01/01/2000 </td>
                        <td> <button class="view-btn"> VIEW </button></td>
                    </tr>
                    <tr>
                        <td> Maria Clara </td>
                        <td> Brgy. Indigency </td>
                        <td> 01/01/2000 </td>
                        <td> <button class="view-btn"> VIEW </button></td>
                    </tr>
                    <tr>
                        <td> Juan Dela Cruz </td>
                        <td> Brgy. clearance </td>
                        <td> 01/01/2004 </td>
                        <td> <button class="view-btn"> VIEW </button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>