<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name }} - Resume</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            color: #333;
            line-height: 1.5;
            font-size: 14px;
            background-color: #fff;
        }
        .container {
            display: flex;
            min-height: 100%;
        }
        .sidebar {
            width: 30%;
            background-color: #374151;
            color: #f3f4f6;
            padding: 40px 20px;
        }
        .main-content {
            width: 70%;
            padding: 40px 30px;
        }
        .profile {
            text-align: center;
            margin-bottom: 30px;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .title {
            font-size: 16px;
            color: #d1d5db;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-bottom: 30px;
        }
        .contact-item {
            margin-bottom: 10px;
            font-size: 13px;
        }
        .contact-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .sidebar-section {
            margin-bottom: 25px;
        }
        .sidebar-section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid #4f46e5;
        }
        .skill-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 13px;
        }
        .skill-level {
            width: 70%;
            height: 8px;
            background-color: #6b7280;
            border-radius: 4px;
            overflow: hidden;
        }
        .skill-level-bar {
            height: 100%;
            background-color: #4f46e5;
        }
        .main-section {
            margin-bottom: 30px;
        }
        .main-section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #4f46e5;
            padding-bottom: 5px;
            border-bottom: 1px solid #e5e7eb;
        }
        .experience-item, .education-item, .project-item {
            margin-bottom: 20px;
        }
        .item-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .item-title {
            font-weight: bold;
            font-size: 16px;
            color: #111827;
        }
        .item-subtitle {
            font-size: 14px;
            color: #4b5563;
        }
        .item-date {
            color: #6b7280;
            font-size: 13px;
        }
        .item-content {
            font-size: 14px;
            color: #4b5563;
        }
        .project-url {
            color: #4f46e5;
            font-size: 13px;
            margin-bottom: 5px;
        }
        .project-technologies {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Profile -->
            <div class="profile">
                <div class="name">{{ $resume->full_name }}</div>
                @if(count($experience) > 0)
                <div class="title">{{ $experience[0]->position }}</div>
                @else
                <div class="title">Software Developer</div>
                @endif
            </div>
            
            <!-- Contact Information -->
            <div class="sidebar-section">
                <div class="sidebar-section-title">CONTACT</div>
                <div class="contact-info">
                    @if($resume->email)
                        <div class="contact-item">
                            <i>✉</i> {{ $resume->email }}
                        </div>
                    @endif
                    
                    @if($resume->phone)
                        <div class="contact-item">
                            <i>☎</i> {{ $resume->phone }}
                        </div>
                    @endif
                    
                    @if($resume->address)
                        <div class="contact-item">
                            <i>📍</i> {{ $resume->address }}
                        </div>
                    @endif
                    
                    @if($resume->website)
                        <div class="contact-item">
                            <i>🌐</i> {{ $resume->website }}
                        </div>
                    @endif
                    
                    @if($resume->linkedin)
                        <div class="contact-item">
                            <i>in</i> {{ $resume->linkedin }}
                        </div>
                    @endif
                    
                    @if($resume->github)
                        <div class="contact-item">
                            <i>⚙</i> {{ $resume->github }}
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Skills -->
            <div class="sidebar-section">
                <div class="sidebar-section-title">SKILLS</div>
                @foreach($skills as $skill)
                    <div class="skill-item">
                        <div>{{ $skill->skill_name }}</div>
                        <div class="skill-level">
                            @php
                                $skillLevel = 0;
                                if ($skill->proficiency == 'Beginner') {
                                    $skillLevel = 25;
                                } elseif ($skill->proficiency == 'Intermediate') {
                                    $skillLevel = 50;
                                } elseif ($skill->proficiency == 'Advanced') {
                                    $skillLevel = 75;
                                } elseif ($skill->proficiency == 'Expert') {
                                    $skillLevel = 100;
                                }
                            @endphp
                            <div class="skill-level-bar" style="width: {{ $skillLevel }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Education -->
            <div class="sidebar-section">
                <div class="sidebar-section-title">EDUCATION</div>
                @foreach($education as $edu)
                    <div class="education-item">
                        <div class="item-title">{{ $edu->institution }}</div>
                        <div class="item-subtitle">{{ $edu->degree }}</div>
                        <div class="item-date">
                            @if($edu->start_date)
                                {{ date('Y', strtotime($edu->start_date)) }} - 
                                @if($edu->end_date)
                                    {{ date('Y', strtotime($edu->end_date)) }}
                                @else
                                    Present
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Summary -->
            @if($resume->summary)
                <div class="main-section">
                    <div class="main-section-title">ABOUT ME</div>
                    <p>{{ $resume->summary }}</p>
                </div>
            @endif
            
            <!-- Experience -->
            <div class="main-section">
                <div class="main-section-title">WORK EXPERIENCE</div>
                @foreach($experience as $exp)
                    <div class="experience-item">
                        <div class="item-header">
                            <div class="item-title">{{ $exp->position }}</div>
                            <div class="item-date">
                                @if($exp->start_date)
                                    {{ date('M Y', strtotime($exp->start_date)) }} - 
                                    @if($exp->current_job)
                                        Present
                                    @elseif($exp->end_date)
                                        {{ date('M Y', strtotime($exp->end_date)) }}
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="item-subtitle">{{ $exp->company_name }}</div>
                        @if($exp->job_description)
                            <div class="item-content">{{ $exp->job_description }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
            
            <!-- Projects -->
            <div class="main-section">
                <div class="main-section-title">PROJECTS</div>
                @foreach($projects as $project)
                    <div class="project-item">
                        <div class="item-title">{{ $project->project_name }}</div>
                        @if($project->project_url)
                            <div class="project-url">{{ $project->project_url }}</div>
                        @endif
                        @if($project->technologies)
                            <div class="project-technologies">
                                <strong>Technologies:</strong> {{ $project->technologies }}
                            </div>
                        @endif
                        @if($project->description)
                            <div class="item-content">{{ $project->description }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
