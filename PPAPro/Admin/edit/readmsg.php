<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .popup {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #0ced39;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="popup">
        <h2>Reply to the Feedback</h2>
        <form action="../Adminhanlder/replyhandler.php" method="POST">
            
            <div class="form-group">
        
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">            
            <textarea id="message" name="message" rows="4" placeholder="Reply to the message" required></textarea>  
            <input type="text" id="subject" name="subject" placeholder="Subject of the email" required>     
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    
</body>
</html>
