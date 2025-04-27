<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Resume | Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
            color: #4a5568;
        }
        .form-section {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            padding: 25px;
        }
        .section-title {
            color: #4f46e5;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }
        .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
        }
        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
        }
        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
        }
        .btn-success {
            background-color: #10b981;
            border-color: #10b981;
        }
        .btn-success:hover {
            background-color: #059669;
            border-color: #059669;
        }
        .btn-danger {
            background-color: #ef4444;
            border-color: #ef4444;
        }
        .btn-danger:hover {
            background-color: #dc2626;
            border-color: #dc2626;
        }
        .item-row {
            background-color: #f9fafb;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 3px solid #4f46e5;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="text-center mb-5">Create Your Software Developer Resume</h1>
                
                <form action="{{ route('resume.store') }}" method="POST" id="resumeForm">
                    @csrf
                    <input type="hidden" name="session_id" value="{{ $session_id }}">
                    
                    <!-- Personal Information -->
                    <div class="form-section">
                        <h3 class="section-title">Personal Information</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="full_name" class="form-label">Full Name*</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Location</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="City, State, Country">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="website" class="form-label">Website/Portfolio</label>
                                <input type="url" class="form-control" id="website" name="website">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="url" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="github" class="form-label">GitHub</label>
                                <input type="url" class="form-control" id="github" name="github">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="summary" class="form-label">Professional Summary</label>
                                <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Education -->
                    <div class="form-section">
                        <h3 class="section-title">Education</h3>
                        <div id="education-container">
                            <div class="item-row education-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="education[0][institution]" class="form-label">Institution*</label>
                                        <input type="text" class="form-control" name="education[0][institution]" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="education[0][degree]" class="form-label">Degree*</label>
                                        <input type="text" class="form-control" name="education[0][degree]" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="education[0][field_of_study]" class="form-label">Field of Study</label>
                                        <input type="text" class="form-control" name="education[0][field_of_study]">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="education[0][start_date]" class="form-label">Start Date</label>
                                        <input type="month" class="form-control" name="education[0][start_date]">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="education[0][end_date]" class="form-label">End Date</label>
                                        <input type="month" class="form-control" name="education[0][end_date]">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="education[0][gpa]" class="form-label">GPA</label>
                                        <input type="number" step="0.01" class="form-control" name="education[0][gpa]">
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <label for="education[0][description]" class="form-label">Description</label>
                                        <textarea class="form-control" name="education[0][description]" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-danger btn-sm remove-education" style="display: none;"><i class="fas fa-trash"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" id="add-education" class="btn btn-success"><i class="fas fa-plus"></i> Add More Education</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Experience -->
                    <div class="form-section">
                        <h3 class="section-title">Work Experience</h3>
                        <div id="experience-container">
                            <div class="item-row experience-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="experience[0][company_name]" class="form-label">Company Name*</label>
                                        <input type="text" class="form-control" name="experience[0][company_name]" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="experience[0][position]" class="form-label">Position*</label>
                                        <input type="text" class="form-control" name="experience[0][position]" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="experience[0][start_date]" class="form-label">Start Date</label>
                                        <input type="month" class="form-control" name="experience[0][start_date]">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="experience[0][end_date]" class="form-label">End Date</label>
                                        <input type="month" class="form-control exp-end-date" name="experience[0][end_date]">
                                    </div>
                                    <div class="col-md-4 mb-3 d-flex align-items-end">
                                        <div class="form-check">
                                            <input class="form-check-input current-job" type="checkbox" id="experience[0][current_job]" name="experience[0][current_job]">
                                            <label class="form-check-label" for="experience[0][current_job]">
                                                I currently work here
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="experience[0][job_description]" class="form-label">Job Description</label>
                                        <textarea class="form-control" name="experience[0][job_description]" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-danger btn-sm remove-experience" style="display: none;"><i class="fas fa-trash"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" id="add-experience" class="btn btn-success"><i class="fas fa-plus"></i> Add More Experience</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Projects -->
                    <div class="form-section">
                        <h3 class="section-title">Projects</h3>
                        <div id="project-container">
                            <div class="item-row project-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="project[0][project_name]" class="form-label">Project Name*</label>
                                        <input type="text" class="form-control" name="project[0][project_name]" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="project[0][project_url]" class="form-label">Project URL</label>
                                        <input type="url" class="form-control" name="project[0][project_url]">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="project[0][technologies]" class="form-label">Technologies Used</label>
                                        <input type="text" class="form-control" name="project[0][technologies]" placeholder="e.g., Laravel, Vue.js, MySQL">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="project[0][description]" class="form-label">Description</label>
                                        <textarea class="form-control" name="project[0][description]" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-danger btn-sm remove-project" style="display: none;"><i class="fas fa-trash"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" id="add-project" class="btn btn-success"><i class="fas fa-plus"></i> Add More Projects</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Skills -->
                    <div class="form-section">
                        <h3 class="section-title">Skills</h3>
                        <div id="skill-container">
                            <div class="item-row skill-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="skill[0][skill_name]" class="form-label">Skill Name*</label>
                                        <input type="text" class="form-control" name="skill[0][skill_name]" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="skill[0][proficiency]" class="form-label">Proficiency</label>
                                        <select class="form-select" name="skill[0][proficiency]">
                                            <option value="">Select proficiency</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-danger btn-sm remove-skill" style="display: none;"><i class="fas fa-trash"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" id="add-skill" class="btn btn-success"><i class="fas fa-plus"></i> Add More Skills</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4 mb-5">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5"><i class="fas fa-file-alt"></i> Build Resume</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Education section
            let educationCount = 1;
            $('#add-education').click(function() {
                const newEducation = $('.education-item').first().clone();
                newEducation.find('input, textarea').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        $(this).attr('name', name.replace('[0]', '[' + educationCount + ']'));
                        $(this).val('');
                    }
                });
                newEducation.find('.remove-education').show();
                $('#education-container').append(newEducation);
                educationCount++;
            });

            // Remove education
            $(document).on('click', '.remove-education', function() {
                $(this).closest('.education-item').remove();
            });

            // Experience section
            let experienceCount = 1;
            $('#add-experience').click(function() {
                const newExperience = $('.experience-item').first().clone();
                newExperience.find('input, textarea, select').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        $(this).attr('name', name.replace('[0]', '[' + experienceCount + ']'));
                        $(this).val('');
                    }
                    if ($(this).is(':checkbox')) {
                        $(this).prop('checked', false);
                    }
                });
                newExperience.find('.remove-experience').show();
                $('#experience-container').append(newExperience);
                experienceCount++;
            });

            // Remove experience
            $(document).on('click', '.remove-experience', function() {
                $(this).closest('.experience-item').remove();
            });

            // Project section
                        // Project section
                        let projectCount = 1;
            $('#add-project').click(function() {
                const newProject = $('.project-item').first().clone();
                newProject.find('input, textarea').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        $(this).attr('name', name.replace('[0]', '[' + projectCount + ']'));
                        $(this).val('');
                    }
                });
                newProject.find('.remove-project').show();
                $('#project-container').append(newProject);
                projectCount++;
            });

            // Remove project
            $(document).on('click', '.remove-project', function() {
                $(this).closest('.project-item').remove();
            });

            // Skill section
            let skillCount = 1;
            $('#add-skill').click(function() {
                const newSkill = $('.skill-item').first().clone();
                newSkill.find('input, select').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        $(this).attr('name', name.replace('[0]', '[' + skillCount + ']'));
                        $(this).val('');
                    }
                });
                newSkill.find('.remove-skill').show();
                $('#skill-container').append(newSkill);
                skillCount++;
            });

            // Remove skill
            $(document).on('click', '.remove-skill', function() {
                $(this).closest('.skill-item').remove();
            });

            // Current job checkbox behavior
            $(document).on('change', '.current-job', function() {
                const endDateInput = $(this).closest('.experience-item').find('.exp-end-date');
                if($(this).is(':checked')) {
                    endDateInput.val('').prop('disabled', true);
                } else {
                    endDateInput.prop('disabled', false);
                }
            });
        });
    </script>
</body>
</html>
