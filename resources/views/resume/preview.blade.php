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
</html>
