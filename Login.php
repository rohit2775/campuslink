



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - Login</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config={theme:{extend:{colors:{primary:'#1E3A8A',secondary:'#4F46E5'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        .floating-label {
            position: absolute;
            pointer-events: none;
            left: 1rem;
            top: 1rem;
            transition: 0.2s ease all;
            color: #9CA3AF;
        }
        
        input:focus ~ .floating-label,
        input:not(:placeholder-shown) ~ .floating-label {
            top: -0.75rem;
            left: 0.75rem;
            font-size: 0.75rem;
            color: #1E3A8A;
            background-color: white;
            padding: 0 0.25rem;
        }
        #signin{
            text-align: center;
            border: 2px solid black;
            margin-top: 10px;
            background-color: blue;
            color: white;

        }
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            animation: float 15s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-30px) translateX(15px);
            }
            50% {
                transform: translateY(-15px) translateX(-15px);
            }
            75% {
                transform: translateY(30px) translateX(10px);
            }
        }
        
        .node-animation {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .node {
            position: absolute;
            width: 12px;
            height: 12px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            animation: pulse 3s infinite;
        }
        
        .node-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
            transform-origin: left center;
            animation: fadeInOut 4s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.8;
            }
            50% {
                transform: scale(1.1);
                opacity: 1;
            }
        }
        
        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0.2;
            }
            50% {
                opacity: 0.8;
            }
        }
        
        .custom-checkbox {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            user-select: none;
        }
        
        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #fff;
            border: 1px solid #D1D5DB;
            border-radius: 4px;
        }
        
        .custom-checkbox:hover input ~ .checkmark {
            border-color: #9CA3AF;
        }
        
        .custom-checkbox input:checked ~ .checkmark {
            background-color: #1E3A8A;
            border-color: #1E3A8A;
        }
        
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        
        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
        }
        
        .custom-checkbox .checkmark:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        
        .custom-switch {
            position: relative;
            display: inline-block;
            width: 38px;
            height: 20px;
        }
        
        .custom-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #E5E7EB;
            transition: .4s;
            border-radius: 20px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: #1E3A8A;
        }
        
        input:checked + .slider:before {
            transform: translateX(18px);
        }
        
        .carousel {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 120px;
        }
        
        .carousel-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }
        
        .carousel-item.active {
            opacity: 1;
        }
        
        .btn-loading .btn-text {
            visibility: hidden;
        }
        
        .btn-loading .loading-spinner {
            display: flex;
        }
        
        .loading-spinner {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .spinner {
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 2px solid white;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="min-h-screen bg-white">
    <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Left Side - Hero Section -->
        <div class="w-full lg:w-1/2 bg-primary relative overflow-hidden flex flex-col justify-center items-center px-8 py-12 lg:py-0">
            <div class="particles">
                <!-- Particles will be generated by JS -->
            </div>
            
            <div class="node-animation">
                <!-- Nodes will be generated by JS -->
            </div>
            
            <div class="relative z-10 flex flex-col items-center lg:items-start text-white max-w-lg">
                <div class="font-['Pacifico'] text-4xl lg:text-5xl mb-6 text-center lg:text-left">Campus Link</div>
                
                <h1 class="text-3xl lg:text-4xl font-bold mb-4 text-center lg:text-left">Connect. Learn. Grow Together.</h1>
                
                <p class="text-lg opacity-90 mb-8 text-center lg:text-left">Join thousands of developers building meaningful connections and advancing their dreams through collaboration .</p>
                
                <div class="carousel w-full">
                    <div class="carousel-item active">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <p class="text-sm italic mb-2">"Campus Link helped me find a team who supported me to win my hackathon."</p>
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-white/30 flex items-center justify-center mr-2">
                                    <i class="ri-user-line text-white"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Michael Richardson</p>
                                    <p class="text-xs">Class of 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <p class="text-sm italic mb-2">"I've mentored 12 students and it's been the most rewarding experience of my career."</p>
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-white/30 flex items-center justify-center mr-2">
                                    <i class="ri-user-line text-white"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Samantha Patel</p>
                                    <p class="text-xs">Class of 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <p class="text-sm italic mb-2">"The networking events connected me with skilled teammates who helped fund my startup."</p>
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-white/30 flex items-center justify-center mr-2">
                                    <i class="ri-user-line text-white"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">David Thompson</p>
                                    <p class="text-xs">Class of 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex mt-12 space-x-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 text-center">
                        <p class="text-2xl font-bold">15K+</p>
                        <p class="text-sm">Skilled developers</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 text-center">
                        <p class="text-2xl font-bold">3.2K</p>
                        <p class="text-sm">Mentors</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 text-center">
                        <p class="text-2xl font-bold">87%</p>
                        <p class="text-sm">Success Rate</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
               
                
                <div class="space-y-6">
                    
                   
                    
                    <!-- Login Form -->
                    <form id="loginForm" action="login.php" method="POST">
                        <div class="space-y-4">
                            <!-- Email Input -->
                            <div class="relative">
                                <input type="text" id="username" name="username" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors" placeholder=" " required>
                                <span class="floating-label">Username or Email</span>
                            </div>
                            
                            <!-- Password Input -->
                            <div class="relative">
                                <input type="password" id="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors pr-10" placeholder=" " required>
                                <span class="floating-label">Password</span>
                                <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </div>
                            
                            <!-- Remember Me & Forgot Password -->
                            <div class="flex items-center justify-between">
                                <label class="custom-checkbox text-sm text-gray-600">
                                    Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="text-sm text-primary hover:underline">Forgot Password?</a>
                            </div>
                            
                            <!-- Login Button -->
                          
                        </div>
                         <a href="afterindex.php">
                             <h3 id="signin">sign in </h3>
                         </a>

                    </form>
                    
                    <!-- Sign Up Link -->
                    <div class="text-center">
                        <p class="text-gray-600">
                            New to Campus Link? 
                            <a href="signup.html" class="text-primary font-medium hover:underline">sign up</a>
                        </p>
                    </div>
                    
                    <!-- Footer Links -->
                    <div class="pt-6 border-t border-gray-200">
                        <div class="flex justify-between text-sm text-gray-500">
                            <a href="#" class="hover:text-gray-700">Help & Support</a>
                            <a href="#" class="hover:text-gray-700">Privacy Policy</a>
                            <a href="#" class="hover:text-gray-700">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create particles
            const particlesContainer = document.querySelector('.particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 5 and 15px
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation delay
                particle.style.animationDelay = `${Math.random() * 15}s`;
                
                particlesContainer.appendChild(particle);
            }
            
            // Create network nodes
            const nodeContainer = document.querySelector('.node-animation');
            const nodeCount = 8;
            const nodes = [];
            
            for (let i = 0; i < nodeCount; i++) {
                const node = document.createElement('div');
                node.classList.add('node');
                
                // Random position
                const left = Math.random() * 80 + 10;
                const top = Math.random() * 80 + 10;
                node.style.left = `${left}%`;
                node.style.top = `${top}%`;
                
                // Random animation delay
                node.style.animationDelay = `${Math.random() * 3}s`;
                
                nodeContainer.appendChild(node);
                nodes.push({ element: node, left, top });
            }
            
            // Create connections between nodes
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    if (Math.random() > 0.5) continue; // Only create some connections
                    
                    const line = document.createElement('div');
                    line.classList.add('node-line');
                    
                    const x1 = nodes[i].left;
                    const y1 = nodes[i].top;
                    const x2 = nodes[j].left;
                    const y2 = nodes[j].top;
                    
                    // Calculate distance and angle
                    const distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
                    const angle = Math.atan2(y2 - y1, x2 - x1) * 180 / Math.PI;
                    
                    // Position and rotate line
                    line.style.width = `${distance}%`;
                    line.style.left = `${x1}%`;
                    line.style.top = `${y1}%`;
                    line.style.transform = `rotate(${angle}deg)`;
                    
                    // Random animation delay
                    line.style.animationDelay = `${Math.random() * 4}s`;
                    
                    nodeContainer.appendChild(line);
                }
            }
            
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle icon
                const icon = togglePassword.querySelector('i');
                if (type === 'password') {
                    icon.classList.remove('ri-eye-off-line');
                    icon.classList.add('ri-eye-line');
                } else {
                    icon.classList.remove('ri-eye-line');
                    icon.classList.add('ri-eye-off-line');
                }
            });
            
            // Carousel rotation
            const carouselItems = document.querySelectorAll('.carousel-item');
            let currentIndex = 0;
            
            function rotateCarousel() {
                carouselItems.forEach(item => item.classList.remove('active'));
                currentIndex = (currentIndex + 1) % carouselItems.length;
                carouselItems[currentIndex].classList.add('active');
            }
            
            setInterval(rotateCarousel, 5000);
            
            // Form submission with loading animation
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');
            
            loginForm.addEventListener('submit', function(e) {
                 e.
            
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            // Input animations
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
        });
    </script>
    <script src="login.js"></script>
</body>
</html>