<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .registration-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            width: 1000px;
            max-width: 95%;
        }
        
        .registration-image {
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        
        .registration-form {
            padding: 2.5rem;
        }
        
        .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            background-color: #f8fafc;
            margin-top: 8px; /* Added space between label and input */
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            border-color: var(--primary-color);
            background-color: white;
        }
        
        .form-label {
            font-weight: 500;
            color: #4a5568;
            display: block; /* Ensure label is on its own line */
            margin-bottom: 0; /* Remove default margin */
        }
        
        .btn-register {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .registration-title {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
        }
        
        .registration-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .input-icon {
            position: absolute;
            right: 15px;
            top: 42px; /* Adjusted to align with input field */
            color: #94a3b8;
        }
        
        .login-link {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .login-link:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        
        .password-hint {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 8px; /* Increased space */
        }
        
        @media (max-width: 992px) {
            .registration-image-container {
                display: none;
            }
            .registration-form {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container registration-container">
        <div class="row g-0">
            <div class="col-lg-6 registration-image-container">
                <img src="../images/registration.jpg" alt="Admin Registration" class="img-fluid registration-image h-100">
            </div>
            <div class="col-lg-6">
                <div class="registration-form">
                    <h2 class="registration-title">Create Admin Account</h2>
                    <form action="" method="post">
                        <div class="input-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username"
                             placeholder="Enter your username" required class="form-control">
                            <i class="fas fa-user input-icon"></i>
                        </div>
                        
                        <div class="input-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email"
                             placeholder="Enter your email" required class="form-control">
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        
                        <div class="input-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password"
                             placeholder="Create a password" required class="form-control">
                            <i class="fas fa-lock input-icon"></i>
                            <div class="password-hint">Use 8 or more characters with a mix of letters, numbers & symbols</div>
                        </div>
                        
                        <div class="input-group">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                             placeholder="Re-enter your password" required class="form-control">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-register" name="admin_registration">
                                <i class="fas fa-user-plus me-2"></i> Register Account
                            </button>
                        </div>
                        
                        <p class="text-center mt-4">Already have an account? 
                            <a href="admin_login.php" class="login-link">Sign in here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>