{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume Templates | Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
            color: #4a5568;
        }
        .resume-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .resume-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .resume-preview {
            height: 450px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid #e2e8f0;
        }
        .resume-preview-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 90%);
        }
        .resume-details {
            padding: 20px;
            text-align: center;
        }
        .resume-title {
            color: #4f46e5;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .btn-download {
            background-color: #10b981;
            border-color: #10b981;
            color: #ffffff;
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-download:hover {
            background-color: #059669;
            border-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #ffffff;
        }
        .page-header {
            text-align: center;
            margin: 40px 0 50px;
        }
        .page-title {
            font-weight: 700;
            color: #4f46e5;
            margin-bottom: 10px;
        }
        .page-subtitle {
            color: #6b7280;
        }
        .btn-back {
            background-color: #6b7280;
            border-color: #6b7280;
        }
        .btn-back:hover {
            background-color: #4b5563;
            border-color: #4b5563;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="page-header">
            <h1 class="page-title">Choose Your Resume Template</h1>
            <p class="page-subtitle">Select the design that best represents your professional identity</p>
            <div class="mt-4">
                <a href="{{ route('resume.create') }}" class="btn btn-back text-white"><i class="fas fa-arrow-left"></i> Back to Form</a>
            </div>
        </div>
        
        <div class="row">
            <!-- Template 1: Modern -->
            <div class="col-md-6 col-lg-3">
                <div class="resume-card">
                    <div class="resume-preview">
                        <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" frameborder="0" width="100%" height="100%"></iframe>
                        <div class="resume-preview-overlay"></div>
                    </div>
                    <div class="resume-details">
                        <h3 class="resume-title">Modern Template</h3>
                        <p>Clean, professional design with a focus on skills and experience.</p>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" class="btn btn-download"><i class="fas fa-download"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            
            <!-- Template 2: Minimal -->
            <div class="col-md-6 col-lg-3">
                <div class="resume-card">
                    <div class="resume-preview">
                        <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" frameborder="0" width="100%" height="100%"></iframe>
                        <div class="resume-preview-overlay"></div>
                    </div>
                    <div class="resume-details">
                        <h3 class="resume-title">Minimal Template</h3>
                        <p>Simple, straightforward layout focusing on your content.</p>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" class="btn btn-download"><i class="fas fa-download"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            
            <!-- Template 3: Creative -->
            <div class="col-md-6 col-lg-3">
                <div class="resume-card">
                    <div class="resume-preview">
                        <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" frameborder="0" width="100%" height="100%"></iframe>
                        <div class="resume-preview-overlay"></div>
                    </div>
                    <div class="resume-details">
                        <h3 class="resume-title">Creative Template</h3>
                        <p>Stand out with a unique design that showcases your personality.</p>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" class="btn btn-download"><i class="fas fa-download"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            
            <!-- Template 4: Technical -->
            <div class="col-md-6 col-lg-3">
                <div class="resume-card">
                    <div class="resume-preview">
                        <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" frameborder="0" width="100%" height="100%"></iframe>
                        <div class="resume-preview-overlay"></div>
                    </div>
                    <div class="resume-details">
                        <h3 class="resume-title">Technical Template</h3>
                        <p>Highlights technical skills and project achievements.</p>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" class="btn btn-download"><i class="fas fa-download"></i> Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}











{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume Templates | Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
            color: #4a5568;
        }
        .page-header {
            text-align: center;
            margin: 40px 0;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }
        .page-title {
            font-weight: 800;
            color: #4f46e5;
            margin-bottom: 15px;
            font-size: 2.5rem;
        }
        .page-subtitle {
            color: #6b7280;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 25px;
        }
        .btn-back {
            background-color: #6b7280;
            border-color: #6b7280;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background-color: #4b5563;
            border-color: #4b5563;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Template comparison layout */
        .templates-container {
            padding: 20px 0 60px;
        }
        .template-comparison {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 60px;
        }
        .template-header {
            padding: 20px 30px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8fafc;
        }
        .template-info {
            display: flex;
            align-items: center;
        }
        .template-badge {
            background-color: #4f46e5;
            color: white;
            padding: 6px 12px;
            border-radius: 50px;
            margin-right: 15px;
            font-size: 14px;
            font-weight: 700;
        }
        .template-title {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0;
            color: #333;
        }
        .preview-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            padding: 30px;
        }
        .full-preview {
            grid-column: span 2;
            height: 600px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        .preview-section {
            height: 300px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        .preview-section-title {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.6);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            text-align: center;
        }
        .template-footer {
            padding: 20px 30px;
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .template-features {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        .template-feature {
            background-color: #f3f4f6;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 13px;
            color: #4b5563;
        }
        .btn-download {
            background-color: #10b981;
            border-color: #10b981;
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-download:hover {
            background-color: #059669;
            border-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #ffffff;
        }
        .iframe-container {
            height: 100%;
            width: 100%;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .iframe-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            transform-origin: 0 0;
        }
        /* Overlay gradient for previews */
        .preview-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 80px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 90%);
            z-index: 2;
            pointer-events: none;
        }
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .preview-grid {
                grid-template-columns: 1fr;
            }
            .full-preview {
                grid-column: span 1;
                height: 500px;
            }
        }
        /* Template selector tabs */
        .template-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .template-tab {
            padding: 12px 25px;
            font-weight: 600;
            color: #6b7280;
            cursor: pointer;
            border-radius: 30px;
            margin: 0 10px 10px;
            transition: all 0.2s ease;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .template-tab:hover {
            background-color: #f3f4f6;
            color: #4f46e5;
        }
        .template-tab.active {
            background-color: #4f46e5;
            color: white;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }
        .template-section {
            display: none;
        }
        .template-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Choose Your Resume Template</h1>
            <p class="page-subtitle">Select the design that best represents your professional identity. Compare the templates below to find the perfect match for your career needs.</p>
            <div>
                <a href="{{ route('resume.create') }}" class="btn btn-back text-white">
                    <i class="fas fa-arrow-left me-2"></i> Back to Form
                </a>
            </div>
        </div>
        
        <div class="template-tabs">
            <div class="template-tab active" data-target="modern">Modern</div>
            <div class="template-tab" data-target="minimal">Minimal</div>
            <div class="template-tab" data-target="creative">Creative</div>
            <div class="template-tab" data-target="technical">Technical</div>
        </div>
        
        <div class="templates-container">
            <!-- Modern Template -->
            <div id="modern" class="template-section active">
                <div class="template-comparison">
                    <div class="template-header">
                        <div class="template-info">
                            <span class="template-badge">Modern</span>
                            <h2 class="template-title">Professional & Clean Design</h2>
                        </div>
                    </div>
                    
                    <div class="preview-grid">
                        <div class="full-preview">
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Header & Summary Focus</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" style="transform: scale(1.5); transform-origin: top left;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Experience & Projects Layout</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" style="transform: scale(1.5); transform-origin: 50% 33%;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                    </div>
                    
                    <div class="template-footer">
                        <div class="template-features">
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Professional format</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Clean typography</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Emphasis on skills</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> ATS-friendly</span>
                        </div>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" class="btn btn-download">
                            <i class="fas fa-download me-2"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Minimal Template -->
            <div id="minimal" class="template-section">
                <div class="template-comparison">
                    <div class="template-header">
                        <div class="template-info">
                            <span class="template-badge">Minimal</span>
                            <h2 class="template-title">Simple & Elegant Layout</h2>
                        </div>
                    </div>
                    
                    <div class="preview-grid">
                        <div class="full-preview">
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Centered Header Style</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" style="transform: scale(1.5); transform-origin: top left;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Content Organization</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" style="transform: scale(1.5); transform-origin: 50% 33%;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                    </div>
                    
                    <div class="template-footer">
                        <div class="template-features">
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Minimalist design</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Traditional format</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Content-focused</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Recruiter-friendly</span>
                        </div>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" class="btn btn-download">
                            <i class="fas fa-download me-2"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Creative Template -->
            <div id="creative" class="template-section">
                <div class="template-comparison">
                    <div class="template-header">
                        <div class="template-info">
                            <span class="template-badge">Creative</span>
                            <h2 class="template-title">Modern Two-Column Design</h2>
                        </div>
                    </div>
                    
                    <div class="preview-grid">
                        <div class="full-preview">
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Left Sidebar Features</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" style="transform: scale(1.5); transform-origin: left top;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Main Content Area</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" style="transform: scale(1.5); transform-origin: 65% 33%;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                    </div>
                    
                    <div class="template-footer">
                        <div class="template-features">
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Visual distinction</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Skill visualization</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Creative industries</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Space-efficient</span>
                        </div>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" class="btn btn-download">
                            <i class="fas fa-download me-2"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Technical Template -->
            <div id="technical" class="template-section">
                <div class="template-comparison">
                    <div class="template-header">
                        <div class="template-info">
                            <span class="template-badge">Technical</span>
                            <h2 class="template-title">Developer-Focused Design</h2>
                        </div>
                    </div>
                    
                    <div class="preview-grid">
                        <div class="full-preview">
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Code-Style Header</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" style="transform: scale(1.5); transform-origin: top left;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                        
                        <div class="preview-section">
                            <div class="preview-section-title">Technical Skills Section</div>
                            <div class="iframe-container">
                                <iframe src="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" style="transform: scale(1.5); transform-origin: 50% 40%;"></iframe>
                            </div>
                            <div class="preview-overlay"></div>
                        </div>
                    </div>
                    
                    <div class="template-footer">
                        <div class="template-features">
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Tech-inspired design</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Skills categorization</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Project highlights</span>
                            <span class="template-feature"><i class="fas fa-check me-1"></i> Code-styled elements</span>
                        </div>
                        <a href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" class="btn btn-download">
                            <i class="fas fa-download me-2"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tab switching functionality
            $('.template-tab').on('click', function() {
                const target = $(this).data('target');
                
                // Update active tab
                $('.template-tab').removeClass('active');
                $(this).addClass('active');
                
                // Show selected template section
                $('.template-section').removeClass('active');
                $('#' + target).addClass('active');
                
                // Scroll to the section
                $('html, body').animate({
                    scrollTop: $('#' + target).offset().top - 100
                }, 500);
            });
        });
    </script>
</body>
</html> --}}



