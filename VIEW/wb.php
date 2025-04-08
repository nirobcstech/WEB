<!DOCTYPE html>

<head>
    
    <title>Train Management System</title>
    <link rel="stylesheet" href="../css/weblab2.css">
</head>
<body>
<form action="book.php" method="post">

    <header id="header">
        
        <h1>Train Management System</h1>
    </header>
    <div id="logo-container">
    <img src="../view/bangladesh-railway-logo.png"  id="railway-logo">
</div>
    <div class="container">
        <h2>Train Schedule</h2>
        <table>
            <tr>
                <th>Serial</th>
                <th>Train No</th>
                <th>Train Name</th>
                <th>Route</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Train Class</th>
                <th>Adult</th>
                <th>Child</th>
            </tr>
            <tr>
                <td>1</td>
                <td>101</td>
                <td>Suborno Express</td>
                <td>Dhaka - Chittagong</td>
                <td>10:00 AM</td>
                <td>2:00 PM</td>
                <td>
              
                    <select>
                        <option value="economy">Economy</option>  
                        <option value="business">Business</option>
                        <option value="first_class">First Class</option>
                        
                    </select>
                </td>
                <td> 
                    <select>
                        <option value="0">0</option >
                        <option value="1">1</option >
                        <option value="2">2</option >
                        <option value="3">3</option >
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option >
                        <option value="1">1</option >
                        <option value="2">2</option>
                        <option value="3">3</option >
                    </select>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>205</td>
                <td>Turna_Express</td>
                <td>Sylhet - Khulna</td>
                <td>8:30 AM</td>
                <td>12:30 PM</td>
                <td>
                    <select>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first_class">First Class</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>705</td>
                <td>Sonar Bangla Express</td>
                <td>Chittagong - Rajshahi</td>
                <td>8:00 AM</td>
                <td>12:00 PM</td>
                <td>
                    <select>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first_class">First Class</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>4</td>
            <td>805</td>
                <td>Mahanagar Express</td>
                <td>Rajshahi - Dhaka</td>
                <td>11:00 PM</td>
                <td>5:00 AM</td>
                <td>
                    <select>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first_class">First Class</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
            </tr>

        </table>
    </div>
    

    

</body>
</html>
