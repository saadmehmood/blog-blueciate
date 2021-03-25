<?php

namespace App\Http\Controllers;

use App\Mail\BpmsReady;
use App\Mail\BpmsWebinar;
use App\Mail\ContactUs;
use App\Mail\RemoteWork;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mail;

class BlueciateController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        return view('blueciate.home', [
            'showVideo' => true,
            'title' => 'Blueciate',
            'metaDescription' => ''
        ]);
    }
    public function products(): View
    {
        return view('blueciate.products', [
            'title' => 'products',
            'metaDescription' => ''
        ]);
    }
    public function cloud(): View
    {
        return view('blueciate.cloud', [
            'title' => 'Clouds Digital :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function consulting(): View
    {
        return view('blueciate.consulting', [
            'title' => 'Blueciate',
            'metaDescription' => ''
        ]);
    }
    public function login(): View
    {
        return view('blueciate.login', [
            'title' => 'Blueciate'
        ]);
    }
    public function applicationIntegration(): View
    {
        return view('blueciate.application-integration', [
            'title' => 'Application Integration :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function internetOfThings(): View
    {
        return view('blueciate.internet-of-things', [
            'title' => 'Blueciate',
            'metaDescription' => ''
        ]);
    }
    public function websiteDevelopment(): View
    {
        return view('blueciate.services.website-development', [
            'title' => 'Website Development :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function staffing(): View
    {
        return view('blueciate.services.staffing', [
            'title' => 'Resource Management System,Staffing:- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function smallBusiness(): View
    {
        return view('blueciate.small-business', [
            'title' => 'Small & Mid Size Businesses :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function analytics(): View
    {
        return view('blueciate.analytics', [
            'title' => 'Website Development :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function cloudAppsApi(): View
    {
        return view('blueciate.cloud-apps-api', [
            'title' => 'Cloud Apps, & API :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function monitoring(): View
    {
        return view('blueciate.monitoring', [
            'title' => 'cloud & application monitoring :- Blueciate Inc',
            'metaDescription' => 'The monitoring solution for all areas of IT, Network Latency, firewall Monitoring, Ip Monitoring, LAN Monitoring, Wifi Monitoring, Network Monitoring Software, Network Optimization, Network Security Monitoring and Network Latency.'
        ]);
    }
    public function privacyPolicy(): View
    {
        return view('blueciate.policies.privacy-policy', [
            'title' => 'Privacy Policy :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function refundPolicy(): View
    {
        return view('blueciate.policies.refund-policy', [
            'title' => 'Refund Policy :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function termsConditions(): View
    {
        return view('blueciate.policies.terms-conditions', [
            'title' => 'Terms Of Use :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function eula(): View
    {
        return view('blueciate.policies.eula', [
            'title' => 'End User License Agreement:- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function aboutUs(): View
    {
        return view('blueciate.about-us', [
            'title' => 'About Us :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function contactUs(): View
    {
        return view('blueciate.contact-us', [
            'title' => 'Contact Us :- Blueciate Inc',
            'metaDescription' => '',
            'mailStatus' => 'error'
        ]);
    }
    public function contactUsMail(Request $request): View
    {
        if ($request->get('btnSubmit')) {
            Mail::to('info@blueciate.com')->send(new ContactUs($request->all()));
        }
        return view('blueciate.contact-us', [
            'title' => 'Contact Us :- Blueciate Inc',
            'metaDescription' => '',
            'mailStatus' => 'success'
        ]);
    }
    public function clients(): View
    {
        return view('blueciate.clients', [
            'title' => 'Blueciate',
            'metaDescription' => ''
        ]);
    }
    public function partnerships(): View
    {
        return view('blueciate.partnerships', [
            'title' => 'Consulting :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function bpm(): View
    {
        $title = 'Business Process Management :- Blueciate Inc';
        $metaDescription = 'AI, ANALYTICS, ARTIFICIAL INTELLIGENCE, AUGMENTED INTELLIGENCE, AWARDS, AZURE, BPM, BPMS, BUSINESS, BUSINESS PROCESS MANAGEMENT, BUSINESS RULES, BUSINESS SOLUTION, CLOUD COMMUNICATION, DIGITAL BUSINESS, DIGITAL PLATFORM, DIGITAL TRANSFORMATION, DOCUMENT MANAGEMENT, EDUCACIÓN, EDUCATION, ENTERPRISE SOLUTIONS, EVENTS, FAMILY WORK BALANCED, GARTNER, HYPERAUTOMATION, IBPMS, INNOVATION, INTEGRATION, INTELLIGENT APPLICATION, INTELLIGENT AUTOMATION, INTELLIGENT BUSINESS, INTELLIGENT PROCESSES, IT, LOW CODE, MACHINE LEARNING, MICROSOFT, MOBILITY, NEWS, PROCESS AUTOMATION, REMOTE WORK, REPORT, RPA, SAP, TECHNOLOGY, TRASFORMACIÓN, DIGITAL';
        return view('blueciate.bpm', [
            'title' => $title,
            'metaDescription' => $metaDescription
        ]);
    }
    public function crm(): View
    {
        return view('blueciate.crm', [
            'title' => 'Blueciate',
            'metaDescription' => ''
        ]);
    }
    public function bpmsWebinar(): View
    {
        return view('blueciate.bpms-webinar', [
            'title' => 'bpmswebinar :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function bpmsWebinarMail(Request $request): View
    {
        Mail::to('info@blueciate.com')->send(new BpmsReady($request->all()));
        Mail::to($request->get('emailAddress'))->send(new BpmsWebinar($request->all()));
        return view('blueciate.webinar-thankyou', [
            'title' => 'bpmswebinar :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function bpmsReady(): View
    {
        return view('blueciate.bpms-ready', [
            'title' => 'bpms-ready :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function bpmsReadyMail(Request $request): View
    {
        Mail::to('info@blueciate.com')->send(new BpmsReady($request->all()));
        return view('blueciate.bpms-thankyou', [
            'title' => 'bpms-ready :- Blueciate Inc',
            'metaDescription' => ''
        ]);
    }
    public function univergeBlue(): View
    {
        $title = 'Business Process Management :- Blueciate Inc';
        $metaDescription = 'AI, ANALYTICS, ARTIFICIAL INTELLIGENCE, AUGMENTED INTELLIGENCE, AWARDS, AZURE, BPM, BPMS, BUSINESS, BUSINESS PROCESS MANAGEMENT, BUSINESS RULES, BUSINESS SOLUTION, CLOUD COMMUNICATION, DIGITAL BUSINESS, DIGITAL PLATFORM, DIGITAL TRANSFORMATION, DOCUMENT MANAGEMENT, EDUCACIÓN, EDUCATION, ENTERPRISE SOLUTIONS, EVENTS, FAMILY WORK BALANCED, GARTNER, HYPERAUTOMATION, IBPMS, INNOVATION, INTEGRATION, INTELLIGENT APPLICATION, INTELLIGENT AUTOMATION, INTELLIGENT BUSINESS, INTELLIGENT PROCESSES, IT, LOW CODE, MACHINE LEARNING, MICROSOFT, MOBILITY, NEWS, PROCESS AUTOMATION, REMOTE WORK, REPORT, RPA, SAP, TECHNOLOGY, TRASFORMACIÓN, DIGITAL';
        return view('blueciate.univerge-blue', [
            'title' => $title,
            'metaDescription' => $metaDescription
        ]);
    }
    public function remoteWork(): View
    {
        $title = 'Business Process Management :- Blueciate Inc';
        $metaDescription = 'Remote work';
        return view('blueciate.remote-work', [
            'title' => $title,
            'metaDescription' => $metaDescription
        ]);
    }
    public function remoteWorkMail(Request $request): bool
    {
        Mail::to('info@blueciate.com')->send(new RemoteWork($request->all()));
        return true;
    }
}
