<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .profile-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .profile-container img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
            cursor: pointer;
        }
        .profile-container input[type="file"] {
            display: none;
        }
        .profile-container h2 {
            margin: 15px 0 5px;
            font-size: 1.5rem;
        }
        .profile-container p {
            color: #666;
            margin: 5px 0 15px;
        }
        .profile-container button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .profile-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <label for="profileImage">
            <img src="https://via.placeholder.com/120" alt="Profile Picture" id="profilePicture">
        </label>
        <input type="file" id="profileImage" accept="image/*" onchange="updateImage(event)">
        <h2 id="profileName">John Doe</h2>
        <p id="profileBio">Web Developer & Designer</p>
        <button onclick="editProfile()">Edit Profile</button>
    </div>

    <script>
        function updateImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePicture').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function editProfile() {
            const name = prompt('Enter your name:', document.getElementById('profileName').textContent);
            if (name) {
                document.getElementById('profileName').textContent = name;
            }

            const bio = prompt('Enter your bio:', document.getElementById('profileBio').textContent);
            if (bio) {
                document.getElementById('profileBio').textContent = bio;
            }
        }
    </script>
</body>
</html>
