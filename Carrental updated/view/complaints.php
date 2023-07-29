<!DOCTYPE html>
<html>
<head>
    <title>Complaints</title>
    <style>
        body {
            background-color: #e1f3d8; /* Light green background color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #336633; /* Dark green heading color */
        }

        #box {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #comment {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #fff; /* White button background color */
            color: #000; /* Black button text color */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
        <div id="box">
            <h1>Complaints</h1>
            <form id="complaint-form" method="post">
                <label for="comment">Comment:</label><br>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
                <input type="submit" id="submit-btn" name="submit" value="Submit">
            </form>
            <p id="response-message" style="display: none; color: green;">Your Complaint was saved</p>
        </div>
    </center>


</body>
</html>
