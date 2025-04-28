<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function create()
    {
        $session_id = session()->getId();
        return view('resume.create', compact('session_id'));
    }

    public function store(Request $request)
    {
        $session_id = $request->session_id;

        // Store basic information
        $resume = new Resume;
        $resume->session_id = $session_id;
        $resume->full_name = $request->full_name;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->address = $request->address;
        $resume->website = $request->website;
        $resume->linkedin = $request->linkedin;
        $resume->github = $request->github;
        $resume->summary = $request->summary;
        $resume->save();

        // Store education
        if ($request->has('education')) {
            foreach ($request->education as $edu) {
                $education = new Education;
                $education->session_id = $session_id;
                $education->institution = $edu['institution'];
                $education->degree = $edu['degree'];
                $education->field_of_study = $edu['field_of_study'] ?? null;
                $education->start_date = $edu['start_date'] ?? null;
                $education->end_date = $edu['end_date'] ?? null;
                $education->gpa = $edu['gpa'] ?? null;
                $education->description = $edu['description'] ?? null;
                $education->save();
            }
        }

        // Store experience
        if ($request->has('experience')) {
            foreach ($request->experience as $exp) {
                $experience = new Experience;
                $experience->session_id = $session_id;
                $experience->company_name = $exp['company_name'];
                $experience->position = $exp['position'];
                $experience->start_date = $exp['start_date'] ?? null;
                $experience->end_date = $exp['end_date'] ?? null;
                $experience->current_job = isset($exp['current_job']);
                $experience->job_description = $exp['job_description'] ?? null;
                $experience->save();
            }
        }

        // Store projects
        if ($request->has('project')) {
            foreach ($request->project as $proj) {
                $project = new Project;
                $project->session_id = $session_id;
                $project->project_name = $proj['project_name'];
                $project->project_url = $proj['project_url'] ?? null;
                $project->description = $proj['description'] ?? null;
                $project->technologies = $proj['technologies'] ?? null;
                $project->save();
            }
        }

        // Store skills
        if ($request->has('skill')) {
            foreach ($request->skill as $skl) {
                $skill = new Skill;
                $skill->session_id = $session_id;
                $skill->skill_name = $skl['skill_name'];
                $skill->proficiency = $skl['proficiency'] ?? null;
                $skill->save();
            }
        }

        return redirect()->route('resume.preview', $session_id);
    }

    public function preview($session_id)
    {
        $resume = Resume::where('session_id', $session_id)->first();
        $education = Education::where('session_id', $session_id)->get();
        $experience = Experience::where('session_id', $session_id)->get();
        $projects = Project::where('session_id', $session_id)->get();
        $skills = Skill::where('session_id', $session_id)->get();

        return view('resume.preview', compact('resume', 'education', 'experience', 'projects', 'skills', 'session_id'));
    }

    public function download($session_id, $template)
    {
        $resume = Resume::where('session_id', $session_id)->first();
        $education = Education::where('session_id', $session_id)->get();
        $experience = Experience::where('session_id', $session_id)->get();
        $projects = Project::where('session_id', $session_id)->get();
        $skills = Skill::where('session_id', $session_id)->get();

        $view = 'resume.templates.' . $template;
        $pdf = Pdf::loadView($view, compact('resume', 'education', 'experience', 'projects', 'skills'))
            ->setPaper('A4', 'portrait')
            ->setOptions(['defaultFont' => 'sans-serif']);
        
        return $pdf->download($resume->full_name . '_' . $template . '_resume.pdf');
    }




    public function previewTemplate($session_id, $template)
{
    $resume = Resume::where('session_id', $session_id)->first();
    $education = Education::where('session_id', $session_id)->get();
    $experience = Experience::where('session_id', $session_id)->get();
    $projects = Project::where('session_id', $session_id)->get();
    $skills = Skill::where('session_id', $session_id)->get();

    $view = 'resume.templates.' . $template;
    return view($view, compact('resume', 'education', 'experience', 'projects', 'skills'));
}

}
