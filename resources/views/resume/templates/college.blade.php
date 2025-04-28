<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name ?? 'Rohit Kumar' }} - Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            padding: 40px;
            font-size: 11pt;
            line-height: 1.5;
            color: #000000;
        }
        .header {
            margin-bottom: 15px;
        }
        .name {
            font-size: 18pt;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        .contact-item {
            margin-right: 10px;
        }
        .section {
            margin-bottom: 15px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .skill-category {
            display: flex;
            margin-bottom: 5px;
        }
        .skill-category-title {
            font-weight: bold;
            margin-right: 5px;
        }
        .skill-content {
            margin-left: 3px;
        }
        .skill-bullet:before {
            content: "•";
            margin-right: 5px;
        }
        .project {
            margin-bottom: 15px;
        }
        .project-title {
            font-weight: bold;
        }
        .project-date {
            margin-bottom: 5px;
        }
        .project-links {
            margin-bottom: 5px;
        }
        .project-description {
            text-align: justify;
        }
        .tech-stack {
            font-style: italic;
            margin-top: 5px;
        }
        .education-item, .training-item, .certificate-item, .achievement-item {
            margin-bottom: 10px;
        }
        .institution-name {
            font-weight: bold;
        }
        .degree-info {
            display: flex;
            justify-content: space-between;
        }
        .degree {
            font-weight: bold;
        }
        .date-location {
            display: flex;
            justify-content: space-between;
        }
        .indented {
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="name">{{ $resume->full_name ?? 'Rohit Kumar' }}</div>
        <div class="contact-info">
            @if(isset($resume->linkedin))
                <div class="contact-item">LinkedIn: {{ $resume->linkedin }}</div>
            @else
                <div class="contact-item">LinkedIn: https://www.linkedin.com/in/rohitkumar7277</div>
            @endif
            
            @if(isset($resume->github))
                <div class="contact-item">GitHub: {{ $resume->github }}</div>
            @else
                <div class="contact-item">GitHub: https://github.com/Rohit72099</div>
            @endif
        </div>
        <div class="contact-info">
            @if(isset($resume->email))
                <div class="contact-item">Email: {{ $resume->email }}</div>
            @else
                <div class="contact-item">Email: rk464152@gmail.com</div>
            @endif
            
            @if(isset($resume->phone))
                <div class="contact-item">Mobile: {{ $resume->phone }}</div>
            @else
                <div class="contact-item">Mobile: +91-7209965572</div>
            @endif
        </div>
    </div>
    
    <!-- Skills Section -->
    <div class="section">
        <div class="section-title">SKILLS</div>
        <div class="skill-category">
            <div class="skill-category-title">• Languages:</div>
            <div class="skill-content">
                @if(isset($skills) && count($skills->where('category', 'Languages')) > 0)
                    {{ $skills->where('category', 'Languages')->implode('name', ', ') }}
                @else
                    C++, JavaScript, C, PHP, JAVA, HTML and CSS
                @endif
            </div>
        </div>
        <div class="skill-category">
            <div class="skill-category-title">• Frameworks & Libraries:</div>
            <div class="skill-content">
                @if(isset($skills) && count($skills->where('category', 'Frameworks & Libraries')) > 0)
                    {{ $skills->where('category', 'Frameworks & Libraries')->implode('name', ', ') }}
                @else
                    Bootstrap, Node JS, React JS, Laravel
                @endif
            </div>
        </div>
        <div class="skill-category">
            <div class="skill-category-title">• Tools/Platforms:</div>
            <div class="skill-content">
                @if(isset($skills) && count($skills->where('category', 'Tools/Platforms')) > 0)
                    {{ $skills->where('category', 'Tools/Platforms')->implode('name', ', ') }}
                @else
                    MySQL, MongoDB, VS Code, Git, GitHub, Linux, Docker
                @endif
            </div>
        </div>
        <div class="skill-category">
            <div class="skill-category-title">• Soft Skills:</div>
            <div class="skill-content">
                @if(isset($skills) && count($skills->where('category', 'Soft Skills')) > 0)
                    {{ $skills->where('category', 'Soft Skills')->implode('name', ', ') }}
                @else
                    Problem-Solving Skills, Team Player, Project Management, Leadership
                @endif
            </div>
        </div>
    </div>
    
    <!-- Projects Section -->
    <div class="section">
        <div class="section-title">PROJECTS</div>
        
        @if(isset($projects) && count($projects) > 0)
            @foreach($projects as $project)
                <div class="project">
                    <div class="project-title">• {{ $project->project_name }}</div>
                    <div class="project-date">{{ $project->start_date }} – {{ $project->end_date }}</div>
                    <div class="project-links">
                        GitHub Repo Link: - {{ $project->github_link }}
                        @if($project->deployment_link)
                            Deployment Link: {{ $project->deployment_link }}
                        @endif
                    </div>
                    <div class="project-description">{{ $project->description }}</div>
                    @if($project->technologies)
                        <div class="tech-stack">Tech: {{ $project->technologies }}</div>
                    @endif
                </div>
            @endforeach
        @else
            <!-- EerieVerse Project -->
            <div class="project">
                <div class="project-title">• EerieVerse –an Online Story-sharing Platform</div>
                <div class="project-date">March 2024 – April 2024</div>
                <div class="project-links">
                    GitHub Repo Link: - https://github.com/Rohit72099/Eerieverse2
                    Deployment Link: https://eerieverse2.vercel.app/
                </div>
                <div class="project-description">
                    Developed an interactive and responsive horror-themed story reading platform that allows users to explore, like, and comment on stories. Designed a dynamic frontend with EJS, HTML, CSS, JavaScript, and Bootstrap, while the backend, built with Node.js and Express.js, manages authentication, user interactions, and content handling. Secured the platform with JWT authentication, Helmet.js for security headers, and CSP implementation. Utilized Docker for containerization and deployed with efficient CI/CD practices.
                </div>
                <div class="tech-stack">Tech: HTML, CSS, JavaScript, EJS, Node.js, Express.js, MongoDB, JWT, Helmet.js, CSP, Docker, Git, GitHub</div>
            </div>
            
            <!-- Library Management System -->
            <div class="project">
                <div class="project-title">• Library Management System</div>
                <div class="project-date">Aug 2024- Sept 2024</div>
                <div class="project-links">
                    GitHub Repo Link: - https://github.com/Rohit72099/Library-Management-System
                </div>
                <div class="project-description">
                    Developed a web application that enables users to log in with their username and password, browse books by genre, and issue books. The system tracks and stores issued books in a database associated with the user's profile.
                </div>
                <div class="tech-stack">Tech: Java, Servlet, MySQL, HTML, CSS, JavaScript</div>
            </div>
            
            <!-- Sudoku Solver -->
            <div class="project">
                <div class="project-title">• Sudoku Solver</div>
                <div class="project-date">Jan 2024</div>
                <div class="project-links">
                    GitHub Repo Link: - https://github.com/Rohit72099/Sudoku-Solver-in-c-
                </div>
                <div class="project-description">
                    Developed a Sudoku solver using backtracking to efficiently solve puzzles. The program recursively fills empty cells while ensuring all Sudoku constraints are met. Future enhancements include a Graphical User Interface (GUI) and optimizations using heuristics for improved performance.
                </div>
                <div class="tech-stack">Tech: C++, Backtracking</div>
            </div>
        @endif
    </div>
    
    <!-- Training Section -->
    <div class="section">
        <div class="section-title">TRAINING</div>
        @if(isset($trainings) && count($trainings) > 0)
            @foreach($trainings as $training)
                <div class="training-item">
                    <div class="institution-name">{{ $training->institution }}</div>
                    <div class="degree-info">
                        <span class="degree">{{ $training->title }}</span>
                        <span>{{ $training->start_date }} – {{ $training->end_date }}</span>
                    </div>
                    <div>{{ $training->position }}</div>
                    <div>{{ $training->description }}</div>
                </div>
            @endforeach
        @else
            <div class="training-item">
                <div class="institution-name">AllsoftSolution in collaboration with IBM – Full Stack in Java Training</div>
                <div class="degree-info">
                    <span>June 2024 – July 2024</span>
                </div>
                <div>Trainee</div>
                <div class="indented">
                    Completed a 6-week intensive training program focused on full-stack development using Java. Gained hands-on experience in building web applications, working with databases, and implementing backend functionalities. The training covered Java fundamentals, Java Servlet, REST APIs, frontend technologies, and deployment strategies
                </div>
                <div class="tech-stack">Tech stacks used: Java, JAVA Servlet, MySQL, JavaScript, HTML, CSS, Bootstrap</div>
            </div>
        @endif
    </div>
    
    <!-- Certificates Section -->
    <div class="section">
        <div class="section-title">CERTIFICATES</div>
        @if(isset($certificates) && count($certificates) > 0)
            @foreach($certificates as $certificate)
                <div class="certificate-item">
                    <span>• {{ $certificate->name }}:</span>
                    <span>{{ $certificate->date }}</span>
                </div>
            @endforeach
        @else
            <div class="certificate-item">• Coursera: Programming in C++: A Hands-on Introduction <span style="float:right;">Jan 2024 - Feb 2024</span></div>
            <div class="certificate-item">• Udemy: Mastering Data Structure and Algorithm using C and C++ <span style="float:right;">Nov 2023 - Dec 2023</span></div>
            <div class="certificate-item">• NPTEL: Programming in modern C++ <span style="float:right;">July 2023 – Oct 2023</span></div>
            <div class="certificate-item">• NPTEL: Programming in Java <span style="float:right;">Jan 2024 – April 2024</span></div>
            <div class="certificate-item">• NPTEL: Cloud Computing <span style="float:right;">July 2024 – Oct 2024</span></div>
        @endif
    </div>
    
    <!-- Achievements Section -->
    <div class="section">
        <div class="section-title">ACHIEVEMENTS</div>
        @if(isset($achievements) && count($achievements) > 0)
            @foreach($achievements as $achievement)
                <div class="achievement-item">
                    <div>• {{ $achievement->title }}</div>
                    <div>{{ $achievement->description }}</div>
                </div>
            @endforeach
        @else
            <div class="achievement-item">
                <div>• Secured Rank 155th: <span style="float:right;">October 2024</span></div>
                <div class="indented">Among 3918 participants in GirlScript Summer of Code 2024</div>
            </div>
            <div class="achievement-item">
                <div>• Attained a prominent global ranking at 10786th:</div>
                <div class="indented">Among 40k+ participants in Educational Codeforces Round 165 (Div 2)</div>
            </div>
        @endif
    </div>
    
    <!-- Education Section -->
    <div class="section">
        <div class="section-title">EDUCATION</div>
        @if(isset($educations) && count($educations) > 0)
            @foreach($educations as $education)
                <div class="education-item">
                    <div class="institution-name">{{ $education->institution }}</div>
                    <div class="degree">{{ $education->degree }}</div>
                    <div class="date-location">
                        <span>{{ $education->location }}</span>
                        <span>{{ $education->start_date }} - {{ $education->end_date ?? 'Present' }}</span>
                    </div>
                    @if($education->gpa)
                        <div>{{ $education->gpa_type ?? 'CGPA' }}: {{ $education->gpa }}</div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="education-item">
                <div class="institution-name">Lovely Professional University</div>
                <div class="degree">Bachelor of Technology - Computer Science and Engineering; CGPA: 7.30</div>
                <div class="date-location">
                    <span>Punjab, India</span>
                    <span>Since July 2022</span>
                </div>
            </div>
            <div class="education-item">
                <div class="institution-name">Bal vidya Niketan</div>
                <div class="degree">Intermediate; Percentage: 75.2%</div>
                <div class="date-location">
                    <span>Jehanabad, Bihar</span>
                    <span>April 2019 - March 2021</span>
                </div>
            </div>
            <div class="education-item">
                <div class="institution-name">Dr. G.L. Dutta DAV Public School</div>
                <div class="degree">Matriculation; Percentage: 88%</div>
                <div class="date-location">
                    <span>Patna, Bihar</span>
                    <span>April 2017 - March 2019</span>
                </div>
            </div>
        @endif
    </div>
</body>
</html>



{{-- <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $resume->full_name }} - Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            padding: 40px;
            font-size: 11pt;
            line-height: 1.5;
            color: #000000;
        }
        .header {
            margin-bottom: 15px;
        }
        .name {
            font-size: 18pt;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        .contact-item {
            margin-right: 10px;
        }
        .section {
            margin-bottom: 15px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .skill-category {
            display: flex;
            margin-bottom: 5px;
        }
        .skill-category-title {
            font-weight: bold;
            margin-right: 5px;
        }
        .skill-content {
            margin-left: 3px;
        }
        .skill-bullet:before {
            content: "•";
            margin-right: 5px;
        }
        .project {
            margin-bottom: 15px;
        }
        .project-title {
            font-weight: bold;
        }
        .project-date {
            margin-bottom: 5px;
        }
        .project-links {
            margin-bottom: 5px;
        }
        .project-description {
            text-align: justify;
        }
        .tech-stack {
            font-style: italic;
            margin-top: 5px;
        }
        .education-item, .training-item, .certificate-item, .achievement-item {
            margin-bottom: 10px;
        }
        .institution-name {
            font-weight: bold;
        }
        .degree-info {
            display: flex;
            justify-content: space-between;
        }
        .degree {
            font-weight: bold;
        }
        .date-location {
            display: flex;
            justify-content: space-between;
        }
        .indented {
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="name">{{ $resume->full_name }}</div>
        <div class="contact-info">
            @if($resume->linkedin)
                <div class="contact-item">LinkedIn: {{ $resume->linkedin }}</div>
            @endif
            
            @if($resume->github)
                <div class="contact-item">GitHub: {{ $resume->github }}</div>
            @endif
        </div>
        <div class="contact-info">
            @if($resume->email)
                <div class="contact-item">Email: {{ $resume->email }}</div>
            @endif
            
            @if($resume->phone)
                <div class="contact-item">Mobile: {{ $resume->phone }}</div>
            @endif
        </div>
    </div>
    
    <!-- Skills Section -->
    @if(isset($skills) && $skills->count() > 0)
    <div class="section">
        <div class="section-title">SKILLS</div>
        
        @if($skills->where('category', 'Languages')->count() > 0)
        <div class="skill-category">
            <div class="skill-category-title">• Languages:</div>
            <div class="skill-content">
                {{ $skills->where('category', 'Languages')->pluck('name')->implode(', ') }}
            </div>
        </div>
        @endif
        
        @if($skills->where('category', 'Frameworks & Libraries')->count() > 0)
        <div class="skill-category">
            <div class="skill-category-title">• Frameworks & Libraries:</div>
            <div class="skill-content">
                {{ $skills->where('category', 'Frameworks & Libraries')->pluck('name')->implode(', ') }}
            </div>
        </div>
        @endif
        
        @if($skills->where('category', 'Tools/Platforms')->count() > 0)
        <div class="skill-category">
            <div class="skill-category-title">• Tools/Platforms:</div>
            <div class="skill-content">
                {{ $skills->where('category', 'Tools/Platforms')->pluck('name')->implode(', ') }}
            </div>
        </div>
        @endif
        
        @if($skills->where('category', 'Soft Skills')->count() > 0)
        <div class="skill-category">
            <div class="skill-category-title">• Soft Skills:</div>
            <div class="skill-content">
                {{ $skills->where('category', 'Soft Skills')->pluck('name')->implode(', ') }}
            </div>
        </div>
        @endif
    </div>
    @endif
    
    <!-- Projects Section -->
    @if(isset($projects) && $projects->count() > 0)
    <div class="section">
        <div class="section-title">PROJECTS</div>
        
        @foreach($projects as $project)
        <div class="project">
            <div class="project-title">• {{ $project->project_name }}</div>
            
            @if($project->start_date || $project->end_date)
            <div class="project-date">
                {{ $project->start_date ?? '' }}
                @if($project->start_date && $project->end_date) – @endif
                {{ $project->end_date ?? '' }}
            </div>
            @endif
            
            <div class="project-links">
                @if($project->github_link)
                    GitHub Repo Link: - {{ $project->github_link }}
                @endif
                
                @if($project->deployment_link)
                    Deployment Link: {{ $project->deployment_link }}
                @endif
            </div>
            
            @if($project->description)
            <div class="project-description">{{ $project->description }}</div>
            @endif
            
            @if($project->technologies)
            <div class="tech-stack">Tech: {{ $project->technologies }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
    
    <!-- Training Section -->
    @if(isset($trainings) && $trainings->count() > 0)
    <div class="section">
        <div class="section-title">TRAINING</div>
        
        @foreach($trainings as $training)
        <div class="training-item">
            <div class="institution-name">{{ $training->institution }}</div>
            
            <div class="degree-info">
                <span class="degree">{{ $training->title }}</span>
                <span>
                    {{ $training->start_date ?? '' }}
                    @if($training->start_date && $training->end_date) – @endif
                    {{ $training->end_date ?? '' }}
                </span>
            </div>
            
            @if($training->position)
            <div>{{ $training->position }}</div>
            @endif
            
            @if($training->description)
            <div class="indented">{{ $training->description }}</div>
            @endif
            
            @if($training->tech_stack)
            <div class="tech-stack">Tech stacks used: {{ $training->tech_stack }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
    
    <!-- Certificates Section -->
    @if(isset($certificates) && $certificates->count() > 0)
    <div class="section">
        <div class="section-title">CERTIFICATES</div>
        
        @foreach($certificates as $certificate)
        <div class="certificate-item">
            <span>• {{ $certificate->name }}:</span>
            
            @if($certificate->date)
            <span style="float:right;">{{ $certificate->date }}</span>
            @endif
        </div>
        @endforeach
    </div>
    @endif
    
    <!-- Achievements Section -->
    @if(isset($achievements) && $achievements->count() > 0)
    <div class="section">
        <div class="section-title">ACHIEVEMENTS</div>
        
        @foreach($achievements as $achievement)
        <div class="achievement-item">
            <div>• {{ $achievement->title }}
                @if($achievement->date)
                <span style="float:right;">{{ $achievement->date }}</span>
                @endif
            </div>
            
            @if($achievement->description)
            <div class="indented">{{ $achievement->description }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
    
    <!-- Education Section -->
    @if(isset($educations) && $educations->count() > 0)
    <div class="section">
        <div class="section-title">EDUCATION</div>
        
        @foreach($educations as $education)
        <div class="education-item">
            <div class="institution-name">{{ $education->institution }}</div>
            
            <div class="degree">
                {{ $education->degree }}
                @if($education->field_of_study)
                    - {{ $education->field_of_study }}
                @endif
                
                @if($education->gpa)
                    ; {{ $education->gpa_type ?? 'CGPA' }}: {{ $education->gpa }}
                @endif
            </div>
            
            <div class="date-location">
                @if($education->location)
                <span>{{ $education->location }}</span>
                @endif
                
                <span>
                    @if($education->start_date && $education->end_date)
                        {{ $education->start_date }} - {{ $education->end_date }}
                    @elseif($education->start_date)
                        Since {{ $education->start_date }}
                    @elseif($education->end_date)
                        Completed {{ $education->end_date }}
                    @endif
                </span>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</body>
</html> --}}

