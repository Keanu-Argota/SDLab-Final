<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Commissioned Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #1E1E1E;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: white !important;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0 10px;
        }

        .navbar-nav.ms-auto {
            margin-right: 0 !important;
            align-items: center;
        }

        /* Search Bar Styles */
        .search-container {
            position: relative;
            margin-left: 15px;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            color: white;
        }

        .nav-icons i {
            cursor: pointer;
            margin-left: 15px;
        }

        /* Search Popup Styles */
        .search-popup {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: none;
            width: 200px;
            z-index: 1000;
        }

        .search-popup input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-popup.active {
            display: block;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }
        
        .commissioned-hero {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .commissioned-hero h1 {
            font-size: 32px;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        .commissioned-hero p {
            font-style: italic;
            color: #666;
            margin-top: 5px;
        }
        
        .design-section {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .design-placeholder {
            background-color: #A99D9D;
            height: 450px;
            flex: 2;
            min-width: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .preview-section {
            flex: 1;
            min-width: 270px;
            display: flex;
            flex-direction: column;
        }
        
        .preview-placeholder {
            background-color: #A99D9D;
            height: 300px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .download-btn {
            background-color: #A99D9D;
            color: black;
            font-weight: bold;
            border: none;
            width: 100%;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s;
        }
        
        .download-btn:hover {
            background-color: #968888;
        }
        
        .tshirt-container {
            width: 270px;
            height: 320px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .tshirt-image {
            width: 100%;
            height: auto;
        }
        
        .design-area {
            position: absolute;
            top: 33%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%;
            height: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #1a75bb;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
        }
        
        .upload-placeholder {
            border: 2px dashed #1a75bb;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #1a75bb;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            padding: 5px;
        }
        
        .design-area img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .upload-section {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        
        .file-input-container {
            position: relative;
            flex: 3;
        }
        
        .custom-file-input {
            width: 100%;
            padding: 8px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: white;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        
        .upload-section input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .preview-btn {
            flex: 1;
            background-color: #888;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .preview-btn:hover {
            background-color: #666;
        }
        
        .options-section {
            margin: 20px 0;
        }
        
        .option-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid #ccc;
            transition: border-color 0.2s;
        }
        
        .color-option.active {
            border: 2px solid #333;
        }
        
        .size-options {
            display: flex;
            gap: 10px;
        }
        
        .size-option {
            padding: 5px 15px;
            border: 1px solid #ccc;
            cursor: pointer;
            text-align: center;
            transition: all 0.2s;
        }
        
        .size-option.active {
            background-color: #333;
            color: white;
        }
        
        .design-controls {
            margin-top: 15px;
        }
        
        .slider-control {
            margin-bottom: 10px;
        }
        
        .slider-control label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
        }
        
        .slider-control input {
            width: 100%;
        }

        /* Added styles for tab navigation */
        .custom-tabs {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        .custom-tab {
            padding: 10px 20px;
            cursor: pointer;
            border: 1px solid transparent;
            border-bottom: none;
            border-radius: 4px 4px 0 0;
            background-color: #f8f9fa;
            margin-right: 5px;
            font-weight: bold;
        }

        .custom-tab.active {
            background-color: #fff;
            border-color: #ddd;
            border-bottom-color: transparent;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Added styles from Inquiry page */
        #processing-canvas {
            display: none;
        }

        /* Media queries for responsive design */
        @media (max-width: 768px) {
            .design-section {
                flex-direction: column;
            }
            
            .design-placeholder, .preview-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Hidden canvas for image processing -->
    <canvas id="processing-canvas"></canvas>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle">
                Metro District Designs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Commissioned.php">INQUIRY</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">LOGIN</a>
                    </li>
                    <li class="nav-item nav-icons">
                        <i class="bi bi-cart cart-icon" id="cartIcon"></i>
                        <div class="search-container">
                            <i class="bi bi-search search-icon" id="searchToggle"></i>
                            <div class="search-popup" id="searchPopup">
                                <input type="text" placeholder="Search designs..." id="searchInput">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="commissioned-hero">
            <h1>COMMISSIONED DESIGNS</h1>
            <p>"Looking for something unique? Get a custom design made just for you!"</p>
        </div>

        <!-- Tab Navigation -->
        <div class="custom-tabs">
            <div class="custom-tab active" data-tab="design-tab">Design Preview</div>
            <div class="custom-tab" data-tab="inquiry-tab">Submit Inquiry</div>
        </div>

        <!-- Design Preview Tab Content -->
        <div class="tab-content active" id="design-tab">
            <div class="design-section">
                <div class="design-placeholder">
                    <div class="tshirt-container" id="large-preview">
                        <svg class="tshirt-image" id="tshirt-svg-large" viewBox="0 0 200 220" xmlns="http://www.w3.org/2000/svg">
                            <!-- T-shirt shape -->
                            <path id="tshirt-body-large" d="M30,20 L60,5 L140,5 L170,20 L190,55 L170,70 L170,200 L30,200 L30,70 L10,55 Z" fill="white" />
                            
                            <!-- Collar -->
                            <path d="M60,5 L100,25 L140,5" fill="none" stroke="#ddd" stroke-width="1" />
                        </svg>
                        <div class="design-area" id="design-large">
                            <div class="upload-placeholder">
                                UPLOAD<br>YOUR<br>IMAGE<br>
                                <span style="font-size: 11px;">750x1200 px</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="preview-section">
                    <div class="preview-placeholder">
                        <div class="tshirt-container" id="small-preview">
                            <svg class="tshirt-image" id="tshirt-svg-small" viewBox="0 0 200 220" xmlns="http://www.w3.org/2000/svg">
                                <!-- T-shirt shape -->
                                <path id="tshirt-body-small" d="M30,20 L60,5 L140,5 L170,20 L190,55 L170,70 L170,200 L30,200 L30,70 L10,55 Z" fill="white" />
                                
                                <!-- Collar -->
                                <path d="M60,5 L100,25 L140,5" fill="none" stroke="#ddd" stroke-width="1" />
                            </svg>
                            <div class="design-area" id="design-small">
                                <div class="upload-placeholder">
                                    UPLOAD<br>YOUR<br>IMAGE<br>
                                    <span style="font-size: 10px;">750x1200 px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="options-section">
                        <div class="option-title">Color</div>
                        <div class="color-options">
                            <div class="color-option active" style="background-color: white;" data-color="white"></div>
                            <div class="color-option" style="background-color: black;" data-color="black"></div>
                            <div class="color-option" style="background-color: #ff6b6b;" data-color="#ff6b6b"></div>
                            <div class="color-option" style="background-color: #4ecdc4;" data-color="#4ecdc4"></div>
                        </div>
                        
                        <div class="option-title">Size</div>
                        <div class="size-options">
                            <div class="size-option" data-size="S">S</div>
                            <div class="size-option active" data-size="M">M</div>
                            <div class="size-option" data-size="L">L</div>
                            <div class="size-option" data-size="XL">XL</div>
                        </div>
                        
                        <div class="design-controls" id="design-controls" style="display: none;">
                            <div class="option-title">Design Adjustments</div>
                            <div class="slider-control">
                                <label for="size-control">Size: <span id="size-value">100</span>%</label>
                                <input type="range" id="size-control" min="20" max="200" value="100">
                            </div>
                            <div class="slider-control">
                                <label for="position-y-control">Position Y: <span id="position-y-value">0</span>px</label>
                                <input type="range" id="position-y-control" min="-50" max="50" value="0">
                            </div>
                        </div>
                    </div>
                    
                    <div class="upload-section">
                        <div class="file-input-container">
                            <div class="custom-file-input" id="file-name">Choose File</div>
                            <input type="file" id="design-upload" accept="image/*">
                        </div>
                        <button class="preview-btn" id="preview-button">Preview</button>
                    </div>
                    
                    <button class="download-btn" id="download-button">Download</button>
                </div>
            </div>
        </div>

        <!-- Inquiry Form Tab Content -->
        <div class="tab-content" id="inquiry-tab">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Send Us Your Design Inquiry</h5>
                            <form id="inquiryForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone (optional)</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="designType" class="form-label">Design Type</label>
                                    <select class="form-select" id="designType" required>
                                        <option value="" selected disabled>Select a design type</option>
                                        <option value="tshirt">T-Shirt Design</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Design Description</label>
                                    <textarea class="form-control" id="description" rows="5" placeholder="Please provide as much detail as possible about your design needs..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="fileUpload" class="form-label">Reference Images (optional)</label>
                                    <input type="file" class="form-control" id="fileUpload" multiple>
                                    <div class="form-text">Upload any reference images that might help us understand your vision.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="budget" class="form-label">Budget Range (PHP)</label>
                                    <select class="form-select" id="budget">
                                        <option value="" selected disabled>Select your budget range</option>
                                        <option value="under100">Under ₱100</option>
                                        <option value="100-200">₱100 - ₱200</option>
                                        <option value="200-500">₱200 - ₱500</option>
                                        <option value="over500">Over ₱500</option>
                                        <option value="flexible">Flexible/Not Sure</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="timeline" class="form-label">Timeline</label>
                                    <select class="form-select" id="timeline">
                                        <option value="" selected disabled>When do you need this by?</option>
                                        <option value="urgent">ASAP (1-3 days)</option>
                                        <option value="standard">Standard (1-2 weeks)</option>
                                        <option value="relaxed">No Rush (2+ weeks)</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark w-100">Submit Inquiry</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Our Design Process</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-dark rounded-circle p-2">1</span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Initial Consultation</h6>
                                            <p class="mb-0 text-muted">We'll discuss your needs and provide a quote.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-dark rounded-circle p-2">2</span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Concept Development</h6>
                                            <p class="mb-0 text-muted">We'll create initial design concepts based on your requirements.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-dark rounded-circle p-2">3</span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Revisions</h6>
                                            <p class="mb-0 text-muted">We'll refine the designs based on your feedback.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-dark rounded-circle p-2">4</span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Final Approval</h6>
                                            <p class="mb-0 text-muted">You'll review and approve the final design.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-dark rounded-circle p-2">5</span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Delivery</h6>
                                            <p class="mb-0 text-muted">We'll deliver the final files in your preferred format.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="mt-4 p-3 bg-light rounded">
                                <h6>Have Questions?</h6>
                                <p class="mb-2">Contact us directly:</p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-envelope me-2"></i>
                                    <a href="mailto:sjbps_10@yahoo.com" style="color: black; text-decoration: none;">sjbps_10@yahoo.com</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-telephone me-2"></i>
                                    <p class="mb-0"><a href="tel:+63282965896" style="color: black; text-decoration: none;">(+632) 8296-5896</a> | <a href="tel:+639201225764" style="color: black; text-decoration: none;">0920 122 5764</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab navigation
            const tabs = document.querySelectorAll('.custom-tab');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    // Add active class to clicked tab
                    tab.classList.add('active');
                    
                    // Hide all tab contents
                    tabContents.forEach(content => content.classList.remove('active'));
                    // Show the corresponding tab content
                    const tabId = tab.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Current selections and states
            const state = {
                color: "white",
                size: "M",
                designSize: 100,
                designPositionY: 0,
                uploadedDesign: null
            };
            
            // DOM elements
            const elements = {
                colorOptions: document.querySelectorAll('.color-option'),
                sizeOptions: document.querySelectorAll('.size-option'),
                fileInput: document.getElementById('design-upload'),
                fileNameDisplay: document.getElementById('file-name'),
                previewButton: document.getElementById('preview-button'),
                downloadButton: document.getElementById('download-button'),
                tshirtBodyLarge: document.getElementById('tshirt-body-large'),
                tshirtBodySmall: document.getElementById('tshirt-body-small'),
                designAreaLarge: document.getElementById('design-large'),
                designAreaSmall: document.getElementById('design-small'),
                designControls: document.getElementById('design-controls'),
                sizeControl: document.getElementById('size-control'),
                sizeValue: document.getElementById('size-value'),
                positionYControl: document.getElementById('position-y-control'),
                positionYValue: document.getElementById('position-y-value')
            };
            
            // Initialize event listeners for design preview
            if (elements.colorOptions) {
                // Color options
                elements.colorOptions.forEach(option => {
                    option.addEventListener('click', () => {
                        changeColor(option.getAttribute('data-color'));
                    });
                });
                
                // Size options
                elements.sizeOptions.forEach(option => {
                    option.addEventListener('click', () => {
                        changeSize(option.getAttribute('data-size'));
                    });
                });
                
                // File input
                elements.fileInput.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        elements.fileNameDisplay.textContent = this.files[0].name;
                    } else {
                        elements.fileNameDisplay.textContent = "Choose File";
                    }
                });
                
                // Preview button
                elements.previewButton.addEventListener('click', previewDesign);
                
                // Download button
                elements.downloadButton.addEventListener('click', downloadDesign);
                
                // Design adjustment controls
                elements.sizeControl.addEventListener('input', function() {
                    state.designSize = this.value;
                    elements.sizeValue.textContent = this.value;
                    updateDesignDisplay();
                });
                
                elements.positionYControl.addEventListener('input', function() {
                    state.designPositionY = this.value;
                    elements.positionYValue.textContent = this.value;
                    updateDesignDisplay();
                });
            }
            
            // Change t-shirt color
            function changeColor(color) {
                // Update current color
                state.color = color;
                
                // Update active color selection
                elements.colorOptions.forEach(option => {
                    option.classList.remove('active');
                    if (option.getAttribute('data-color') === color) {
                        option.classList.add('active');
                    }
                });
                
                // Update T-shirt colors
                elements.tshirtBodyLarge.setAttribute('fill', color);
                elements.tshirtBodySmall.setAttribute('fill', color);
                
                // Update text color in the design area if needed
                if (color === 'black') {
                    elements.designAreaLarge.style.color = 'white';
                    elements.designAreaSmall.style.color = 'white';
                } else {
                    elements.designAreaLarge.style.color = '#1a75bb';
                    elements.designAreaSmall.style.color = '#1a75bb';
                }
            }
            
            // Change t-shirt size
            function changeSize(size) {
                // Update current size
                state.size = size;
                
                // Update active size selection
                elements.sizeOptions.forEach(option => {
                    option.classList.remove('active');
                    if (option.getAttribute('data-size') === size) {
                        option.classList.add('active');
                    }
                });
            }
            
            // Preview the design
        function previewDesign() {
            if (elements.fileInput.files && elements.fileInput.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    // Store the uploaded design
                    state.uploadedDesign = e.target.result;
                    
                    // Show design adjustment controls
                    elements.designControls.style.display = 'block';
                    
                    // Reset adjustment values
                    elements.sizeControl.value = 100;
                    elements.positionYControl.value = 0;
                    elements.sizeValue.textContent = '100';
                    elements.positionYValue.textContent = '0';
                    state.designSize = 100;
                    state.designPositionY = 0;
                    
                    // Update the design display
                    updateDesignDisplay();
                };
                
                reader.readAsDataURL(elements.fileInput.files[0]);
            } else {
                alert('Please select an image file first.');
            }
        }
        
        // Update the design display based on current state
        function updateDesignDisplay() {
            if (state.uploadedDesign) {
                // Create design image elements for both preview areas
                const designLarge = createDesignImage(state.uploadedDesign);
                const designSmall = createDesignImage(state.uploadedDesign);
                
                // Clear previous content
                elements.designAreaLarge.innerHTML = '';
                elements.designAreaSmall.innerHTML = '';
                
                // Apply size and position adjustments
                applyDesignStyles(designLarge);
                applyDesignStyles(designSmall);
                
                // Add images to design areas
                elements.designAreaLarge.appendChild(designLarge);
                elements.designAreaSmall.appendChild(designSmall);
            }
        }
        
        // Create an image element for the design
        function createDesignImage(src) {
            const img = document.createElement('img');
            img.src = src;
            img.className = 'uploaded-design';
            return img;
        }
        
        // Apply styles based on current adjustments
        function applyDesignStyles(imgElement) {
            const scale = state.designSize / 100;
            imgElement.style.transform = `scale(${scale})`;
            imgElement.style.marginTop = `${state.designPositionY}px`;
            imgElement.style.maxWidth = '100%';
            imgElement.style.maxHeight = '100%';
        }
        
        // Download the design preview
        function downloadDesign() {
            if (!state.uploadedDesign) {
                alert('Please upload and preview a design first.');
                return;
            }
            
            // Get the T-shirt container
            const tshirtContainer = document.getElementById('large-preview');
            
            // Create a canvas for processing
            const canvas = document.getElementById('processing-canvas');
            const ctx = canvas.getContext('2d');
            
            // Set canvas dimensions based on the container
            const containerRect = tshirtContainer.getBoundingClientRect();
            canvas.width = containerRect.width * 2; // Higher resolution
            canvas.height = containerRect.height * 2; // Higher resolution
            
            // Create an SVG data URL
            const svgData = new XMLSerializer().serializeToString(document.getElementById('tshirt-svg-large'));
            const svgBlob = new Blob([svgData], {type: 'image/svg+xml;charset=utf-8'});
            const DOMURL = window.URL || window.webkitURL || window;
            const svgUrl = DOMURL.createObjectURL(svgBlob);
            
            // Create images
            const tshirtImg = new Image();
            const designImg = new Image();
            
            // Handle design image loading
            designImg.onload = function() {
                // Handle T-shirt image loading
                tshirtImg.onload = function() {
                    // Draw T-shirt on canvas
                    ctx.drawImage(tshirtImg, 0, 0, canvas.width, canvas.height);
                    
                    // Calculate design position and dimensions
                    const designAreaRect = elements.designAreaLarge.getBoundingClientRect();
                    const scale = state.designSize / 100;
                    const designX = (canvas.width / containerRect.width) * (designAreaRect.left - containerRect.left);
                    const designY = (canvas.height / containerRect.height) * (designAreaRect.top - containerRect.top + parseInt(state.designPositionY));
                    const designWidth = (canvas.width / containerRect.width) * designAreaRect.width * scale;
                    const designHeight = (canvas.height / containerRect.height) * designAreaRect.height * scale;
                    
                    // Draw design on canvas
                    ctx.drawImage(designImg, designX, designY, designWidth, designHeight);
                    
                    // Convert canvas to image
                    const imgData = canvas.toDataURL('image/png');
                    
                    // Create download link
                    const link = document.createElement('a');
                    link.download = `tshirt-design-${state.color}-${state.size}.png`;
                    link.href = imgData;
                    
                    // Trigger download
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                    
                    // Clean up
                    DOMURL.revokeObjectURL(svgUrl);
                };
                
                tshirtImg.src = svgUrl;
            };
            
            designImg.src = state.uploadedDesign;
        }
        
        // Search functionality
        const searchToggle = document.getElementById('searchToggle');
        const searchPopup = document.getElementById('searchPopup');
        const searchInput = document.getElementById('searchInput');
        
        if (searchToggle && searchPopup) {
            searchToggle.addEventListener('click', function() {
                searchPopup.classList.toggle('active');
                if (searchPopup.classList.contains('active')) {
                    searchInput.focus();
                }
            });
            
            // Close search popup when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.search-container')) {
                    searchPopup.classList.remove('active');
                }
            });
        }
        
        // Form submission handling for the inquiry form
        const inquiryForm = document.getElementById('inquiryForm');
        if (inquiryForm) {
            inquiryForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    designType: document.getElementById('designType').value,
                    description: document.getElementById('description').value,
                    budget: document.getElementById('budget').value,
                    timeline: document.getElementById('timeline').value
                };
                
                // Here you would typically send the data to a server
                // For demo purposes, we'll just show an alert
                alert('Thank you for your inquiry! We will contact you soon.');
                inquiryForm.reset();
            });
        }
    });
</script>
</body>
</html>