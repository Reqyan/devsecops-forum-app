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
            /* margin-bottom: 10px; */
            display: flex;
            flex-direction: row;
            padding: 20px 0;
            /* border-top: 1px solid #ddd; */
            /* border-bottom: 1px solid #ddd; */

        }

        span {
            align-content: center;
            display: block;
            font-size: 18px;
            color: #666;
            cursor: pointer;
            width: 20%;
        }

        label {
            /* margin-bottom: 20px;  */
            display: block;
            font-size: 18px;
            color: #666;
            cursor: pointer;
            align-content: center;
            width: 20%;
        }

        label:first-child {
            margin-bottom: 0;
            border-bottom: none;
        }

        input[type="text"],
        input[type="email"] {
            padding: 10px 20px;
            border: 1px solid #999;
            border-radius: 3px;
            display: block;
            width: 100%;
            /* margin-bottom: 20px; */
            box-sizing: border-box;
            outline: none;
        }

        input[type="text"]:focus,
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
            /* display: inline-block; */
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
                <label for="name">Name </label>
                <input type="text" id="name" name="name">
            </div>
            <div class="profile-item">
                <label for="email">Email </label>
                <input type="email" id="email" name="email">
            </div>
            <div class="text-center">
                <button type="submit" class="button" style="border: 0px;">Update Profile</button>
                <!-- <button type="button" class="button" style="border: 0px;">Cancel</button> -->
                <a href="/" class="button">Cancel</a>
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

        document.addEventListener('DOMContentLoaded', fetchProfile);
    </script>
</body>

</html>