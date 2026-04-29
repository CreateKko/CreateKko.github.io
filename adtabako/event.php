<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "UTF-8">
        <title>Event Registration Fee Calculator </title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 500px;
                margin: 40px auto;
                padding: 0 20px;
            }
            
            h1 {
                font-weight: 600;
                font-size: 2rem;
                margin-bottom: 30px;
                color: #1a1a1a;
                letter-spacing: -0.02em;
            }
            .form-group {
                margin-bottom: 15x;
            }

            label {
                display: block;
                margin-top: 5px;
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="number"] {
            width: 100px;
            padding: 5px;
            }   

            button {
            background: #007cba;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            button:hover {
                background: #005a87;
            }

            .result {
            font-size: 18px;
            color: #28a745;
            font-weight: bold;
            background: #d4edda;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #28a745;
            }
        </style>
    </head>
    <body>
        <h1>Event Registration Fee Calculator</h1>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
                $is_student = isset($_POST['is_student']) ? true : false;

                if($age >= 18) {
                    $base_price = 100;
                } elseif ($age >= 13){
                    $base_price = 50;
                } else {
                    $base_price = 0;
                }
        
                //Apply student discount if applicable
                if($is_student){
                    $discount = $base_price * 0.20;
                    $final_price = $base_price - $discount;
                }else {
                    $final_price = $base_price;
                }
                
                //Display
                echo "<div class='result'> The registration fee for the attendee: $" .number_format($final_price, 2). "</div>";
                    }
        ?>

        <form action="" method="post"> 
            <div class ="form-group"> 
                <label for="age"> Age: </label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="is_student">Are you a student?</label>
                <input type="checkbox" id="is_student" name="is_student">
            </div>

            <button type="submit">Calculate Fee </button>
        </form>
    </body>
</html>