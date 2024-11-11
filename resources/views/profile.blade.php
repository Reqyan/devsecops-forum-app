<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Profile Page</title>
    <style>
        /* Tambahkan CSS sederhana untuk tampilan */
        body {
            font-family: Arial, sans-serif;
        }

        .profile {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .profile h2 {
            text-align: center;
        }

        .profile-item {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="profile">
        <h2>Profile</h2>
        <div class="profile-item">
            <label>Name:</label>
            <span id="profileName">Loading...</span>
        </div>
        <div class="profile-item">
            <label>Email:</label>
            <span id="profileEmail">Loading...</span>
        </div>
        <!-- Form untuk mengupdate profil -->
        <form id="updateForm">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <button type="submit">Update Profile</button>
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