{{-- ----------------------------------------------- --}}




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume Templates | Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
            color: #4a5568;
        }
        .page-header {
            text-align: center;
            margin: 40px 0;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }
        .page-title {
            font-weight: 800;
            color: #4f46e5;
            margin-bottom: 15px;
            font-size: 2.5rem;
        }
        .page-subtitle {
            color: #6b7280;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 25px;
        }
        .btn-back {
            background-color: #6b7280;
            border-color: #6b7280;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background-color: #4b5563;
            border-color: #4b5563;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Template cards */
        .resume-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        .resume-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            border: 3px solid transparent;
        }
        .resume-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .resume-card.selected {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        .resume-preview {
            height: 400px;
            position: relative;
            border-bottom: 1px solid #e2e8f0;
            background-color: #f8fafc;
        }
        .resume-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }
        .resume-preview-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 90%);
            pointer-events: none;
        }
        .resume-details {
            padding: 20px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .resume-title {
            color: #4f46e5;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        .resume-description {
            color: #6b7280;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        .resume-features {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-bottom: 20px;
        }
        .resume-feature {
            background-color: #f3f4f6;
            padding: 4px 10px;
            border-radius: 30px;
            font-size: 11px;
            color: #4b5563;
        }
        .btn-select {
            background-color: #e0e7ff;
            color: #4f46e5;
            border: none;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-select:hover {
            background-color: #c7d2fe;
        }
        .resume-card.selected .btn-select {
            background-color: #4f46e5;
            color: white;
        }
        
        /* Large preview section */
        .preview-section {
            display: none;
            margin-top: 40px;
            padding-top: 40px;
            border-top: 1px solid #e2e8f0;
        }
        .preview-section.active {
            display: block;
        }
        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .preview-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #4f46e5;
        }
        .preview-container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .preview-frame {
            height: 800px;
            width: 100%;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }
        .preview-frame iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .btn-download-large {
            background-color: #10b981;
            border-color: #10b981;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .btn-download-large:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: white;
        }
        .selected-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #4f46e5;
            color: white;
            padding: 5px 12px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 12px;
            z-index: 10;
            display: none;
        }
        .resume-card.selected .selected-badge {
            display: block;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .resume-grid {
                grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
                gap: 20px;
            }
            .resume-preview {
                height: 300px;
            }
            .preview-frame {
                height: 600px;
            }
            .page-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Choose Your Resume Template</h1>
            <p class="page-subtitle">Select the design that best represents your professional identity. Preview each template to find your perfect match.</p>
            <div>
                <a href="{{ route('resume.create') }}" class="btn btn-back text-white">
                    <i class="fas fa-arrow-left me-2"></i> Back to Form
                </a>
            </div>
        </div>
        
        <div class="resume-grid">
            <!-- Template 1: Modern -->
            <div class="resume-card" data-template="modern">
                <span class="selected-badge">Selected</span>
                <div class="resume-preview">
                    <img src="{{ asset('images/templates/modern-preview.jpg') }}" alt="Modern Template Preview">
                    <div class="resume-preview-overlay"></div>
                </div>
                <div class="resume-details">
                    <h3 class="resume-title">Modern</h3>
                    <p class="resume-description">Clean, professional design with a focus on skills and experience.</p>
                    <div class="resume-features">
                        <span class="resume-feature">Professional</span>
                        <span class="resume-feature">Clean Layout</span>
                        <span class="resume-feature">ATS-friendly</span>
                    </div>
                    <button type="button" class="btn btn-select">Select Template</button>
                </div>
            </div>
            
            <!-- Template 2: Minimal -->
            <div class="resume-card" data-template="minimal">
                <span class="selected-badge">Selected</span>
                <div class="resume-preview">
                    <img src="{{ asset('images/templates/minimal-preview.jpg') }}" alt="Minimal Template Preview">
                    <div class="resume-preview-overlay"></div>
                </div>
                <div class="resume-details">
                    <h3 class="resume-title">Minimal</h3>
                    <p class="resume-description">Simple, straightforward layout focusing on your content.</p>
                    <div class="resume-features">
                        <span class="resume-feature">Minimalist</span>
                        <span class="resume-feature">Traditional</span>
                        <span class="resume-feature">Elegant</span>
                    </div>
                    <button type="button" class="btn btn-select">Select Template</button>
                </div>
            </div>
            
            <!-- Template 3: Creative -->
            <div class="resume-card" data-template="creative">
                <span class="selected-badge">Selected</span>
                <div class="resume-preview">
                    <img src="{{ asset('images/templates/creative-preview.jpg') }}" alt="Creative Template Preview">
                    <div class="resume-preview-overlay"></div>
                </div>
                <div class="resume-details">
                    <h3 class="resume-title">Creative</h3>
                    <p class="resume-description">Stand out with a unique design that showcases your personality.</p>
                    <div class="resume-features">
                        <span class="resume-feature">Two-Column</span>
                        <span class="resume-feature">Modern</span>
                        <span class="resume-feature">Distinctive</span>
                    </div>
                    <button type="button" class="btn btn-select">Select Template</button>
                </div>
            </div>
            
            <!-- Template 4: Technical -->
            <div class="resume-card" data-template="technical">
                <span class="selected-badge">Selected</span>
                <div class="resume-preview">
                    <img src="{{ asset('images/templates/technical-preview.jpg') }}" alt="Technical Template Preview">
                    <div class="resume-preview-overlay"></div>
                </div>
                <div class="resume-details">
                    <h3 class="resume-title">Technical</h3>
                    <p class="resume-description">Highlights technical skills and project achievements.</p>
                    <div class="resume-features">
                        <span class="resume-feature">Code-Style</span>
                        <span class="resume-feature">Tech-Focused</span>
                        <span class="resume-feature">Structured</span>
                    </div>
                    <button type="button" class="btn btn-select">Select Template</button>
                </div>
            </div>

            <!-- Template 5: College -->
            <div class="resume-card" data-template="college">
                <span class="selected-badge">Selected</span>
                <div class="resume-preview">
                    <img src="{{ asset('images/templates/technical-preview.jpg') }}" alt="College Template Preview">
                    <div class="resume-preview-overlay"></div>
                </div>
                <div class="resume-details">
                    <h3 class="resume-title">College</h3>
                    <p class="resume-description">Designed for students and recent graduates to showcase their education and skills.</p>
                    <div class="resume-features">
                        <span class="resume-feature">Education-Focused</span>
                        <span class="resume-feature">Student-Friendly</span>
                        <span class="resume-feature">Clean Layout</span>
                    </div>
                    <button type="button" class="btn btn-select">Select Template</button>
                </div>
            </div>
        </div>
        
        
        <!-- Preview Section - Shows when a template is selected -->
        <div id="preview-modern" class="preview-section">
            <div class="preview-header">
                <h2 class="preview-title">Modern Template Preview</h2>
                <a id="download-modern" href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'modern']) }}" class="btn btn-download-large">
                    <i class="fas fa-download me-2"></i> Download PDF
                </a>
            </div>
            <div class="preview-container">
                <div class="preview-frame">
                    <iframe id="frame-modern" src="{{ route('resume.preview_template', ['session_id' => $session_id, 'template' => 'modern']) }}"></iframe>
                </div>
            </div>
        </div>
        
        <div id="preview-minimal" class="preview-section">
            <div class="preview-header">
                <h2 class="preview-title">Minimal Template Preview</h2>
                <a id="download-minimal" href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'minimal']) }}" class="btn btn-download-large">
                    <i class="fas fa-download me-2"></i> Download PDF
                </a>
            </div>
            <div class="preview-container">
                <div class="preview-frame">
                    <iframe id="frame-minimal" src="{{ route('resume.preview_template', ['session_id' => $session_id, 'template' => 'minimal']) }}"></iframe>
                </div>
            </div>
        </div>
        
        <div id="preview-creative" class="preview-section">
            <div class="preview-header">
                <h2 class="preview-title">Creative Template Preview</h2>
                <a id="download-creative" href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'creative']) }}" class="btn btn-download-large">
                    <i class="fas fa-download me-2"></i> Download PDF
                </a>
            </div>
            <div class="preview-container">
                <div class="preview-frame">
                    <iframe id="frame-creative" src="{{ route('resume.preview_template', ['session_id' => $session_id, 'template' => 'creative']) }}"></iframe>
                </div>
            </div>
        </div>
        
        <div id="preview-technical" class="preview-section">
            <div class="preview-header">
                <h2 class="preview-title">Technical Template Preview</h2>
                <a id="download-technical" href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'technical']) }}" class="btn btn-download-large">
                    <i class="fas fa-download me-2"></i> Download PDF
                </a>
            </div>
            <div class="preview-container">
                <div class="preview-frame">
                    <iframe id="frame-technical" src="{{ route('resume.preview_template', ['session_id' => $session_id, 'template' => 'technical']) }}"></iframe>
                </div>
            </div>
        </div>

        <div id="preview-college" class="preview-section">
            <div class="preview-header">
                <h2 class="preview-title">College Template Preview</h2>
                <a id="download-college" href="{{ route('resume.download', ['session_id' => $session_id, 'template' => 'college']) }}" class="btn btn-download-large">
                    <i class="fas fa-download me-2"></i> Download PDF
                </a>
            </div>
            <div class="preview-container">
                <div class="preview-frame">
                    <iframe id="frame-college" src="{{ route('resume.preview_template', ['session_id' => $session_id, 'template' => 'college']) }}"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set up template selection
            $('.resume-card').on('click', function() {
                const template = $(this).data('template');
                
                // Update selected card styling
                $('.resume-card').removeClass('selected');
                $(this).addClass('selected');
                
                // Hide all preview sections and show the selected one
                $('.preview-section').removeClass('active');
                $('#preview-' + template).addClass('active');
                
                // Scroll to preview section
                $('html, body').animate({
                    scrollTop: $('#preview-' + template).offset().top - 20
                }, 500);
                
                // Load iframe content only when selected (lazy loading)
                if (!$('#frame-' + template).attr('src')) {
                    $('#frame-' + template).attr('src', `/preview-template/{{ $session_id }}/` + template);
                }
            });
            
            // Select first template by default
            $('.resume-card:first').click();
        });
    </script>
</body>
</html>
