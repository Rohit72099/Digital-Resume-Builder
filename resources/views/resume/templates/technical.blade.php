<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name }} - Resume</title>
    <style>
        * {
            font-family: 'Courier New', monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            color: #333;
            line-height: 1.5;
            font-size: 12pt;
            padding: 30px;
            background-color: #f8fafc;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 30px;
            border-bottom: 3px solid #3b82f6;
            padding-bottom: 15px;
        }
        .name {
            font-size: 28pt;
            font-weight: bold;
            color: #1e40af;
            letter-spacing: -1px;
        }
        .contact-info {
            margin-top: 15px;
            font-size: 10pt;
            display: flex;
            flex-wrap: wrap;
        }
        .contact-item {
            margin-right: 15px;
            margin-bottom: 5px;
        }
        .code-comment {
            color: #6b7280;
            font-style: italic;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            font-size: 14pt;
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 15px;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 5px;
        }
        .section-title::before {
            content: "// ";
            color: #3b82f6;
        }
        .item {
            margin-bottom: 20px;
            background-color: #f9fafb;
            padding: 15px;
            border-left: 3px solid #3b82f6;
        }
        .item-header {
            display: flex;
            justify-content: space-between;
        }
        .item-title {
            font-weight: bold;
            color: #1e40af;
        }
        .item-subtitle {
            color: #6b7280;
        }
        .item-date {
            color: #6b7280;
        }
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            margin-left: -5px;
            margin-right: -5px;
        }
        .skill-category {
            flex: 0 0 33.333333%;
            padding: 0 5px;
            margin-bottom: 15px;
        }
        .skill-category-title {
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 5px;
        }
        .skill-list {
            list-style: none;
            margin-bottom: 10px;
        }
        .skill-item {
            margin-bottom: 5px;
            padding-left: 15px;
            position: relative;
        }
        .skill-item::before {
            content: ">";
            position: absolute;
            left: 0;
            color: #3b82f6;
        }
        .project-title {
            font-weight: bold;
            color: #1e40af;
        }
        .project-url {
            color: #3b82f6;
            font-size: 10pt;
            word-break: break-all;
            margin-bottom: 5px;
        }
        .project-technologies {
            margin-bottom: 5px;
        }
        .tech-tag {
            display: inline-block;
            background-color: #dbeafe;
            color: #1e40af;
            padding: 2px 6px;
            margin-right: 5px;
            margin-bottom: 5px;
            border-radius: 4px;
            font-size: 9pt;
        }
        .code-block {
            font-family: 'Courier New', monospace;
            color: #334155;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="name">{{ $resume->full_name }}</div>
            <div class="code-comment">/* Software Developer */</div>
            <div class="contact-info">
                @if($resume->email)
                    <div class="contact-item">📧 {{ $resume->email }}</div>
                @endif
                
                @if($resume->phone)
                    <div class="contact-item">📞 {{ $resume->phone }}</div>
                @endif
                
                @if($resume->address)
                    <div class="contact-item">📍 {{ $resume->address }}</div>
                @endif
                
                @if($resume->website)
                    <div class="contact-item">🌐 {{ $resume->website }}</div>
                @endif
                
                @if($resume->linkedin)
                    <div class="contact-item">🔗 {{ $resume->linkedin }}</div>
                @endif
                
                @if($resume->github)
                    <div class="contact-item">💻 {{ $resume->github }}</div>
                @endif
            </div>
        </div>
        
        <!-- Summary Section -->
        @if($resume->summary)
            <div class="section">
                <div class="section-title">profile</div>
                <div class="code-block">{{ $resume->summary }}</div>
            </div>
        @endif
        
        <!-- Skills Section -->
        <div class="section">
            <div class="section-title">skills</div>
            <div class="skills-container">
                @php
                    $skillCategories = ['Programming Languages', 'Frameworks & Libraries', 'Tools & Technologies'];
                    $skillsByCategory = [
                        'Programming Languages' => [],
                        'Frameworks & Libraries' => [],
                        'Tools & Technologies' => []
                    ];
                    
                    foreach($skills as $index => $skill) {
                        $category = $skillCategories[$index % count($skillCategories)];
                        $skillsByCategory[$category][] = $skill;
                    }
                @endphp
                
                @foreach($skillsByCategory as $category => $categorySkills)
                    @if(count($categorySkills) > 0)
                        <div class="skill-category">
                            <div class="skill-category-title">{{ $category }}:</div>
                            <ul class="skill-list">
                                @foreach($categorySkills as $skill)
                                    <li class="skill-item">
                                        {{ $skill->skill_name }}
                                        @if($skill->proficiency)
                                            <span class="code-comment">({{ $skill->proficiency }})</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        
        <!-- Experience Section -->
        <div class="section">
            <div class="section-title">experience</div>
            @foreach($experience as $exp)
                <div class="item">
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
                        <div class="code-block">{{ $exp->job_description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Projects Section -->
        <div class="section">
            <div class="section-title">projects</div>
            @foreach($projects as $project)
                <div class="item">
                    <div class="project-title">{{ $project->project_name }}</div>
                    @if($project->project_url)
                        <div class="project-url">{{ $project->project_url }}</div>
                    @endif
                    @if($project->technologies)
                        <div class="project-technologies">
                            @foreach(explode(',', $project->technologies) as $tech)
                                <span class="tech-tag">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    @endif
                    @if($project->description)
                        <div class="code-block">{{ $project->description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
        
        <!-- Education Section -->
        <div class="section">
            <div class="section-title">education</div>
            @foreach($education as $edu)
                <div class="item">
                    <div class="item-header">
                        <div class="item-title">{{ $edu->degree }} @if($edu->field_of_study) in {{ $edu->field_of_study }} @endif</div>
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
                    <div class="item-subtitle">{{ $edu->institution }}</div>
                    @if($edu->gpa)
                        <div>GPA: {{ $edu->gpa }}</div>
                    @endif
                    @if($edu->description)
                        <div class="code-block">{{ $edu->description }}</div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
