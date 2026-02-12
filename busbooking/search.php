<!DOCTYPE html>
<html>

<head>
    <title>Bus Search</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Background Banner */
        .banner {
            height: 100vh;
            background: url("images/banner.png");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Search Box */
        .search-box {
            width: 850px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
        }

        .search-box h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            color: #333;
        }

        /* Form Layout */
        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-group {
            flex: 1;
        }

        label {
            font-weight: bold;
            margin-bottom: 6px;
            display: block;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        input:focus {
            border-color: #e74c3c;
            outline: none;
            box-shadow: 0px 0px 5px rgba(231, 76, 60, 0.4);
        }

        /* Search Button */
        .btn-search {
            margin-top: 22px;
            padding: 13px;
            width: 100%;
            background: #e74c3c;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-search:hover {
            background: #c0392b;
        }
    </style>

</head>

<body>

    <div class="banner">

        <div class="search-box">

            <h2>Book Your Bus Ticket</h2>

            <form action="buses.php" method="GET">

                <div class="form-row">

                    <div class="form-group">
                        <label> From</label>
                        <input type="text" name="source" placeholder="Enter Source City" required>
                    </div>

                    <div class="form-group">
                        <label>  To</label>
                        <input type="text" name="destination" placeholder="Enter Destination City" required>
                    </div>

                    <div class="form-group">
                        <label>Travel Date</label>
                        <input type="date" name="travel_date" required>
                    </div>

                </div>

                <button type="submit" class="btn-search">Search Buses</button>

            </form>

        </div>

    </div>

</body>

</html>