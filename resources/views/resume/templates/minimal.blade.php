<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name }} - Resume</title>
    <style>
        * {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            color: #333;
            line-height: 1.5;
            font-size: 12pt;
        }
        .container {
            padding: 40px 50px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .name {
            font-size: 24pt;
            margin-bottom: 10px;
        }
        .contact-info {
            margin-bottom: 20px;
            font-size: 11pt;
        }
        .contact-item {
            display: inline-block;
            margin: 0 10px;
        }
        .section {
            margin-bottom: 20px;
        }
        h2 {
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14pt;
            margin: 15px 0 10px;
            text-align: center;
        }
        .section-line {
            border-top: 1px solid #000;
            margin: 5px 0 15px;
        }
        .item {
            margin-bottom: 15px;
        }
        .item-header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }
        .item-title {
            text-transform: uppercase;
        }
        .item-location {
            font-style: italic;
        }
        .item-date {
            font-weight: normal;
        }
        .item-content {
            margin-top: 5px;
        }
        .skills {
            text-align: center;
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
                    <span class="contact-item">{{ $resume->email }}</span>
                @endif
                
                @if($resume->phone)
                    <span class="contact-item">{{ $resume->phone }}</span>
                @endif
                
                @if($resume->address)
                    <span class="contact-item">{{ $resume->address }}</span>
                @endif
                
                @if($resume->website)
                    <span class="contact-item">{{ $resume->website }}</span>
                @endif
                
                @if($resume->linkedin)
                    <span class="contact-item">LinkedIn: {{ $resume->linkedin }}</span>
                @endif
                
                @if($resume->github)
                    <span class="contact-item">GitHub: {{ $resume->github }}</span>
                @endif
            </div>
        </div>
        
        <!-- Summary Section -->
        @if($resume->summary)
            <div class="section">
                <h2>Professional Summary</h2>
                <div class="section-line"></div>
                <p>{{ $resume->summary }}</p>
            </div>
        @endif
        
        <!-- Experience Section -->
        <div class="section">
            <h2>Professional Experience</h2>
            <div class="section-line"></div>
            @foreach($experience as $exp)
                <div class="item">
                    <div class="item-header">
                        <div class="item-title">{{ $exp->position }}</div>
                        <div class="item-date">
                            @if($exp->start_date)
                                {{ date('m/Y', strtotime($exp->start_date)) }} - 
                                @if($exp->current_job)
                                    Present
                                @elseif($exp->end_date)
                                    {{ date('m/Y', strtotime($exp->end_date)) }}
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="item-location">{{ $exp->company_name }}</div>
                    @if($exp->job_description)
                        <div class="item-content">{{ $exp->job_description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Education Section -->
        <div class="section">
            <h2>Education</h2>
            <div class="section-line"></div>
            @foreach($education as $edu)
                <div class="item">
                    <div class="item-header">
                        <div class="item-title">{{ $edu->degree }} @if($edu->field_of_study) in {{ $edu->field_of_study }} @endif</div>
                        <div class="item-date">
                            @if($edu->start_date)
                                {{ date('m/Y', strtotime($edu->start_date)) }} - 
                                @if($edu->end_date)
                                    {{ date('m/Y', strtotime($edu->end_date)) }}
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="item-location">{{ $edu->institution }}</div>
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
            <h2>Projects</h2>
            <div class="section-line"></div>
            @foreach($projects as $project)
                <div class="item">
                    <div class="item-header">
                        <div class="item-title">{{ $project->project_name }}</div>
                    </div>
                    @if($project->project_url)
                        <div>{{ $project->project_url }}</div>
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
            <h2>Skills</h2>
            <div class="section-line"></div>
            <div class="skills">
                @foreach($skills as $key => $skill)
                    {{ $skill->skill_name }}
                    @if($skill->proficiency)
                        ({{ $skill->proficiency }})
                    @endif
                    @if($key < count($skills) - 1)
                        • 
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
