<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brgy. Sta Barbara Management System</title>
</head>
<style>
/* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/06/FvfBaliuag0060_36.JPG');
    background-size: cover;
    background-position: center;
    color: black;
    overflow-x: hidden;
}

/* Header */
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

/* Search Bar */
.header .search-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.header input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 250px;
}

/* Profile Icon */
.header .profile-icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: gray;
}

/* Main Layout */
.main-container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar (Left Panel) */
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

/* Content Section (Right Panel) */
.content {
    flex: 1;
    width: 60%;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    margin: 10px;
    margin-left: 270px;
}


</style>
<body>
    <div class="header">
        <div>BRGY. STA BARBARA MANAGEMENT SYSTEM</div>
        <div class="search-container">
            <input type="text" placeholder="Search">
            <div class="profile-icon"></div>
        </div>
    </div>
    
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Dashboard </li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> List of Residents </li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Barangay Certificate </li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Blotter Record </li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Brgy Officials | Staff </li>
                <li><img src="https://via.placeholder.com/20" alt="icon"> Settings </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            
        </div>
    </div>
</body>
</html>