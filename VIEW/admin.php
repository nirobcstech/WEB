<!DOCTYPE html>
<html>
<head>
    <title>Train Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="../css/adm.css">
</head>
<body>
<header id="header">
        <h1>Train Management System</h1>
    </header>
    <div id="logo-container">
    <img src="../view/bangladesh-railway-logo.png"  id="railway-logo">

    <div class="container">
    <h2>Admin Dashboard</h2>

    <h3>Train Schedule Overview</h3>
    <table border="1">
        <tr>
            <th>Serial</th>
            <th>Train No</th>
            <th>Train Name</th>
            <th>Route</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>101</td>
            <td>Suborno Express</td>
            <td>Dhaka - Chittagong</td>
            <td>10:00 AM</td>
            <td>2:00 PM</td>
            <td>On Time</td>
            <td><button>Edit</button> <button>Delete</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>205</td>
            <td>Turna Express</td>
            <td>Sylhet - Khulna</td>
            <td>8:30 AM</td>
            <td>12:30 PM</td>
            <td>Delayed</td>
            <td><button>Edit</button> <button>Delete</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>705</td>
            <td>Sonar Bangla Express</td>
            <td>Chittagong - Rajshahi</td>
            <td>8:00 AM</td>
            <td>12:00 PM</td>
            <td>On Time</td>
            <td><button>Edit</button> <button>Delete</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>805</td>
            <td>Mahanagar Express</td>
            <td>Rajshahi - Dhaka</td>
            <td>11:00 PM</td>
            <td>5:00 AM</td>
            <td>On Time</td>
            <td><button>Edit</button> <button>Delete</button></td>
        </tr>
    </table>
</div>
<div class="container">
    <h3>Add New Train</h3>
<form>
    <table>
        <tr>
            <td>Train No:</td>
            <td><input type="text" name="train_no"></td>
        </tr>
        <tr>
            <td>Train Name:</td>
            <td><input type="text" name="train_name"></td>
        </tr>
        <tr>
            <td>Route:</td>
            <td><input type="text" name="route"></td>
        </tr>
        <tr>
            <td>Departure:</td>
            <td><input type="text" name="departure"></td>
        </tr>
        <tr>
            <td>Arrival:</td>
            <td><input type="text" name="arrival"></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="status">
                    <option>On Time</option>
                    <option>Delayed</option>
                    <option>Cancelled</option>
                </select>
</td>
        </tr>
       
           
               
          
    </table>
</div>
    
</form>
<form action="book.php" method="post">
<button class="book-btn">ADD TRAIN</button>


    <h3>Notifications</h3>
    <p>No new notifications.</p>

    <h3>Reports</h3>
    <button>Generate Report</button>

</body>
</html>
