<main class="content">
            <h2>Dashboard</h2>
            <p> Welcome to the Baranggay Clearance System.</p>
            <h2>Dashboard Analytics</h2>
            <p>The warm-up is over. Let the real games begin.</p>
        </main>
    </div>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f7f4;
}

.header {
    background-color: #006b3c;
    color: white;
    padding: 20px;
}

.header h1 {
    font-size: 24px;
}

.navbar {
    background-color: #008f4c;
    padding: 10px 20px;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
}

.navbar a:hover {
    text-decoration: underline;
}

.layout {
    display: flex;
    min-height: 500px;
}

.sidebar {
    width: 200px;
    background-color: white;
    padding: 20px;
    border-right: 1px solid #ddd;
}

.sidebar h3 {
    margin-bottom: 15px;
    color: #006b3c;
}

.sidebar a {
    display: block;
    color: #333;
    text-decoration: none;
    padding: 10px 0;
}

.sidebar a:hover {
    color: #008f4c;
}

.sidebar-note {
    margin-top: 30px;
    padding-top: 15px;
    border-top: 1px solid #ddd;
    color: #777;
    font-size: 16px;
}

.content {
    flex: 1;
    padding: 30px;
}

.content h2 {
    margin-bottom: 10px;
    color: #006b3c;
    
}/* Login Form Styling */
.login-box {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 6px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
}

.login-box h3 {
    margin-bottom: 10px;
    color: #006b3c;
    font-size: 16px;
}

.login-box input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.login-box button {
    width: 100%;
    padding: 8px;
    background-color: #006b3c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.login-box button:hover {
    background-color: #008f4c;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f7f4;
    margin: 0;
    height: 100vh; /* Takes up the full height of the screen */
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center;     /* Centers vertically */
}

.login-container {
    width: 100%;
    max-width: 400px; /* Controls how wide the login box can get */
    padding: 20px;
}

.login-box {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Adds a nice card shadow */
    border: 1px solid #ddd;
}

.login-box h2 {
    margin-bottom: 20px;
    color: #006b3c;
    text-align: center; /* Centers the "Login" title text */
}

.login-box input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.login-box button {
    width: 100%;
    padding: 10px;
    background-color: #006b3c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.login-box button:hover {
    background-color: #008f4c;
}
    </style>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>

    <!-- Rest of your sidebar links -->
    <h3>Navigation</h3>
    <a href="#">Home</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    
    <div class="sidebar-note">
        Logged in as Guest
    </div>
</div>

</body>