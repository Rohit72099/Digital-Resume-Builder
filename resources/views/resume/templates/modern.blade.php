<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name }} - Resume</title>
    <style>
        * {
            font-family: 'Helvetica', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            color: #333;
            line-height: 1.5;
            font-size: 14px;
        }
        .container {
            padding: 40px 50px;
        }
        .header {
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }
        .name {
            font-size: 28px;
            font-weight: bold;
            color: #4f46e5;
            margin-bottom: 5px;
        }
        .contact-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-size: 13px;
            color: #6b7280;
        }
        .summary {
            margin: 20px 0;
        }
        h2 {
            color: #4f46e5;
            font-size: 18px;
            margin: 20px 0 15px;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 25px;
        }
        .item {
            margin-bottom: 15px;
        }
        .item-header {
            display: flex;
            justify-content: space-between;
        }
        .item-title {
            font-weight: bold;
        }
        .item-subtitle {
            font-style: italic;
            color: #6b7280;
        }
        .item-date {
            color: #6b7280;
            font-size: 13px;
        }
        .item-content {
            margin-top: 5px;
            font-size: 13px;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }
        .skill-item {
            background-color: #f3f4f6;
            padding: 5px 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 15px;
            font-size: 13px;
        }
        .project-title {
            font-weight: bold;
        }
        .project-url {
            color: #4f46e5;
            font-size: 12px;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="name">{{ $resume->full_name }}</div>
            <div class="contact-info">
                @if($resume->email)
                    <span>{{ $resume->email }}</span>
                @endif
                
                @if($resume->phone)
                    <span>{{ $resume->phone }}</span>
                @endif
                
                @if($resume->address)
                    <span>{{ $resume->address }}</span>
                @endif
                
                @if($resume->website)
                    <span>{{ $resume->website }}</span>
                @endif
                
                @if($resume->linkedin)
                    <span>LinkedIn: {{ $resume->linkedin }}</span>
                @endif
                
                @if($resume->github)
                    <span>GitHub: {{ $resume->github }}</span>
                @endif
            </div>
            
            @if($resume->summary)
                <div class="summary">
                    {{ $resume->summary }}
                </div>
            @endif
        </div>
        
        <!-- Experience Section -->
        <div class="section">
            <h2>PROFESSIONAL EXPERIENCE</h2>
            @foreach($experience as $exp)
                <div class="item">
                    <div class="item-header">
                        <div>
                            <div class="item-title">{{ $exp->position }}</div>
                            <div class="item-subtitle">{{ $exp->company_name }}</div>
                        </div>
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
                    @if($exp->job_description)
                        <div class="item-content">{{ $exp->job_description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Education Section -->
        <div class="section">
            <h2>EDUCATION</h2>
            @foreach($education as $edu)
                <div class="item">
                    <div class="item-header">
                        <div>
                            <div class="item-title">{{ $edu->degree }} @if($edu->field_of_study) in {{ $edu->field_of_study }} @endif</div>
                            <div class="item-subtitle">{{ $edu->institution }}</div>
                        </div>
                        <div class="item-date">
                            @if($edu->start_date)
                                {{ date('M Y', strtotime($edu->start_date)) }} - 
                                @if($edu->end_date)
                                    {{ date('M Y', strtotime($edu->end_date)) }}
                                @endif
                            @endif
                        </div>
                    </div>
                    @if($edu->description || $edu->gpa)
                        <div class="item-content">
                            @if($edu->gpa) GPA: {{ $edu->gpa }} @endif
                            @if($edu->description) {{ $edu->description }} @endif
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Projects Section -->
        <div class="section">
            <h2>PROJECTS</h2>
            @foreach($projects as $project)
                <div class="item">
                    <div class="project-title">{{ $project->project_name }}</div>
                    @if($project->project_url)
                        <div class="project-url">{{ $project->project_url }}</div>
                    @endif
                    @if($project->technologies)
                        <div class="item-content"><strong>Technologies:</strong> {{ $project->technologies }}</div>
                    @endif
                    @if($project->description)
                        <div class="item-content">{{ $project->description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Skills Section -->
        <div class="section">
            <h2>SKILLS</h2>
            <ul class="skills-list">
                @foreach($skills as $skill)
                    <li class="skill-item">
                        {{ $skill->skill_name }}
                        @if($skill->proficiency)
                         ({{ $skill->proficiency }})
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
