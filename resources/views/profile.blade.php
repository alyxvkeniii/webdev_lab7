@extends('Components.layout2')

@section('title', 'Add Recipe')

@section('additional-styles')
    <link rel="stylesheet" href="/assets/css/profile.css">
@endsection

@section('content')
    <!-- Profile Section -->
    <!-- Container -->
    <div class="container">
        <!-- Profile Section -->
        <div class="profile-card">
            <img src="profile.jpg" alt="Profile Picture" class="profile-image">
            <h2>Ashutosh Hathidara</h2>
            <p class="bio">
                A passionate individual who always thrives to work on end-to-end products which develop sustainable and scalable social and technical systems to create impact.
            </p>
            <div class="profile-details">
                <p>Level<span class="badge">Chef</span></p>
                <p>Member since <span>Nov 08, 2021</span></p>
            </div>
            <button class="logout-btn">Logout</button>
        </div>

        <!-- About Section -->
        <div class="about-section">
            <h3>About</h3>
            <div class="about-details">
                <p><strong>Full Name</strong><br>Ashutosh Hathidara</p>
                <p><strong>Current Location</strong><br>Bloomington, Indiana</p>
                <p><strong>Gender</strong><br>Male</p>
                <p><strong>Email</strong><br><a href="mailto:ashuhath@iu.edu">ashuhath@iu.edu</a></p>
            </div>
            <a href="#" class="edit-profile">Edit Profile</a>
        </div>
    </div>

    <!-- Accessories Section -->
@endsection
