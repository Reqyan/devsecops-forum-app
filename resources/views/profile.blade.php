<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Profile Page</title>
    <style>
        /* Tambahkan CSS sederhana untuk tampilan */
        html {
            background: #FF7361;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .profile {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px 50px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
        }

        .profile h2 {
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
            color: #FF7361;
            font-weight: 300;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .profile-item {
            display: flex;
            flex-direction: row;
            padding: 20px 0;
        }

        span {
            display: block;
            font-size: 18px;
            color: #666;
            cursor: pointer;
            width: 20%;
        }

        label {
            display: block;
            font-size: 18px;
            color: #666;
            cursor: pointer;
            width: 20%;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            padding: 10px 20px;
            border: 1px solid #999;
            border-radius: 3px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            border-color: #FF7361;
        }

        .button {
            margin: 20px auto;
            padding: 10px 20px;
            border-radius: 3px;
            background: #FF7361;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
        }

        .button:hover {
            background: #e66400;
        }

        .text-center {
            text-align: center;
        }

        a {
            text-decoration: none;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="profile">
        <h2>Profile</h2>
        <div class="profile-item">
            <label>Name :</label>
            <span id="profileName">Loading...</span>
        </div>
        <div class="profile-item">
            <label>Email :</label>
            <span id="profileEmail">Loading...</span>
        </div>
        <!-- Form untuk mengupdate profil -->
        <form id="updateForm">
            <div class="profile-item">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="profile-item">
                <label for="email">Email</label>
                <!-- Simulasi payload SQL Injection UNION -->
                <input type="email" id="email" name="email">
            </div>
            <div class="profile-item">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Leave blank if unchanged">
            </div>
            <div class="text-center">
                <button type="submit" class="button" style="border: 0px;">Update Profile</button>
                <a href="/" class="button">Home</a>
            </div>
        </form>

    </div>
    <script>
        async function fetchProfile() {
            const urlParams = window.location.pathname.split('/');
            const profileId = urlParams[urlParams.length - 1];

            try {
                const response = await fetch(`/api/profile/${profileId}`);
                const data = await response.json();

                if (data && data.user) {
                    document.getElementById('profileName').textContent = data.user.name;
                    document.getElementById('profileEmail').textContent = data.user.email;
                    document.getElementById('name').value = data.user.name;
                    document.getElementById('email').value = data.user.email;
                } else {
                    alert('Profile data not found');
                }
            } catch (error) {
                console.error('Error fetching profile:', error);
                alert('An error occurred while fetching the profile.');
            }
        }

        async function updateProfile(event) {
            event.preventDefault();

            const urlParams = window.location.pathname.split('/');
            const profileId = urlParams[urlParams.length - 1];

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value; // Ambil nilai password

            try {
                const response = await fetch(`/api/profile/${profileId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        name: name,
                        email: email,
                        password: password
                    })
                });

                const data = await response.json();
                if (data && data.message) {
                    alert(data.message);
                }
            } catch (error) {
                console.error('Error updating profile:', error);
                alert('An error occurred while updating the profile.');
            }
        }

        document.getElementById('updateForm').addEventListener('submit', updateProfile);
        window.onload = fetchProfile;
    </script>
</body>

</html>
