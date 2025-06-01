<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 900px;
            max-width: 100%;
        }
        
        .login-image {
            height: 100%;
            object-fit: cover;
        }
        
        .login-form {
            padding: 40px;
        }
        
        .form-control {
            border: none;
            border-bottom: 1px solid #ddd;
            border-radius: 0;
            padding-left: 0;
            padding-right: 0;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            box-shadow: none;
            border-bottom-color: #0d6efd;
        }
        
        .btn-login {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            color: white;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(142, 84, 233, 0.3);
        }
        
        .form-label {
            font-weight: 500;
            color: #555;
        }
        
        .login-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
        }
        
        .login-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, #4776E6, #8E54E9);
        }
        
        .input-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }
        
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row g-0">
            <div class="col-lg-6 d-none d-lg-block">
                <img src="../images/login.jpg" alt="Admin Login" class="img-fluid login-image">
            </div>
            <div class="col-lg-6">
                <div class="login-form">
                    <h2 class="login-title">Admin Login</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username"
                             placeholder="Enter your username" required class="form-control">
                            <i class="fas fa-user input-icon"></i>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password"
                             placeholder="Enter your password" required class="form-control">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-login" name="admin_login">
                                Login <i class="fas fa-sign-in-alt ms-2"></i>
                            </button>
                        </div>
                        <p class="text-center mt-4">Don't have an account? 
                            <a href="admin_registration.php" class="text-decoration-none fw-bold" style="color: #8E54E9;">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>